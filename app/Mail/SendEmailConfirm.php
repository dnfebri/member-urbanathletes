<?php

namespace App\Mail;

use App\Models\ClubData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmailConfirm extends Mailable
{
    public $dataEmail;
    public $clubs;
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
        $clubData = ClubData::where('club_id', $this->dataEmail->club)->first();
        return $this->subject('Konfirmasi Pembayaran Telah Terkirim.')
                    ->view('email.isi_email_confirm', compact('clubData'));
    }
}