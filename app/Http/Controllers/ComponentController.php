<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return view('users',compact('users'));
    }
}
