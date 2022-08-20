<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 21:26:47
 * @LastEditTime: 2022-07-17 23:31:17
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/UpdatePermissionRequest.php
 */

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
}
