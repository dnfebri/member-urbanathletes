<?php

namespace App\Mail;

use App\Models\ClubData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ConfirmStaffClub extends Mailable
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
        $clubs = $this->clubs;
        $dataEmail = $this->dataEmail;
        return $this->subject('Konfirmasi Pembayaran dari'. $this->dataEmail->nama)
                    ->view('email.staff.confirm_club', compact('clubs', 'dataEmail'));
    }
}
