<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|unique:posts',
            'body'=>'required',
            'auther'=>'required',
            'published'=>'required'
        ];
    }
    public function messages()
    {   return [
    'title.required' => 'The title field is required. Please provide a title.',
    'body.required' => 'The body field is required. Make sure to add some content.',
    'author.required' => 'The author field is required. Enter the author\'s name.',
    'published.required' => 'You must specify if the post is published or not.',
];

    }
}
