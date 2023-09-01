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
            return redirect()->back()->with('error', 'Annuncio non trovato');
        }
        
        $cart = Session::get('cart', []);
        $cart[$announcementId] = [
            'title' => $announcement->title,
            'price' => $announcement->price,
        ];
        
        Session::put('cart', $cart);
        
        return redirect()->route('cart_index')->with('success', 'Annuncio aggiunto al carrello');
    }
    
    public function checkout()
    {
        $user = Auth::user();
        $cart = Session::get('cart', []);
        
        $stripe = new StripeClient($user->stripe_id);
        
        
        if (empty($cart)) {
            return redirect()->route('cart_index')->with('error', 'Il carrello è vuoto');
        }
        
        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }
        
        // $paymentMethod = 'pm_card_visa_chargeDeclined'; //carta test stripe rifiutata
        
        $paymentMethod = 'pm_card_visa'; // carta test stripe accettata
        
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
            
            
            return view('cart.success', compact('paymentIntent', 'cart'));
            
        } catch (CardException $e) {
            
            return view('cart.failed', ['errorMessage' => $errorMessage]);
        }
        
    }
    
}
