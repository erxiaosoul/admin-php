<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-08-05 16:19:07
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Middleware/VerifyCsrfToken.php
 */

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'api/*'
    ];
}
