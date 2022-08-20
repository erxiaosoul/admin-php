<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-07-18 23:04:06
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/database/migrations/2014_10_12_000000_create_users_table.php
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('unionid')->nullable()->comment('微信开放平台unionid');
            $table->string('openid')->nullable()->comment('微信openid');
            $table->string('miniapp_openid')->nullable()->comment('微信小程序openid');
            $table->string('name')->nullable()->comment('昵称');
            $table->tinyInteger('sex')->default(1)->comment('性别');
            $table->string('email')->nullable()->unique();
            $table->string('mobile')->nullable()->unique();
            $table->string('number')->nullable()->unique();
            $table->string('real_name', 20)->nullable()->comment('真实姓名');
            $table->string('password')->nullable()->comment('密码');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('wechat')->nullable()->comment('微信号');
            $table->timestamp('email_verified_at')->nullable()->comment('邮箱验证时间');
            $table->timestamp('mobile_verified_at')->nullable()->comment('手机验证时间');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
