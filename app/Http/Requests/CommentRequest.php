<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */





    public function rules(): array
    {
        return [
            'auther'=>'required',
             'content'=>'required',
             'post_id'=>'required|exits:exists:App\Models\Post,id'
        ];
    }
}
