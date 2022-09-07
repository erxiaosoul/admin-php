<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfigRequest extends FormRequest
{
    public function rules()
    {
        return [
            'key' => 'required|unique:configs',
            'value' => 'required',
            'title' => 'required',
            'category' => 'required'
        ];
    }
}
