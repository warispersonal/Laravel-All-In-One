<?php

use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('count-down', [DateController::class, 'countDown']);
Route::get('count-down-separate', [DateController::class, 'countDownWithDateTimeSeparate']);
Route::get('date-formatting', [DateController::class, 'dateFormattingUsingCarbon']);
Route::get('working-with-dates', [DateController::class, 'workingWithDates']);
