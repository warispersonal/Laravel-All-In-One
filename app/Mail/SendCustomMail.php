<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendCustomMail extends Mailable
{
    use Queueable, SerializesModels;
    public $counter;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($counter)
    {
        $this->counter = $counter;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.jobs.welcome_email');
    }
}
