<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;
    public $nom;
    public $mail;
    public $sujet;
    public $messsage;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email, $subject, $mssg)
    {
        $this->nom=$name;
        $this->mail=$email;
        $this->sujet=$subject;
        $this->messsage=$mssg;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->mail)->subject('Reception')->view('mail', compact('nom', 'mail', 'sujet', 'messsage'));
    }
}
