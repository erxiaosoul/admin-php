<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-20 20:33:56
 * @LastEditTime: 2022-07-24 20:26:44
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Middleware/ConfigMiddleware.php
 */

namespace App\Http\Middleware;

use App\Models\Config;
use Closure;
use Illuminate\Http\Request;

class ConfigMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $this->loadConfig('system', config('system'));
        return $next($request);
    }

    protected function loadConfig(string $module, $config = [])
    {
        $config = Config::all()->keyBy('key')->map(function ($item) {
            return $item['value'];
        })->toArray();
        config(['system' => $config + config('system')]);
    }
}
