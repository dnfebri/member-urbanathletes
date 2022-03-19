<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailConfirm extends Mailable
{
    public $dataEmail;
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataEmail)
    {
        $this->dataEmail = $dataEmail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Hai '. $this->dataEmail->nama . ', Pesanan Anda Kami Proses')
                    ->view('email.isi_email_confirm');
    }
}
