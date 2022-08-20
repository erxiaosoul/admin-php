<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-07-17 22:32:10
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/Controller.php
 */

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function success(string $message = '', $data = [], $code = 0)
    {
        return response()->json([
            'code' => $code,
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ]);
    }
}
