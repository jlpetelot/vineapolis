<?php

namespace App\Mail;

use Illuminate\Support\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Crypt;
use App\Message;

class MailIdentifiantUnique extends Mailable
{
    use Queueable, SerializesModels;

    protected $message;

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
            ->markdown('email.identifiantunique')
            ->with([
                'name'          => $this->message->name,
                'email'         => $this->message->email,
                'sujet'         => $this->message->sujet,
                'role'          => $this->message->role,
                'motdepasse'    => Crypt::decrypt($this->message->motdepasse),
                'contenu'       => $this->message->contenu,
                'date'          => Carbon::now()
            ]);

    }
}
