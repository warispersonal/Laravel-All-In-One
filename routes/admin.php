<?php

use App\Http\Controllers\ValidateController;
use App\Models\User;
use Illuminate\Http\Request;
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

//Route::get('/', function () {
//    echo "Admin page";
//});
//
//Route::match(['get', 'post'], 'form', function () {
//    echo "form submitted";
//});
//
//Route::any('/request', function () {
//    echo "Request receives";
//});

//Dependency injection

//Route::get('/dependency-injection', function (Request $request) {
//    return "Dependency injection";
//});
//
//Route::redirect('/request', '/admin/form');
//
//Route::view('/welcome', 'welcome_message', ['name' => 'Muhammad Waris Zargar']);
//
//Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//    echo "Parameter routes";
//});


//Route::get('/user/{id}', function (Request $request, $id) {
//    return 'Parameter & dependency injection '.$id;
//});


//Route::get('/user/{name}', function ($name) {
//    return view('welcome_message',compact('name'));
//})->where('name', '[A-Za-z]+');

//Route::get('/user/{id}', function ($id) {
//    //
//})->where('id', '[0-9]+');
//
//Route::get('/user/{id}/{name}', function ($id, $name) {
//    //
//})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);


//Route::get('/user/{id}/{name}', function ($id, $name) {
//    //
//})->whereNumber('id')->whereAlpha('name');
//
//Route::get('/user/{name}', function ($name) {
//    //
//})->whereAlphaNumeric('name');

//Route::get('/user/{id}', function ($id) {
//    echo $id;
//})->whereUuid('id');

//Route::get('/user/{id}', function ($name) {
//    echo "This route only accept integer values";
//});


//Route::get('/user/{id}/profile', function ($id) {
//    //
//})->name('profile');
//
//Route::get('/url', function () {
//    //
//     $only_url = route('profile',1);
//     echo $only_url;
//
//    // In this way it can add automatically query parameter to route.
//
//    $url = route('profile', ['id' => 1, 'photos' => 'yes']);
//    echo $url;
//});
//
//Route::get('check-url-1',[ValidateController::class, 'check'])->name('checkurl1');
//Route::get('check-url-2',[ValidateController::class, 'check'])->name('checkurl2');
//Route::get('check-url-3',[ValidateController::class, 'check'])->name('checkurl3');
//Route::get('check-url-4',[ValidateController::class, 'check'])->name('checkurl4');
//Route::get('check-url-5',[ValidateController::class, 'check'])->name('checkurl5');

// Group routes
//Route::middleware(['first', 'second'])->group(function () {
//    Route::get('validate-middleware',[ValidateController::class, 'validateMiddleware'])->name('validate-middleware');
//});
//
//Route::prefix('categories')->group(function () {
//    Route::get('/', function () {
//        echo "Listing routes";
//    });
//
//    Route::get('/show', function () {
//        echo "Show route";
//    });
//});
//
//Route::name('admin.')->group(function () {
//    Route::get('/products', function () {
//        // Route assigned name "admin.products"...
//    })->name('products');
//});
//
//Route::name('aaaaaa')->group(function (){
//    Route::prefix("aaaaaa")->group(function (){
//        // Route list
//    });
//});


// Get deleted data
Route::get('/users/{user}', function (User $user) {
    return $user->email;
})->withTrashed();


Route::fallback(function () {
    echo  "No route match";
});
