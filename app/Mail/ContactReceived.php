<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $contatto;

    public function __construct($contatto)
    {
        $this->contatto=$contatto;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('prestoteam@gmail.com')->view('mail/contact_received');

    }
}
