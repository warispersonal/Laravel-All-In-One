<?php

use App\Models\FileStorage;
use Illuminate\Support\Facades\Storage;

function storeFileLocally($request , $fileName='image', $directory='images'){
    return $request->file($fileName)->store($directory);
}

function storeFileOnS3($request , $fileName='image', $directory='images'){
    // 1. This can store file into S3 bucket
    $path =  $request->file($fileName)->store($directory, 's3');
    // 2. This will create this image as public
    Storage::disk('s3')->setVisibility($path,'public');
    // 3. This will store into database
    $image = \App\Models\FileStorage::create([
        'filename' => basename($path),
        'url' => Storage::disk('s3')->url($path)
    ]);
    // 4. Then redirect to show page
    return redirect()->route('image.show', $image->id);
}

function getImageFromS3($id){
    $fileStorage = FileStorage::find($id);
    return Storage::disk('s3')->response('images/' . $fileStorage->filename);

}
