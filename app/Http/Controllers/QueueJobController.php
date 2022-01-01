<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;

class QueueJobController extends Controller
{
    public function sendEmailThroughJob(){
        $emailJob = (new SendEmailJob("wariszargardev@gmail.com", 2))->delay(Carbon::now()->addMinute(2));
        dispatch($emailJob);

        $emailJob = (new SendEmailJob("wariszargardev@gmail.com", 1))->delay(Carbon::now()->addMinute(1));
        dispatch($emailJob);

        $emailJob = (new SendEmailJob("wariszargardev@gmail.com", 30))->delay(Carbon::now()->addSecond(30));
        dispatch($emailJob);

    }
}
