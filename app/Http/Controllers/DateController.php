<?php

namespace App\Http\Controllers;

use App\Models\User;

class DateController extends Controller
{
    public function countDown()
    {
        $user = User::first();
        return view("dates.count-down", compact('user'));
    }

    public function countDownWithDateTimeSeparate()
    {
        $user = User::first();
        $combinedDT = date('Y-m-d H:i:s', strtotime("$user->date $user->time"));
        return view("dates.count-down-separate", compact('user', 'combinedDT'));
    }
}
