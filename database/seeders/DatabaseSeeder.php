<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-08-19 19:30:59
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/database/seeders/DatabaseSeeder.php
 */

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            MenuSeeder::class,
            ConfigSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
