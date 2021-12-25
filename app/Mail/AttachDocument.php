<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class AttachDocument extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // for single document

        /*
        return $this->markdown('emails.document.document_attach')
            ->attach(public_path('pdf/sample.pdf'), [
                'as' => 'sample.pdf',
                'mime' => 'application/pdf',
            ]);
        */

        // for multiple document

        $email =  $this->markdown('emails.document.document_attach');

        $attachments = [
            public_path('pdf/sample.pdf'),
            public_path('pdf/sample1.pdf'),
            public_path('pdf/sample2.pdf'),
            public_path('pdf/sample3.pdf'),
        ];

        foreach ($attachments as $filePath) {
            $email->attach($filePath);
        }

        return  $email;
    }
}
