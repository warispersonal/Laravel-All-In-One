<?php

use Carbon\Carbon;
use Carbon\CarbonPeriod;

function printAll($data){
    echo "<pre>";
    print_r($data);
    die();
}

function getTodayDate(){
    // 1 Way
    return Carbon::now(); // Current date & time

    // 2 Way
    // return new Carbon();

    // 3 Way
    // return Carbon::today();
}

function getYesterDayDate(){
    return Carbon::yesterday();
}

function getTomorrowDate(){
    return Carbon::tomorrow();
}

function addDaysToDate($noOfDays= 30, $date= null){
    if($date == null) {
        $current = Carbon::now();
    }
    else{
        $current = Carbon::parse($date);
    }
    $trialExpires = $current->addDays($noOfDays);
    return $trialExpires;
}

function convertToDate($date){
    $date = Carbon::parse($date);
    return $date->toDateString();
}

function convertToDateTime($date){
    $date = Carbon::parse($date);
    return $date->toDateTimeString();
}

function convertToFormattedDateString($date){
    $date = Carbon::parse($date);
    return $date->toFormattedDateString();
}

function addIntoYearsMonthsWeeksHoursMinutesSeconds(){
    $date = Carbon::create(2022, 1, 31, 0);

    // 1 Add 5 years to date
    $date->addYear(); // add only 1 years
    $date->addYears(5); // add only 5 years

    // 2 add 5 Month to date
    $date->addMonth(); // add only 1 Month
    $date->addMonths(5); // add only 5 Month

    // 3 add 5 days to date
    $date->addDay(); // add only 1 days
    $date->addDays(5); // add only 5 days

    // 4 add 5 seconds to date
    $date->addSecond(); // add only 1 seconds
    $date->addSeconds(5); // add only 5 seconds
}
function subFromYearsMonthsWeeksHoursMinutesSeconds(){
    $date = Carbon::create(2022, 1, 31, 0);

    // 1 Sub 5 years to date
    $date->subYear(); // Sub only 1 years
    $date->subYears(5); // Sub only 5 years

    // 2 Sub 5 Month to date
    $date->subMonth(); // Sub only 1 Month
    $date->subMonths(5); // Sub only 5 Month

    // 3 Sub 5 days to date
    $date->subDay(); // Sub only 1 days
    $date->subDays(5); // Sub only 5 days

    // 4 Sub 5 seconds to date
    $date->subSecond(); // Sub only 1 seconds
    $date->subSeconds(5); // Sub only 5 seconds
}

function dateGetters($date){
    $dt = Carbon::parse($date);
    echo "year " . $dt->year . "<br>";
    echo "month " . $dt->month . "<br>";
    echo "day " . $dt->day . "<br>";
    echo "hour " . $dt->hour . "<br>";
    echo "second " . $dt->second . "<br>";
    echo "dayOfWeek " . $dt->dayOfWeek . "<br>";
    echo "dayOfYear " . $dt->dayOfYear . "<br>";
    echo "weekOfMonth " . $dt->weekOfMonth . "<br>";
    echo "daysInMonth " . $dt->daysInMonth . "<br>";

    die();
}

function setDate($date){
    $dt = Carbon::parse($date);

    $dt->year   = 2015;
    $dt->month  = 04;
    $dt->day    = 21;
    $dt->hour   = 22;
    $dt->minute = 32;
    $dt->second = 5;

    return $dt;
}

function getDifferenceInYears($start_date, $end_date){
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);
    return $end_date->diffInYears($start_date);
}

function getDifferenceInDays($start_date, $end_date){
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);
    return $end_date->diffInDays($start_date);
}

function getDifferenceInHours($start_date, $end_date){
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);
    return $end_date->diffInHours($start_date);
}

function getDifferenceInMinutes($start_date, $end_date){
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);
    return $end_date->diffInMinutes($start_date);
}

function getDifferenceInSeconds($start_date, $end_date){
    $start_date = Carbon::parse($start_date);
    $end_date = Carbon::parse($end_date);
    return $end_date->diffInSeconds($start_date);
}

function getDateFroHumans($date){
    $date = Carbon::parse($date);
    return $date->diffForHumans();
}

function checkIfTwoDatesAreEqual($date1, $date2){
    $date1 = Carbon::parse($date1);
    $date2 = Carbon::parse($date2);
    if($date1->eq($date2)){
        return true;
    }
    return false;
}

function isDateGreaterThanCurrentDate($end_data){
    $current_date = Carbon::now();
    $end_data = Carbon::parse($end_data);
    if($end_data->gt($current_date)){
        return true;
    }
    return false;
}

function isDateGreaterThanOrEqualCurrentDate($end_data){
    $current_date = Carbon::now();
    $end_data = Carbon::parse($end_data);
    if($end_data->gte($current_date)){
        return true;
    }
    return false;
}

function isDateLesserThanCurrentDate($end_data){
    $current_date = Carbon::now();
    $end_data = Carbon::parse($end_data);
    if($end_data->lt($current_date)){
        return true;
    }
    return false;
}

function isDateLesserThanOrEqualCurrentDate($end_data){
    $current_date = Carbon::now();
    $end_data = Carbon::parse($end_data);
    if($end_data->lte($current_date)){
        return true;
    }
    return false;
}

function getDateOfTimeZone($date, $timezone){
    return Carbon::parse($date, $timezone);
}

function getLocaleDate($date, $locale){
    return Carbon::parse($date)->locale($locale)->diffForHumans();
}

function getAllDatesBetweenTwoDates($startDate , $endDate){
    return CarbonPeriod::create($startDate, $endDate);
}

function getTodayInterval($from , $end , $interval){
    return CarbonPeriod::since($from)->hours($interval)->until($end)->toArray();
}

function getSlotsBetweenTwoDates($fromDate, $toDate, $interval, $format='minutes'){
    $fromDate = Carbon::parse($fromDate);
    $toDate = Carbon::parse($toDate);
    $period = new CarbonPeriod($fromDate, $interval . ' ' . $format , $toDate); // $interval in  is '15 minutes'
    $slots = [];
    foreach ($period as $item) {
        array_push($slots, $item->format("h:i A"));
    }
    return $slots;
}

function getSingleDaySlots($data, $from, $to ,$interval, $format='minutes'){
    $fromDate = Carbon::parse($data . ' ' . $from);
    $toDate = Carbon::parse($data . ' ' . $to);
    $period = new CarbonPeriod($fromDate, $interval . ' ' . $format , $toDate); // $interval in  is '15 minutes'
    $slots = [];
    foreach ($period as $item) {
        array_push($slots, $item->format("h:i A"));
    }
    return $slots;
}
