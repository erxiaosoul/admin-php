<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'account' => $this->accountRule(),
            'password' => [
                'required', 'min:3', function ($attribute, $value, $fail) {
                    $user = User::where(app('user')->fieldName(), request('account'))->first();
                    if ($user && !Hash::check($value, $user->password)) {
                        $fail('密码 不正确');
                    }
                },
            ],
        ];
    }

    protected function accountRule()
    {
        switch (app('user')->fieldName()) {
            case 'email':
                return ['required', 'email', 'exists:users,email'];
            case 'number':
                return ['required', 'alpha_num', 'exists:users,number'];
        }
    }
}
