<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePermissionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:permissions,name,' . request('id')],
            'title' => ['required', 'unique:permissions,title,' . request('id')],
        ];
    }

    public function attributes()
    {
        return ['title' => '权限名称', 'name' => '权限标识'];
    }
}
