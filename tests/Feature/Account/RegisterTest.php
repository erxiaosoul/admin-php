<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-14 22:45:45
 * @LastEditTime: 2022-07-17 01:09:47
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/Feature/Account/RegisterTest.php
 */

namespace Tests\Feature\Account;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    protected $data = [
        'email' => 'admin@qq.com',
        'password' => 'admin'
    ];

    /**
     * 用户注册
     * @test
     */
    public function userRegistration()
    {
        $response = $this->post('/api/registr', $this->data);
        $response->assertStatus(201);
    }

    /**
     * 用户非法邮箱验证
     * @test
     */
    public function userEmailValidation()
    {
        $response = $this->post('/api/registr', ['email' => 'abc'] + $this->data);
        $response->assertSessionHasErrors('email');
    }

    /**
     * 用户账号必填验证
     * @test
     */
    public function userMailRequiredValidation()
    {
        $data = $this->data;
        unset($data['email']);
        $response = $this->post('/api/registr', $data);
        $response->assertSessionHasErrors('email');
    }

    /**
     * 用户账号不能重复注册
     * @test
     */
    public function userMailUniqueValidation()
    {
        $user = User::factory()->create();
        $response = $this->post('/api/registr', [
            'email' => $user->email,
            'password' => '123456'
        ]);
        $response->assertSessionHasErrors('email');
    }
}
