<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class UploadImage extends Controller
{
    public function store(Request $request){
        $uploadFolder = 'users';
        $image = $request->file('file');
        $image_uploaded_path = $image->store($uploadFolder, 'public');
       
    }
}
