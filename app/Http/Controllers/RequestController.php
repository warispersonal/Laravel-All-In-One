<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RequestController extends Controller
{
    public function create(){
        return view('request.create');
    }

    public function store(Request $request){
        // get name field
//        echo "Get name field " . $request->name . "<br> Name field is" . $request->input('name');


        // get All request input field

//        dd($request->all());

        // get path of incoming request this method with return requested route url like http://laravel-all-in-one.test/get-users in this case get-users return

//        echo $request->path();

        // if we use only $request->is('request') and complete route url is same as http://laravel-all-in-one.test/request then if condition work
        // if url is in http://laravel-all-in-one.test/request/add then above method not work you should use below method

//        if($request->is('request/*')){
//            echo "Request come from url request";
//        }

        // Same logic above but in this case route name check instead of route url

//        if ($request->routeIs('request')) {
//            echo "Request come from that url which name is request";
//        }


//        if ($request->isMethod('post')) {
//            echo "This condition run if form submitted through post route";
//        }

//        if ($request->expectsJson()) {
//            echo "Request need json";
//        }
//        else{
//            echo "From submitted";
//        }


        // get query string from url http://laravel-all-in-one.test/request-add?age=25
//        echo $query = $request->query('age');


        // Get boolean value
//        echo $request->boolean('gender') ?  "Male": "Female";


        // Get date value
//        echo "Date of birth: "  . $request->date('dob');


        // this will return only these field specify in array
//        dd($request->only(['name','email']));


        // this method return all field except some spectific field
//        dd($request->except(['name','email']));


        // this method is to use check if input field exists
//        if($request->has('phone_number')){
//            echo "phone_number exists";
//        }
//        else{
//            echo "phone_number field not exists";
//        }


        // this method is check if field has value
//        if($request->filled('name')){
//            echo "Name value exists";
//        }
//        else{
//            echo "Name is empty";
//        }


        // add custom field to request
//        $request->merge(['votes' => 0]);
//
//        // only these date return
//        $request->flashOnly(['username', 'email']);
//
//        // only except this all data return
//        $request->flashExcept('password');


//        if($request->image){
//            dd($request->image);
//        }

        $file = $request->image;

//        echo " <br> " . $path = $file->path();
//        echo " <br> " . $extension = $file->extension();
//        echo " <br> " . $file->getRealPath();
//        echo " <br> " . $file->getClientOriginalName();
//        echo " <br> " . $file->getClientOriginalExtension();
//        echo " <br> " . $file->getSize();
//        echo " <br> " . $file->getMimeType();

        // store file with unique name
            $filename = $file->store('images');

//        $path1 = $file->storeAs('images', 'filename.jpg'); // with custom file name
//        echo  Storage::disk('local')->url($path); // storage/screenshots/1.jpg
//        $path = Storage::disk('public')->path($path);


        return redirect()->back()->withInput();

//        return redirect()->route('user.create')->withInput();

//        return redirect('form')->withInput(
//            $request->except('password')
//        );

    }
}
