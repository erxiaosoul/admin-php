<?php

namespace App\Http\Requests;

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

    protected function accountRule()
    {
        switch (app('user')->fieldName()) {
            case 'email':
                return ['required', 'email', 'exists:users'];
            case 'number':
                return ['required', 'alpha_num', 'exists:users'];
        }
    }
}
