<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class CacheController extends Controller
{
    public function index(){
        // Put data into cache
        Cache::put('users', 'Waris Zargar');

        // Put data to specific cache driver
        Cache::store('file')->put('users' , "Waris zargar");
        Cache::put('key', 'value', $seconds = 10);
        Cache::put('key', 'value', now()->addMinutes(10));


        // Cache value get
        $val = Cache::get('users');

        // Accessing Multiple Cache Stores
        $val = Cache::store('file')->get('users');

        // Cache with default value
        $value = Cache::get('key', 'default');
        $value = Cache::get('users', function () {
            return User::all();
        });

        // Checking For Item Existence
        if (Cache::has('key')) {
            //
        }

        // Retrieve & Store if value not exisst  in store then it will store in to cache and then retreive if exists then retreive from cache
        $user_info = Cache::remember('user_info', 60, function () {
            return DB::table('users')->get();
        });
        echo  "User info " . count($user_info);

        //  You may use the rememberForever method to retrieve an item from the cache or store it forever if it does not exist:
        $users_info = Cache::rememberForever('users_info', function () {
            return DB::table('users')->get();
        });
        echo  "<br>Users info " . count($users_info);


        // Store If Not Present
        Cache::add('key', 'value', $seconds);
        Cache::forever('key', 'value');

        // Remove item from cache
        Cache::forget('key');

         // You may clear the entire cache using the flush method:
        Cache::flush();

        
//        $users = Cache::rememberForever('users',function () {
//            return User::all();
//        });
        return view('cache.index');
    }
}
