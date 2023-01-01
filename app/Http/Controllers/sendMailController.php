<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\AcceptanceMail;
use App\Mail\MessageMail;
use Illuminate\Support\Facades\Mail;

class sendMailController extends Controller
{
    public function sendAcceptanceMail($address,$username,$password)
    {
        $mailData = [
            "username" => $username,
            "password" => $password
    ];


    Mail::to($address)->send(new AcceptanceMail($mailData));

    //dd("Mail Sent Successfully!");
}

public function sendMessageMail($address,$title,$message)
{
    $mailData = [
    "title" => $title,
    "message" => $message
];


Mail::to($address)->send(new MessageMail($mailData));


}
}
