<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class mailUserRegister extends Mailable
{
    use Queueable, SerializesModels;

    public $register;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($register)
    {
        $this->register = $register;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@miencargo.com.ve')
            ->view('emails.userRegister')
            ->subject('Activa tu cuenta!');
    }
}
