<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AlgoliaController extends Controller
{
    public function search(Request $request){
        $results = [];
        if($request->has('q')){
            $request->flashOnly('q');
            $results = Post::search($request->q)->get();
        }
        return view('search',compact('results'));
    }
}
