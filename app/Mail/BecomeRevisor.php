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


    // public $user;
    // public function __construct(User $user)
    // {
    //     $this->user = $user;
    // }


    // public function build(){
    //     return $this->from('presto.it@noreply.com')->view('mail.become_revisor');
    // }


    // PROVA REVISOR FORM

    public $username;
    public $email;
    public $body;

    public function __construct($username, $email, $body)
    {
        $this->username = $username;
        $this->email = $email;
        $this->body = $body;
    }

  public function build(){
        return $this->from("$this->email", "$this->username")->view('mail.become_revisor');
    }

}
