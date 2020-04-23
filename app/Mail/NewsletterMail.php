<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $mail;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->mail=$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('admin@labs.com')->subject('Subscription')->view('newsMail', compact('mail'));
    }
}
