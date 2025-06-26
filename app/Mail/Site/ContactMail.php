<?php

namespace App\Mail\Site;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable {
    use Queueable, SerializesModels;

    public $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function build() {
        return $this->subject('Contato pelo site')
                    ->markdown('site.emails.contact')
                    ->with('data', $this->data);
    }
}
