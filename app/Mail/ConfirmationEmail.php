<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\aproval;

class ConfirmationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $aproval;

    /**
     * Create a new message instance.
     *
     * @param  \App\Models\aproval  $aproval
     * @return void
     */
    public function __construct(aproval $aproval)
    {
        $this->aproval = $aproval;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.confirmation')
                    ->subject('Konfirmasi Pendaftaran');
    }
}
