<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Message;

class Contactdusite extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;

    /**
     * Méthode __construct() permet de stocker la variable privée $message
     *
     * @param : injection de Message $message de Laracasts\Flash\Message
     * @return void
    **/
    public function __construct(Message $message)
    {
        // Ici on permet à la méthode __construct() d'utiliser la variable privée protected $message
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('FROM_CONTACT'))
            ->markdown('email.message')
            ->with([
                'name'      => $this->message->name,
                'email'     => $this->message->email,
                'sujet'     => $this->message->sujet,
                'role'      => $this->message->role,
                'contenu'   => $this->message->contenu,
                'tache'     => $this->message->tache
            ]);
    }
}
