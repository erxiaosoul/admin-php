<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMenuRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => 'required|unique:munes,name,' . request('id'),
            'path' => 'required|unique:munes,path,' . request('id'),
            'meta.title' => 'required'
        ];
    }

    public function attributes()
    {
        return ['name' => '路由名称', 'path' => '路由地址', 'meta.title' => '菜单标题',];
    }
}
