<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QrCodeMail extends Mailable
{
    use Queueable, SerializesModels;

    public $offer, $uuid;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($offer, $uuid)
    {
        $this->offer = $offer;
        $this->uuid = $uuid;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.qrcode')->with([
            'qrCode' => $this->offer,
            'uuid' => $this->uuid
        ])->subject('QR Code Email');
    }
}
