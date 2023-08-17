<?php

namespace App\Http\Controllers;

use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;

class RevisorController extends Controller
{
    // Controller revisore - Nicola

    public function index()
    {
        $announcement_to_check = Announcement::where('is_accepted' , null)->first();
        return view('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(true);
        return redirect()->back()->with('message', "Complimenti, Hai accettato l'annuncio");
    }

    public function rejectAnnouncement(Announcement $announcement)
    {
        $announcement->setAccepted(false);
        return redirect()->back()->with('message', "Complimenti, Hai rifiutato l'annuncio");
    }

    // public function becomeRevisor() {
    //     Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
    //     return redirect()->back()->with('message', 'Richiesta revisore inviata.');
    // }

    // FORM REVISOR

    public function becomeRevisor(Request $request) {
        $username = $request->username;
        $email = $request->email;
        $body = $request->body;
        Mail::to('admin@presto.it')->send(new BecomeRevisor($username, $email, $body));
        return redirect()->back()->with('message', 'Richiesta revisore inviata.');
    }

    public function makeRevisor($email){
        Artisan::call('presto:make-user-revisor', ["email" => $email]);
        return redirect('/')->with('message', "Complimenti! L'utente è diventato revisore");
    }

    // public function makeRevisor(User $user){
    //     Artisan::call('presto:make-user-revisor', ["email" => $user->email]);
    //     return redirect('/')->with('message', "Complimenti! L'utente è diventato revisore");
    // }
}
