<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_old(PostRequest $request)
    {
        // Retrieve the validated input data...
//        $validated = $request->validated();
//        // Retrieve a portion of the validated input data...
//        $validated = $request->safe()->only(['title', 'description']);
//        $validated = $request->safe()->except(['date']);

        // It can auto redirect to form submitted page if validation is failed

//        $validated = $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'description' => 'required|min:10|max:500',
//            'date' => 'nullable|date',
//        ]);

//        $validatedData = $request->validate([
//            'title' => ['required', 'unique:posts', 'max:255'],
//            'body' => ['required','min:10','max:500],
//        ]);


//        A Note On Nested Attributes
//        $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'author.name' => 'required',
//            'author.description' => 'required',
//        ]);
    }
    public function store(Request $request)
    {



        // custom validator
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:posts|max:255',
            'description' => 'required|min:10|max:500',
            'date' => 'nullable|date',
            'image' => 'mimes:jpg,bmp,png'
        ]);
        Post::create($request->all());
        return redirect()->back();
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();// with all input data
//                ->withInput(['title','description']);// with specific input data
        }

        // Custom validation with custom error message

//        $validator = Validator::make($request->all(), [
//            'title' => 'required|unique:posts|max:255',
//            'description' => 'required|min:10|max:500',
//            'date' => 'nullable|date',
//        ], $messages = [
//            'required' => 'The :attribute field is required.',
//        ]);

//        Add custom validation check

//        $validator = Validator::make(...);
//
//        $validator->after(function ($validator) {
//            if ($this->somethingElseIsInvalid()) {
//                $validator->errors()->add(
//                    'field', 'Something is wrong with this field!'
//                );
//            }
//        });
//
//        if ($validator->fails()) {
//            //
//        }




        // Retrieve the validated input data...
//        $validated = $request->validated();
//        // Retrieve a portion of the validated input data...
//        $validated = $request->safe()->only(['title', 'description']);
//        $validated = $request->safe()->except(['date']);

        // It can auto redirect to form submitted page if validation is failed

//        $validated = $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'description' => 'required|min:10|max:500',
//            'date' => 'nullable|date',
//        ]);

//        $validatedData = $request->validate([
//            'title' => ['required', 'unique:posts', 'max:255'],
//            'body' => ['required','min:10','max:500],
//        ]);


//        A Note On Nested Attributes
//        $request->validate([
//            'title' => 'required|unique:posts|max:255',
//            'author.name' => 'required',
//            'author.description' => 'required',
//        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =Post::find($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $validated = $request->validate([
            'title' => [
                'required',
                'max:255',
                Rule::unique('posts')->ignore($post->id),// uniques and ignore against this id in update
            ],
            'description' => 'required|min:10|max:500',
            'date' => 'nullable|date',
        ]);

        return  redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
