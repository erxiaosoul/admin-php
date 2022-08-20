<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 22:22:37
 * @LastEditTime: 2022-07-20 21:14:09
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/StoreRoleRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRoleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:roles,name'],
            'title' => ['required', 'unique:roles,title'],
        ];
    }

    public function attributes()
    {
        return ['title' => '角色名称', 'name' => '角色标识'];
    }
}
