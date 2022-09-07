<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:permissions'],
            'title' => ['required', 'unique:permissions'],
        ];
    }

    public function attributes()
    {
        return ['title' => '权限名称', 'name' => '权限标识'];
    }
}
