<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'number' => ['required', 'unique:users'],
            'sex' => ['required'],
            'email' => ['nullable', 'email', 'unique:users'],
            'mobile' => ['nullable', 'regex:/^\d{11}$/', 'unique:users']
        ];
    }
}
