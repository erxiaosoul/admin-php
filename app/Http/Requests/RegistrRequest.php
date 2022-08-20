<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-16 23:51:30
 * @LastEditTime: 2022-07-17 22:18:44
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/RegistrRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrRequest extends FormRequest
{
    public function rules()
    {
        return [
            'account' => ['required', $this->accountRule()],
            'password' => ['required', 'min:3', 'confirmed'],
        ];
    }

    protected function accountRule()
    {
        if (filter_var(request('account'), FILTER_VALIDATE_EMAIL)) {
            return 'required|email|unique:users,email';
        }
        return ['required', 'regex:/^\d{11}$/', 'unique:users,mobile'];
    }
}
