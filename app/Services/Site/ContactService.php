<?php

namespace App\Services\Site;

use App\Mail\Site\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactService {
    public function sendContact(array $data): void {
        Mail::to(env('APP_MAIL'))->send(new ContactMail([
            'fullName' => $data['fullName'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]));
    }
}
