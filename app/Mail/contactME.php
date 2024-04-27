<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMe extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
//
        $this->details=$details;
    }

    public function build(){
        if(isset($this->details['guest'])){
            return $this->subject('Thank you for contact')->view('mail.thank-you')->with('details');
        }else{
            return $this->view('mail.contact-me')->with('details');
        }
    }
}
