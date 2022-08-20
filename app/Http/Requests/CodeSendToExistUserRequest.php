<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 18:00:16
 * @LastEditTime: 2022-08-05 18:01:28
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/CodeSendToExistUserRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CodeSendToExistUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'account' => ['required',  $this->accountRule(), 'exists:users,' . $this->accountField()]
        ];
    }

    protected function accountRule()
    {
        return filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'regex:/^\d{11}$/';
    }

    protected function accountField()
    {
        return filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
    }
}
