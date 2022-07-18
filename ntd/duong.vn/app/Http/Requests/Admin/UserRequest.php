<?php

namespace App\Http\Requests\Admin;
namespace App\Http\Requests;    

use App\Rules\ValidateUserName;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:2',
                'not_regex:/^[@#$%&*]/',
                new ValidateUserName(),
            ],
            'email' => 'required|email|not_regex:/^[root]/',
            'password' => 'required|min:8|regex:/^0-9@#$%&*+$/|confirmed',
            'fb' => 'url',
            'ytb' => 'url'
        ];
    }
}