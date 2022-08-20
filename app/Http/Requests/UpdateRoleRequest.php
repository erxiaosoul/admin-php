<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 22:22:37
 * @LastEditTime: 2022-07-20 21:14:34
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/UpdateRoleRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoleRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required', 'unique:roles,name,' . request('id')],
            'title' => ['required', 'unique:roles,title,' . request('id')],
        ];
    }
}
