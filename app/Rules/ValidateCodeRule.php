<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 11:28:11
 * @LastEditTime: 2022-07-17 20:35:19
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Rules/ValidateCodeRule.php
 */

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Cache;

class ValidateCodeRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return request('account') && app('code')->check(request('account'), $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return '验证码输入错误';
    }
}
