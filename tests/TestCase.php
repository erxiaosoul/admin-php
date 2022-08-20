<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-07-17 20:51:43
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/TestCase.php
 */

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;
    protected $user;
    protected function signIn(User $user = null)
    {
        $user = $user ?? create(User::class);
        $this->actingAs($user);

        $this->user = $user;
        return $this;
    }
}
