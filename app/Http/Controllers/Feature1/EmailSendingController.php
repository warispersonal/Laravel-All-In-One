<?php

namespace App\Http\Controllers\Feature1;

use App\Http\Controllers\Controller;
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
}
