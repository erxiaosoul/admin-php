<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 12:22:12
 * @LastEditTime: 2022-07-17 12:34:10
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/database/migrations/2022_07_17_122212_create_configs_table.php
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
        Schema::create('configs', function (Blueprint $table) {
            $table->id();
            $table->string('key', 50)->unique()->comment('键');
            $table->string('value', 100)->nullable()->comment('值');
            $table->string('title', 50)->nullable()->comment('标题');
            $table->string('category', 50)->nullable()->comment('分类');
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
        Schema::dropIfExists('configs');
    }
};
