<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
    {
        Mail::to('mdnazimuddin77@gmail.com')->send(new TestMail());

        return 'Email sent successfully';
    }
}
