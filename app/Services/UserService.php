<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 01:50:12
 * @LastEditTime: 2022-09-05 23:46:02
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Services/UserService.php
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
        return filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'number';
    }
}
