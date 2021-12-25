<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterUser extends Mailable
{
    use Queueable, SerializesModels;
    public $user_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name)
    {
        // this data is available in view {{$user_name}}
        $this->user_name = $user_name;
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('If you have some custom subject')->markdown('emails.users.register');
//        return $this->markdown('emails.users.register');
    }
}
