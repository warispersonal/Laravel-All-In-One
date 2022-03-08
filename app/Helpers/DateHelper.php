<?php

use Carbon\Carbon;

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

