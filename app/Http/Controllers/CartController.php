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
        $cartTotal = $this->calculateCartTotal($cart);
        return view('cart.index', compact('cart', 'cartTotal'));
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
            'quantity' => 1
        ];
        
        Session::put('cart', $cart);
        
        return redirect()->route('cart_index')->with('message', 'Annuncio aggiunto al carrello');
    }
    
    public function checkout(Request $request)
    {
        $user = Auth::user();
        $cart = Session::get('cart', []);
        
        if (empty($cart)) {
            return redirect()->route('cart_index')->with('access.denied', 'Il carrello è vuoto');
        }
        
        // Inizializza il client Stripe
        $stripe = new StripeClient(config('services.stripe.secret'));
        
        // Verifica se l'utente esiste già su Stripe
        $stripeCustomerId = $user->stripe_id;
        
        if (!$stripeCustomerId) {
            // L'utente non ha un cliente Stripe associato, cerchiamo se esiste già uno con lo stesso indirizzo email
            $existingCustomer = $stripe->customers->all(['email' => $user->email])->first();
            
            if ($existingCustomer) {
                // Associa il cliente esistente all'utente
                $user->update(['stripe_id' => $existingCustomer->id]);
                $stripeCustomerId = $existingCustomer->id;
            } else {
                // Crea un nuovo cliente su Stripe
                try {
                    $stripeCustomer = $stripe->customers->create([
                        'email' => $user->email,
                        'name' => $user->name,
                        'metadata' => [
                            'user_id' => $user->id,
                            'client_ip' => $request->ip(),
                            'client_name' => $user->name,
                            'receipt_email' => $user->email,
                        ],
                        'shipping' => [
                            'name' => $user->name,
                            'address' => ['line1' => $user->address]
                        ],
                    ]);
                    
                    $user->update(['stripe_id' => $stripeCustomer->id]);
                    $stripeCustomerId = $stripeCustomer->id;
                    
                } catch (\Exception $e) {
                    // Gestisci l'errore di creazione del cliente Stripe
                    session()->flash('error', 'Errore nella creazione del cliente Stripe: ' . $e->getMessage());
                    return response()->json(['success' => false]);
                }
            }
        }
        
        
        // $paymentMethod = 'pm_card_visa_chargeDeclined'; //carta test stripe rifiutata
        
        // $paymentMethod = 'pm_card_visa'; // carta test stripe accettata
        
        $paymentMethod = $request->input('paymentMethodId');
        
        $cartTotal = $this->calculateCartTotal($cart) * 100;
        
        $description = '';
        foreach ($cart as $item) {
            $description .= $item['title'] . ', '; // Aggiungi il titolo dell'articolo alla descrizione
        }
        
        // Rimuovi l'ultima virgola e lo spazio
        $description = rtrim($description, ', ');
        
        
        
        try {
            // API di Stripe
            Stripe::setApiKey(config('services.stripe.secret'));
            
            // Pagamento test con PaymentIntent
            $paymentIntent = PaymentIntent::create([
                'amount' => $cartTotal,
                'currency' => 'eur',
                'payment_method' => $paymentMethod,
                'payment_method_types' => ['card'],
                'confirm' => true,
                'description' => $description,
                'customer' => $stripeCustomerId,
            ]);
            
            Session::forget('cart');
            
            session()->flash('success', 'Pagamento completato con successo');
            return response()->json(['success' => true]);
            
        } catch (CardException $e) {
            
            session()->flash('error', 'Il pagamento non è andato a buon fine');
            return response()->json(['success' => false]);
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
            if ($cart[$announcementId]['quantity'] > 1) {
                $cart[$announcementId]['quantity'] -= 1;
            } else {
                unset($cart[$announcementId]);
            }
            
            
            session(['cart' => $cart]);
            
            return response()->json(['success' => true]);
        }
        
        return response()->json(['success' => false, 'message' => 'Elemento non trovato nel carrello']);
    }
    
    public function cartAnnouncementAdd($announcementId)
    {
        $cart = session('cart', []);
        
        if (array_key_exists($announcementId, $cart)) {
            
            $cart[$announcementId]['quantity'] += 1;
            
            $cartTotal = $this->calculateCartTotal($cart);
            
            session(['cart' => $cart]);
            
            return response()->json(['success' => true, 'quantity' => $cart[$announcementId]['quantity'], 'cartTotal' => $cartTotal]);
        }
        
        return response()->json(['success' => false, 'message' => 'Elemento non trovato nel carrello']);
    }
    
    private function calculateCartTotal($cart)
    {
        $total = 0;
        
        foreach ($cart as $item) {
            
            if (isset($item['price']) && isset($item['quantity'])) {
                $total += $item['price'] * $item['quantity'];
            }
        }
        
        return $total;
    }
    
}
