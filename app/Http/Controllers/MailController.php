<?php

namespace App\Http\Controllers;
use App\Mail\MailMyCity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function SendOtp(){

        $otp = rand('111111', '999999');

        $mailData = [
            'subject' => 'One-Time Password (OTP)',
            'otp' => $otp,
            'name' => 'Roopak',
        ];

        Mail::to('whoamiroopak@gmail.com')->send(new MailMyCity($mailData));

        dd('Mail Send Successfully....');

    }
}
