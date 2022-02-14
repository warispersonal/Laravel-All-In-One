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

Route::get('/', function (\Illuminate\Http\Request $request) {
    // Storing data
    // $request->session()->put('session_key',"Waris Zargar");

    // Getting session value
    // dd($request->session()->get('session_key'));

    // Getting value if exists in session otherwise return default value
    //    echo ($request->session()->get('session_key_value',"No value found"));

    // Putting data into session
    // Via a request instance...
    // $request->session()->put('key', 'value');

    // Session helper
    // Getting value
    $value = session('key');
    // Getting with default value
    $value = session('key', 'default');
    //Storing value
    session(['key' => 'value']);

    // Getting all session data
    $data = $request->session()->all();
    // dd($data);

    if ($request->session()->has('users')) {
        echo "Determining If An Item Exists In The Session & value is not null";
    }

    if ($request->session()->exists('users')) {
        echo "To determine if an item is not present in the session, & even if value is null";
    }

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('session',\App\Http\Controllers\SessionController::class);

