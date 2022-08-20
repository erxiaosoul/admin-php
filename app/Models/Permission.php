<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 21:26:45
 * @LastEditTime: 2022-07-17 21:40:46
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Models/Permission.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Permission as ModelsPermission;

class Permission extends ModelsPermission
{
    use HasFactory;
}
