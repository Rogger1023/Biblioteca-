<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
{

    public function rules()
    {
        return [
            'title'=>'required|string|max:50',
            'author' => 'required|string|max:50',
            'description'=> 'nullable|string|max:255'
        ];
    }
}
