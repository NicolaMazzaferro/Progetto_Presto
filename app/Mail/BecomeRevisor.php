<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;


    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }


    public function build(){
        return $this->from('presto.it@noreply.com')->view('mail.become_revisor');
    }

}
