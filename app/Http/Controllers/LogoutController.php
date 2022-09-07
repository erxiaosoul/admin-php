<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 23:52:37
 * @LastEditTime: 2022-07-20 21:12:58
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/LogoutController.php
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function __invoke()
    {
        Auth::user()->tokens()->delete();
        return $this->success('登出成功');
    }
}
