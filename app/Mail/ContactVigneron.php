<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Message;
use Illuminate\Support\Carbon;

class ContactVigneron extends Mailable
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
        return $this->from(env('FROM_CONTACT_VIGNERON'))
            ->markdown('email.contactvigneron')
            ->with([
                'name'      => $this->message->name,
                'email'     => $this->message->email,
                'date'      => Carbon::now()
            ]);
    }
}
