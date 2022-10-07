<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class BisVerifEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($dataEmail, $clubs)
    {
        $this->dataEmail = $dataEmail;
        $this->clubs = $clubs;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Hai '. $this->dataEmail->nama . ', Konfirmasi Pemesanan')
                    ->view('email.bisv2.confrimEmail', ['dataEmail' => $this->dataEmail, 'clubs' => $this->clubs]);
    }
}
