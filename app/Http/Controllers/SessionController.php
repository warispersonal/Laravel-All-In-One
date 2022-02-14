<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __invoke(Request $request)
    {
//        $request->session()->flash('status', 'Task was successful!');
        return view('welcome');
    }
}
