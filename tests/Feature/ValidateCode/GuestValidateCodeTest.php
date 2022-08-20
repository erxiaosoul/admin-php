<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 01:09:15
 * @LastEditTime: 2022-07-17 01:11:01
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/Feature/ValidateCode/GuestValidateCodeTest.php
 */

namespace Tests\Feature\ValidateCode;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GuestValidateCodeTest extends TestCase
{
    /**
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
