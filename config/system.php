<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 01:27:16
 * @LastEditTime: 2022-07-17 21:02:28
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/config/system.php
 */
return [
    "site_title" => "xxx管理系统",
    "site_logo" => '',
    "site_copyright" => 'copyright © 2021~2022 xxx all rights reserved.',

    'code_template' => env('CODE_TEMPLATE', 6),
    'code_expire' => env('CODE_EXPIRE_TIME', 10),
    'code_timeout' => env('CODE_TIMEOUT_TIME', 60),
    'code_length' => env('CODE_LENGTH', 6),

    'aliyun_access_key_id' => env('ALIYUN_ACCESS_KEY_ID'),
    'aliyun_access_key_secret' => env('ALIYUN_ACCESS_KEY_SECRET'),
    'aliyun_sms_sign_name' => env('ALIYUN_SMS_SING_NAME'),

    'avatar_crop_width' => env('AVATAR_CROP_WIDTH', 500),
    'avatar_crop_height' => env('AVATAR_CROP_HEIGHT', 100),
];
