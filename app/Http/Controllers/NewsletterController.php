<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Mail\NewsletterMail;
use Illuminate\Http\Request;
use App\Mail\ConfirmationEmail;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
{
    $subscriber = Subscriber::create([
        'email' => $request->input('email'),
    ]);


    Mail::to($subscriber->email)->send(new ConfirmationEmail($subscriber->email));

    return redirect()->back()->with('message_newsletter', 'Iscrizione completata con successo! Controlla la tua email per confermare.');
}

public function newsletter(Request $request){
    
    $subscribers = Subscriber::all();

    $newsletter_body = $request->input('newsletter_body');

    foreach ($subscribers as $subscriber) {
        Mail::to($subscriber->email)->send(new NewsletterMail($newsletter_body));
    }
    
    return redirect()->back()->with('message_newsletter', 'Newsletter inviata con successo!');
}






public function newsletterIndex(){
    return view('revisor.newsletter-index');
}

}
