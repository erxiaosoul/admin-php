<?php

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
