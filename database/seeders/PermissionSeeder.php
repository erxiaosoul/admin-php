<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-19 16:39:12
 * @LastEditTime: 2022-08-19 19:31:30
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/database/seeders/PermissionSeeder.php
 */

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::factory(20)->create();
    }
}
