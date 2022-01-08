<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AlgoliaController extends Controller
{
    public function search(Request $request){
        $request->flashOnly('q');
        $results = Post::search($request->q)->paginate(10);
        return view('search',compact('results'));
    }
}
