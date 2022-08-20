<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 01:50:12
 * @LastEditTime: 2022-07-17 01:50:20
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Services/UserService.php
 */

namespace App\Services;

use Illuminate\Contracts\Container\BindingResolutionException;

class UserService
{
    /**
     * 登录要使用的字段
     * @return string
     * @throws BindingResolutionException
     */
    public function fieldName()
    {
        return filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
    }
}
