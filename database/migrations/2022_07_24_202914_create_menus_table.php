<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-24 20:29:14
 * @LastEditTime: 2022-08-06 00:01:42
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/database/migrations/2022_07_24_202914_create_menus_table.php
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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pid')->default(0)->comment('上级菜单');
            $table->string('name', 50)->uniqid()->comment('别名');
            $table->string('path', 50)->uniqid()->comment('路由地址');
            $table->string('redirect', 50)->default('')->comment('重定向');
            $table->string('component', 50)->default('')->comment('视图');
            $table->json('meta')->nullable()->comment('路由元信息');
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
        Schema::dropIfExists('menus');
    }
};
