<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
use App\Mail\approvalizin;

class MailController extends Controller
{
    public function index()
    {
        $emailData =[
            'title' => 'Mail from hummasoft',
            'body' => 'Percobaan',
        ];
        Mail::to('kaderofficial33@gmail.com')->send(new DemoMail($emailData));
    }
}
