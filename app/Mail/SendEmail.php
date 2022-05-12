<?php

namespace App\Mail;

use App\Models\ClubData;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    public $dataEmail;
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
        if ($this->dataEmail->club != null) {
            $club_id = $this->dataEmail->club;
        } else {
            $club_id = $this->dataEmail->club_id;
        }
        
        $clubData = ClubData::where('club_id', $club_id)->first();
        return $this->subject('Hai '. $this->dataEmail->nama . ', Pesanan Anda Sebentar Lagi Kami Proses')
                    ->view('email.isi_email', compact('clubData', 'clubs'));
    }
}
