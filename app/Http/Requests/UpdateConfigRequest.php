<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateConfigRequest extends FormRequest
{
    public function rules()
    {
        return [
            'key' => ['required', Rule::unique('configs')->ignore(request('id'))],
            'value' => 'required',
            'title' => 'required',
            'category' => 'required'
        ];
    }
}
