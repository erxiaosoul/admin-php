<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-19 16:39:12
 * @LastEditTime: 2022-08-20 11:12:26
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/database/seeders/ConfigSeeder.php
 */

namespace Database\Seeders;

use App\Models\Config;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Config::create(['key' => 'site_title', 'value' => 'xxx管理系统', 'title' => '站点名称', 'category' => 'site']);
        Config::create(['key' => 'site_logo', 'value' => '', 'title' => '站点LOGO', 'category' => 'site']);
        Config::create(['key' => 'site_copyright', 'value' => '', 'title' => '站点版权', 'category' => 'site']);
        Config::create(['key' => 'code_template', 'value' => '', 'title' => '验证码模板', 'category' => 'code']);
        Config::create(['key' => 'code_expire', 'value' => '10', 'title' => '验证码', 'category' => 'code']);
        Config::create(['key' => 'code_timeout', 'value' => '60', 'title' => '验证码有效时间(秒)', 'category' => 'code']);
        Config::create(['key' => 'code_length', 'value' => '6', 'title' => '验证码长度', 'category' => 'code']);
        Config::create(['key' => 'aliyun_access_key_id', 'value' => '', 'title' => '阿里云', 'category' => 'aliyun']);
        Config::create(['key' => 'aliyun_access_key_secret', 'value' => '', 'title' => '阿里云', 'category' => 'aliyun']);
        Config::create(['key' => 'aliyun_sms_sign_name', 'value' => '', 'title' => '阿里云', 'category' => 'aliyun']);
        Config::create(['key' => 'avatar_crop_width', 'value' => '100', 'title' => '头像宽度', 'category' => 'avatar']);
        Config::create(['key' => 'avatar_crop_height', 'value' => '100', 'title' => '头像高度', 'category' => 'avatar']);
    }
}
