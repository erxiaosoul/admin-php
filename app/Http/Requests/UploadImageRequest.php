<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 17:29:10
 * @LastEditTime: 2022-08-05 17:31:15
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Requests/UploadImageRequest.php
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadImageRequest extends FormRequest
{
    public function rules()
    {
        return [
            'file' => ['required', 'image', "max:2000"]
        ];
    }

    public function attributes()
    {
        return ['file' => '图片文件'];
    }
}
