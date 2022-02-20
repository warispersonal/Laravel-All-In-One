<?php

use App\Http\Controllers\PostController;
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
Route::get('/post/create', [PostController::class, 'create']);
Route::post('/post/save', [PostController::class, 'store'])->name('save_post');
Route::get('/post/edit/{id}', [PostController::class, 'edit']);
Route::post('/post/update/{id}', [PostController::class, 'update'])->name('update_post');
