<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class UserEmailFileExport extends Mailable
{
    use Queueable, SerializesModels;
    public $file_name;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($file_name)
    {
        $this->file_name = $file_name;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $email =  $this->markdown('emails.job.email.users');
       $url = asset(Storage::url('abc.jpg'));
       $email->attach($url);
        $url = asset(Storage::url('Sales Register 2019 Cr.xlsx'));
        $email->attach($url);
        return $email;
    }
}
