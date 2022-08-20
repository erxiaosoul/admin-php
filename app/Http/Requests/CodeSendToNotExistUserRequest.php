<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 18:00:03
 * @LastEditTime: 2022-08-05 18:02:17
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/CodeSendToNotExistUserRequest.php
 */

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class CodeSendToNotExistUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'account' => ['required',  $this->accountRule(), $this->accountNotExistCheck()]
        ];
    }

    protected function accountRule()
    {
        return filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'regex:/^\d{11}$/';
    }

    protected function accountNotExistCheck()
    {
        return function ($attribute, $value, $fail) {
            $fieldName = filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
            $isExist = User::where($fieldName, $value)->exists();
            if ($isExist) {
                $fail('帐号已经存在');
            }
        };
    }
}
