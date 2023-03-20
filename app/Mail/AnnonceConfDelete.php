<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AnnonceConfDelete extends Mailable
{
    use Queueable, SerializesModels;


    public function build(): AnnonceConfDelete
    {

        return $this->view('emails.mailDelete')
            ->subject('Confirmation de suppression de votre annonce');
    }
}
