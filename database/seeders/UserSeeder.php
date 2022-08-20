<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-14 23:13:40
 * @LastEditTime: 2022-08-19 19:29:31
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/database/seeders/UserSeeder.php
 */

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();
        $user = User::first();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->save();
    }
}
