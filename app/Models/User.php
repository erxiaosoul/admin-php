<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-09-05 23:15:36
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Models/User.php
 */

namespace App\Models;

use App\Models\Scopes\ScopeTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes, ScopeTrait;

    protected $with = ['roles'];

    protected $guard_name = ['sanctum'];

    /**
     * 可批量赋值的属性。
     *
     * @var array
     */
    protected $fillable = ['number', 'name', 'avatar', 'sex', 'email', 'mobile', 'password'];

    /**
     * 数组中的属性会被隐藏。
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'deleted_at'];
}
