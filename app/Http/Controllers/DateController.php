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
}
