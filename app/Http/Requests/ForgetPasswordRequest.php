<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-18 00:20:41
 * @LastEditTime: 2022-07-18 00:22:20
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/ForgetPasswordRequest.php
 */

namespace App\Http\Requests;

use App\Rules\ValidateCodeRule;
use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'account' => $this->accountRule(),
            'password' => ['required', 'confirmed', 'min:3']
        ];
    }

    public function withValidator($validator)
    {
        $validator->sometimes('code', ['required', new ValidateCodeRule], function ($input) {
            return app()->environment() == 'production' || request('code');
        });
    }


    protected function accountRule()
    {
        if (filter_var(request('account'), FILTER_VALIDATE_EMAIL)) {
            return 'required|email|exists:users,email';
        }

        return ['required', 'regex:/^\d{11}$/', 'exists:users,mobile'];
    }
}
