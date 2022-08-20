<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 11:19:59
 * @LastEditTime: 2022-07-17 21:03:56
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/Unit/UploadServiceTest.php
 */

namespace Tests\Unit;

use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class UploadServiceTest extends TestCase
{
    /**
     * 用户头像上传
     * @test
     */
    public function userAvatarUpload()
    {
        $file = UploadedFile::fake()->image('avatar.png', 100, 100);
        $res = app('upload')->avatar($file);
        $this->assertArrayHasKey('url', $res);
    }

    /**
     * 文件上传
     * @test
     */
    public function fileUpload()
    {
        $file = UploadedFile::fake()->image('avatar.png', 100, 100);
        $res = app('upload')->file($file);
        $this->assertArrayHasKey('url', $res);
    }
}
