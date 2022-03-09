<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

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

        $date = "12-02-2022 03:04:12";
        // dateGetters($date);
        // printAll(setDate($date));

        $start_date = "12-08-2022 08:50";
        $end_date = "12-10-2025 12:50";

        // printAll("Difference in years " . getDifferenceInYears($start_date , $end_date). " <br> Difference in days " . getDifferenceInDays($start_date , $end_date) . "<br> Difference in Hours " . getDifferenceInHours($start_date, $end_date) . " <br> Difference in minutes " . getDifferenceInMinutes($start_date, $end_date) . " <br> Difference in Seconds " . getDifferenceInSeconds($start_date , $end_date));
        // printAll(getDateFroHumans($start_date));

        $date1 = "12-09-2022 08:50";
        $date2 = "12-10-2022 08:50";
        //printAll(checkIfTwoDatesAreEqual($date1,$date2) ? "Yes" :"No");

        // if date is greater than today date then return true otherwise false
        $date = "12-01-2022 08:50";
        // printAll(isDateGreaterThanCurrentDate($date) ? "Yes" : "No");

        // printAll(getDateOfTimeZone($date, 'America/Vancouver'));

        // printAll(getLocaleDate($date, 'fr_FR'));
        // printAll(getLocaleDate($date, 'en_US'));

        // echo "<pre>";
        // $dates = getAllDatesBetweenTwoDates("12-09-2022" , "12-10-2022");
        // printAll("Total days " . count($dates));
        // foreach ($dates as $date){
        //      print_r($date);
        // }
        // die();


        // $interVal = getTodayInterval('06:00',"08:00" , 1);
        // printAll(count($interVal));

        // printAll(getSlotsBetweenTwoDates('12-09-2022 06:00', '12-09-2022 13:00' , 30));
        // printAll(getSlotsBetweenTwoDates('12-09-2022 06:00', '13-09-2022 06:00' , 30));
        // printAll(getSlotsBetweenTwoDates('12-09-2022 06:00', '13-09-2022 06:00' , 1, "hours"));
        // printAll(getSingleDaySlots('12-09-2022',"06:30" ,"13:30" , 30));

        // printAll(newDateFormat('12/09/2022 06:30:25'));
    }
}
