<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 17:29:00
 * @LastEditTime: 2022-08-05 17:33:09
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/UploadAvatarRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadAvatarRequest extends FormRequest
{
    public function rules()
    {
        return [
            'file' => ['required', 'image', 'dimensions:min_width=500,min_height=500']
        ];
    }

    public function attributes()
    {
        return ['file' => '头像图片'];
    }
}
