<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index(){
        $user = Cache::rememberForever('users', function () {
            return User::all();
        });
        return view('cache.index',compact('user'));
    }
}
