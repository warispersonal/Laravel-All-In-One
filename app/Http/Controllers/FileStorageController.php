<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileStorageController extends Controller
{
    public function create()
    {
        return view('image.create');
    }

    public function store(Request $request)
    {
        return storeFileLocally($request);
    }

    public function show()
    {
        //
    }


}
