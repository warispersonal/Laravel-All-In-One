<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::find(1);
        $returnHTML = view('user_details',compact('user'))->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }
}
