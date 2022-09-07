<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:munes'],
            'path' => ['required', 'unique:munes'],
            'meta.title' => 'required'
        ];
    }

    public function attributes()
    {
        return ['name' => '路由名称', 'path' => '路由地址', 'meta.title' => '菜单标题',];
    }
}
