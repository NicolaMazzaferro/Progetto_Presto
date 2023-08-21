<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;

    public $newsletter_body;

    public function __construct($newsletter_body)
    {
        $this->newsletter_body = $newsletter_body;

    }

    public function build()
    {
        return $this->view('mail.newsletter')->subject('Newsletter del giorno!');
    }
}
