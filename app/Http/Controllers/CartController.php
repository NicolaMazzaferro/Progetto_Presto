<?php

namespace App\Http\Controllers;

use Stripe\Stripe;
use Stripe\StripeClient;
use Stripe\PaymentIntent;
use Stripe\Radar\ValueList;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Stripe\Exception\CardException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cartIndex()
    {
        $cart = Session::get('cart', []);
        return view('cart.index', compact('cart'));
    }
    
    public function addToCart($announcementId)
    {
        $announcement = Announcement::find($announcementId);
        
        if (!$announcement) {
            return redirect()->back()->with('access.denied', 'Annuncio non trovato');
        }
        
        $cart = Session::get('cart', []);
        $cart[$announcementId] = [
            'title' => $announcement->title,
            'price' => $announcement->price,
        ];
        
        Session::put('cart', $cart);
        
        return redirect()->route('cart_index')->with('message', 'Annuncio aggiunto al carrello');
    }
    
    public function checkout(Request $request)
    {
        $user = Auth::user();
        $cart = Session::get('cart', []);
        
        $stripe = new StripeClient($user->stripe_id);
        
        
        if (empty($cart)) {
            return redirect()->route('cart_index')->with('access.denied', 'Il carrello è vuoto');
        }
        
        if (!$user->stripe_id) {
            $stripeCustomer = $stripe->customers->create([
                'email' => $user->email,
            ]);

            $user->update(['stripe_id' => $stripeCustomer->id]);
        }
        
        // $paymentMethod = 'pm_card_visa_chargeDeclined'; //carta test stripe rifiutata
        
        // $paymentMethod = 'pm_card_visa'; // carta test stripe accettata

        $paymentMethod = $request->input('paymentMethodId');
        
        $totalAmount = 0;
        foreach ($cart as $item) {
            $totalAmount += $item['price'] * 100; // Converti in centesimi
        }

        
        try {
            // API di Stripe
            Stripe::setApiKey(config('services.stripe.secret'));
            
            // Pagamento test con PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $totalAmount,
                'currency' => 'eur',
                'payment_method' => $paymentMethod,
                'payment_method_types' => ['card'],
                'confirm' => true,
                'description' => $item['title'],
                'metadata' => [
                    'user_id' => $user->id,
                    'client_ip' =>  $_SERVER['REMOTE_ADDR'],
                    'client_name' => $user->name,
                "receipt_email" => $user->email,
                ],
                "shipping" => [
                    'name' => $user->name,
                    'address' => ['line1' => $user->address,]
                    ],
            ]);
            
            Session::forget('cart');
            
            
            // return view('cart.success', compact('paymentIntent', 'cart'));

            return response()->json(['success' => true, 'message' => 'Pagamento completato con successo']);
            
        } catch (CardException $e) {
            
            // return view('cart.failed', ['errorMessage' => $errorMessage]);

            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
        
    }

    public function payment(){
        return view('cart.payment');
    }

    public function cartClear(){
        Session::forget('cart');
        return redirect()->route('cart_index')->with('message', 'Carrello svuotato con successo');
    }

    public function cartAnnouncementClear($announcementId)
{
    $cart = session('cart', []);

    if (array_key_exists($announcementId, $cart)) {
        
        unset($cart[$announcementId]);

        session(['cart' => $cart]);

        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false, 'message' => 'Elemento non trovato nel carrello']);
}
    
}
