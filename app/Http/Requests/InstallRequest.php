<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstallRequest extends FormRequest
{
    public function rules()
    {
        return [
            'host' => 'required',
            'database' => 'required',
            'port' => 'required',
            'username' => 'required',
            'password' => 'required',
        ];
    }
}
