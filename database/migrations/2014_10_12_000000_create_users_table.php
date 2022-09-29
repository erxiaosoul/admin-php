<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-09-06 00:05:33
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/database/migrations/2014_10_12_000000_create_users_table.php
 */

use App\Enums\SexStatus;
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
            $table->string('number')->nullable()->unique();
            $table->string('name')->nullable()->comment('姓名');
            $table->string('avatar')->nullable()->comment('头像');
            $table->enum('sex', [0, 1, 2])->default(0)->comment('性别');
            $table->string('email')->nullable()->unique();
            $table->string('mobile')->nullable()->unique();
            $table->string('password')->nullable()->comment('密码');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
