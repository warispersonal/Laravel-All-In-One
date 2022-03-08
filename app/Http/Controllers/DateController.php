<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;

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

    public function dateFormattingUsingCarbon()
    {
        // 1 Format date
        $user = User::first();
        $createdAt = Carbon::parse($user->created_at);
        $new_format = $createdAt->format('M d Y');

//        die($new_format);


        // 2 Set time zone
//        $date = new Carbon();
//        $date->setTimezone('Europe/London');
//        $whitelist_date = $date->now();


        // 3
        $current_date = Carbon::now();
        $end_date = Carbon::parse($user->created_at);

        $are_different = $current_date->gt($end_date);
        if($are_different){
            dd("Current date Greater ");
        }
        else{
            dd("Current date Lesser");
        }
    }

    public function workingWithDates(){
        // printAll("Today " .  getTodayDate() . " Yesterday date ". getYesterDayDate() . " Tomorrow date " . getTomorrowDate());

        // Creating Dates with More Fine-Grained Control
        // Carbon::createFromDate($year, $month, $day, $tz);
        // Carbon::createFromTime($hour, $minute, $second, $tz);
        // Carbon::create($year, $month, $day, $hour, $minute, $second, $tz);

        // Add days to date
        // printAll(addDaysToDate(1,'15-12-2022'));

        $date = "12-02-2022";
        // printAll(convertToDate($date)); // output 2022-02-12
        // printAll(convertToDateTime($date)); // output 2022-02-12 00:00:00
        // printAll(convertToFormattedDateString($date)); // output Feb 12, 2022
    }
}
