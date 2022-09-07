<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-24 20:29:14
 * @LastEditTime: 2022-09-05 23:54:26
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Models/Menu.php
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menu extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['pid', 'name', 'path', 'redirect', 'component', 'meta'];

    protected $casts = ['meta' => 'array'];

    public function child()
    {
        return $this->hasMany(self::class, 'pid');
    }

    public function children()
    {
        return $this->child()->with('children');
    }

    public function father()
    {
        return $this->hasMany(self::class, 'id', 'pid');
    }

    public function parents()
    {
        return $this->father()->with('parents');
    }
}
