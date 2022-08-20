<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 22:22:36
 * @LastEditTime: 2022-08-10 00:01:17
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Models/Role.php
 */

namespace App\Models;

use App\Models\Scopes\ScopeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Permission\Models\Role as ModelsRole;

class Role extends ModelsRole
{
    use HasFactory, ScopeTrait;
    protected $with = ['permissions'];
}
