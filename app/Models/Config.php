<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 12:22:12
 * @LastEditTime: 2022-07-24 21:21:48
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Models/Config.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value', 'title', 'category'];
}
