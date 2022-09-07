<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 12:22:12
 * @LastEditTime: 2022-09-05 23:53:37
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Models/Config.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Config extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['key', 'value', 'title', 'category'];
}
