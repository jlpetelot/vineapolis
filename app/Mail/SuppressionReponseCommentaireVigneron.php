<?php

namespace App\Mail;

use Illuminate\Support\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Message;

class SuppressionReponseCommentaireVigneron extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
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
            ->markdown('email.suppressionreponsecommentairevigneron')
            ->with([
                'vigneron'          => $this->message->name,
                'email'             => $this->message->email,
                'sujet'             => $this->message->sujet,
                'role'              => $this->message->role,
                'contenu'           => $this->message->contenu,
                'creationmessage'   => $this->message->created_at,
                'miseajour'         => $this->message->updated_at,
        ]);
    }
}
