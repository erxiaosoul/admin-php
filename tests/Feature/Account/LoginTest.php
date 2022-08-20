<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-16 17:34:06
 * @LastEditTime: 2022-07-16 18:42:56
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/Feature/LoginTest.php
 */

namespace Tests\Feature\Account;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    /**
     * 用户登录
     * @test
     */
    public function userLogin()
    {
        $user = User::factory()->create();
        $response = $this->post('/api/login', ['email' => $user->email, 'password' => '123456']);
        $response->assertSee('token');
    }

    /**
     * 用户登录邮箱规则验证
     * @test
     */
    public function userLoginEmailRule()
    {
        $response = $this->post('/api/login', ['email' => 'abc', 'password' => '123456']);
        $response->assertSessionHasErrors('email');
    }

    /**
     * 用户登录邮箱必填验证
     * @test
     */
    public function userLoginEmailRequiredRule()
    {
        $response = $this->post('/api/login', ['password' => '123456']);
        $response->assertSessionHasErrors('email');
    }

    /**
     * 用户登录密码错误验证
     * @test
     */
    public function userLoginPasswordPostWrong()
    {
        $user = User::factory()->create();
        $response = $this->post('/api/login', ['email' => $user->email, 'password' => '111111']);
        $response->assertSessionHasErrors('password');
    }


    /**
     * 用户登录邮箱不存在
     * @test
     */
    public function userLoginEmailNotExists()
    {
        $response = $this->post('/api/login', ['email' => 'admin@example.com', 'password' => '123456']);
        $response->assertSessionHasErrors('email');
    }
}
