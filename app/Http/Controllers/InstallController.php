<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 18:30:32
 * @LastEditTime: 2022-08-05 18:35:57
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/InstallController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\InstallRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class InstallController extends Controller
{
    public function __construct()
    {
    }

    protected function check()
    {
        if (is_file(base_path('install_lock.html'))) {
            abort(403, '请删除 install_lock.html 文件后安装');
        }
    }
    public function test(InstallRequest $request)
    {
        $this->check();
        $config = $request->database;
        try {
            $dsn = sprintf('mysql:host=%s;dbname=%s;charset=utf8', $config['host'], $config['database']);
            new \PDO($dsn, $config['username'], $config['password']);
            file_put_contents(base_path('config.php'), "<?php return " . var_export($request->input(), true) . ';');
            return $this->success('数据库连接成功');
        } catch (\PDOException $e) {
            abort(403, '数据库连接失败');
        }
    }

    public function migrate(Request $request)
    {
        $this->check();
        Artisan::call("migrate:refresh --seed");
        file_put_contents(base_path('install_lock.html'), 'houdunren');
        return $this->success('数据表创建成功');
    }
}
