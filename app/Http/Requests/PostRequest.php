<?php

namespace App\Http\Requests;

use App\Models\Post;
use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|unique:posts|max:255',
            'description' => 'required|min:10|max:500',
            'date' => 'nullable|date',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    // withValidator with custom validation check
    public function withValidator($validator)
    {
        // $this->tag refer to object which is passing from request
        $post = Post::where('tag',$this->tag)->get()->first();
        $validator->after(function ($validator) use($post) {
            if ($post) {
                $validator->errors()->add('tag', 'Post with tag already there');
            }
        });
    }

    // Customize error message
    public function messages()
    {
        return [
            'title.required' => 'Post title is required',
            'description.required' => 'post description is required',
        ];
    }
}
