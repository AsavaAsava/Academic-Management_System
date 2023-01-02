<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function sendToStudent($sid,$title,$message){
        $stCon = new StudentsController;
        $mail = $stCon->get_email($sid);
        $mesMail = new sendMailController();
        $mesMail->sendMessageMail($mail,$title,$message);
    }
    public function sendToGroup($group,$title,$message){
        $stCon = new StudentsController;
        $mails = $stCon->get_mails($group);
        $mesMail = new sendMailController();
        $mesMail->sendMessageMail($mails,$title,$message);
    } 
    }

