<?php

namespace App\Http\Controllers;

use App\Models\FileStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileStorageController extends Controller
{
    public function create()
    {
        return view('image.create');
    }

    public function store(Request $request)
    {
        // 1. Store local file into directory
        // return storeFileLocally($request);

        // 2. Store to S3 bitbucket
        return storeFileOnS3($request);
    }

    public function show($id)
    {
        // This will show image
        // return getImageFromS3($id);
        $fileStorage = FileStorage::find($id);
        $imageName = $fileStorage->filename;
        $imageUrl = $fileStorage->url;
        return view('image.show',compact('imageName','imageUrl'));
    }
}
