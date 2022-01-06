<?php

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
//    $post = new \App\Models\Post([
//        'title'=> 'dummmy',
//        'body' => 'dummy',
//        'user_id' => 1
//    ]);
//    $post->save();
    return view('welcome');
});

Auth::routes();

Route::get('search',[\App\Http\Controllers\AlgoliaController::class,'search'])->name('search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
