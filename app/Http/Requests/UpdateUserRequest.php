<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'number' => 'required|unique:permissions,number,' . request('id'),
            'sex' => 'required',
            'email' => 'nullable|email|unique:permissions,email,' . request('id'),
            'mobile' => 'nullable|regex:/^\d{11}$/|unique:permissions,mobile,' . request('id')
        ];
    }
}
