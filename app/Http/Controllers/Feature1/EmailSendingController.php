<?php

namespace App\Http\Controllers\Feature1;

use App\Http\Controllers\Controller;
use App\Mail\AttachDocument;
use App\Mail\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailSendingController extends Controller
{
    public function emailSendWithoutTemplate(Request $request)
    {
        $ip = $request->ip();
        Mail::raw('Hi user, a new login into your account from the IP Address: ' . $ip, function ($message) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to('wariszargardev@gmail.com', 'Muhammad Waris Zargar');
            $message->subject('Test email from waris zargar');
        });

        return "Email send successfully";
    }

    public function emailSendWithTemplate($name){
        $mail = 'wariszargardev@gmail.com';
        Mail::to($mail)->send(new RegisterUser($name));

        return "Email send successfully";
    }



    public function emailSendWithAttachment(){
        $mail = 'wariszargardev@gmail.com';
        Mail::to($mail)->send(new AttachDocument);

        return "Email send successfully";
    }
}
