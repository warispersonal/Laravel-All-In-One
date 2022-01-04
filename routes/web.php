<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\PDFController;
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

Route::get('generate-pdf', [PDFController::class, 'generatePDF'])->name('generate-pdf');

Route::get('/employee', [EmployeeController::class, 'showEmployees']);

Route::get('/employee/pdf', [EmployeeController::class, 'createPDF']);
