<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email_text, $email_subject, $email_to;
    public function __construct($text, $email_subject, $email_to)
    {
        //
        $this->email_text = $text;
        $this->email_subject = $email_subject;
        $this->email_to = $email_to;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->email_subject)
            ->to($this->email_to)
            ->view('vendor.mail.test')->with("data" ,$this->email_text);
    }
}
