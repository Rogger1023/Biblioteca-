<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name'=>'required|string|max:50',
            'email'=>'required|string|max:50',
            'birthday'=>'required|date_format:Y-m-d'
        ];
    }
}
