<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class UploadImage extends Controller
{
    public function store_into_storage_folder(Request $request){
        $uploadFolder = 'users';
        $image = $request->file('file');
        $image_uploaded_path = $image->store($uploadFolder, 'public');

    }

    function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if($validation->passes())
        {
            $image = $request->file('file');
            $new_name = strtotime(now()). '' . rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('/assets/images_folder'), $new_name);
            $uploaded_image_path = asset('/assets/images_folder/'.$new_name);
            return response()->json([
                'message'   => 'Image Upload Successfully',
                'uploaded_image' => $uploaded_image_path,
                'class_name'  => 'alert-success'
            ]);
        }
        else
        {
            return response()->json([
                'message'   => $validation->errors()->all(),
                'uploaded_image' => '',
                'class_name'  => 'alert-danger'
            ]);
        }
    }


}
