<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 20:46:19
 * @LastEditTime: 2022-07-17 21:23:13
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/Feature/Permission/AddPermissionTest.php
 */

namespace Tests\Feature\Permission;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddPermissionTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->signIn();
    }

    /**
     * 验证字段不能为空
     * @test
     */
    public function verifyTheFieldCannotBeEmpty()
    {
        $response = $this->postJson('/api/permission', []);

        $response->assertStatus(422)->assertJsonValidationErrors(['name', 'title']);
    }

    /**
     * 字段必须唯一
     * @test
     */
    public function fieldMustBeUnique()
    {
        Permission::create(['name' => 'hd', 'title' => 'hd']);

        $response = $this->postJson('/api/permission', ['name' => 'hd', 'title' => 'hd']);

        $response->assertStatus(422)->assertJsonValidationErrors(['name', 'title']);
    }

    /**
     * 成功添加权限
     * @test
     */
    public function addPermissionsToSuccess()
    {
        $response = $this->postJson('/api/permission', ['name' => 'hd', 'title' => 'hd']);

        $response->assertOk()->assertJsonStructure(['data']);
    }
}
