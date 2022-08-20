<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 21:26:47
 * @LastEditTime: 2022-07-17 23:15:18
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/StorePermissionRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePermissionRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:permissions,name'],
            'title' => ['required', 'unique:permissions,title'],
        ];
    }
}
