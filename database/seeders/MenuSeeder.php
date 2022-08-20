<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-24 20:29:16
 * @LastEditTime: 2022-08-20 11:42:15
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/database/seeders/MenuSeeder.php
 */

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Menu::create(['pid' => 0, 'name' => 'home', 'path' => '/', 'redirect' => '/home', 'meta' => ['title' => '仪表板', 'icon' => 'DataBoard']]);
        Menu::create(['pid' => 0, 'name' => 'system', 'path' => '/system',  'meta' => ['title' => '系统设置', 'icon' => 'Tools']]);
        Menu::create(['pid' => 0, 'name' => 'other.abort', 'path' => '/abort', 'meta' => ['title' => '关于', 'icon' => 'DataAnalysis']]);
        Menu::create(['pid' => 1, 'name' => 'dashboard.home', 'path' => '/home', 'meta' => ['title' => '控制台', 'icon' => 'PictureRounded']]);
        Menu::create(['pid' => 2, 'name' => 'user.index', 'path' => '/system/user', 'meta' => ['title' => '用户管理', 'icon' => 'User']]);
        Menu::create(['pid' => 2, 'name' => 'role.index', 'path' => '/system/role', 'meta' => ['title' => '角色管理', 'icon' => 'ColdDrink']]);
        Menu::create(['pid' => 2, 'name' => 'permission.index', 'path' => '/system/permission', 'meta' => ['title' => '权限管理', 'icon' => 'Orange']]);
        Menu::create(['pid' => 2, 'name' => 'menu.index', 'path' => '/system/menu', 'meta' => ['title' => '菜单管理', 'icon' => 'Menu']]);
        Menu::create(['pid' => 2, 'name' => 'config.index', 'path' => '/system/config', 'meta' => ['title' => '配置管理', 'icon' => 'Operation']]);
    }
}
