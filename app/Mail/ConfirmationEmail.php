<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $email;
    public $confirmationLink;

    public function __construct($email, $confirmationLink)
    {
        $this->email = $email;
        $this->confirmationLink = $confirmationLink;
    }

    public function build()
    {
        return $this->view('mail.confirmation')->subject('Conferma l\'iscrizione alla newsletter');
    }
}

