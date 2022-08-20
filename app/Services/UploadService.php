<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 01:51:12
 * @LastEditTime: 2022-07-17 01:58:28
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Services/UploadService.php
 */

namespace App\Services;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Spatie\Image\Image;
use Spatie\Image\Manipulations;

class UploadService
{
    public function avatar(UploadedFile $file)
    {
        $path = $file->store("images/avatars" . DIRECTORY_SEPARATOR . date('Ym'));
        Image::load(Storage::path($path))
            ->crop(Manipulations::CROP_CENTER, config('system.avatar_crop_width'), config('system.avatar_crop_height'))
            ->save();

        return [
            'path' => $path,
            'url' => asset($path),
        ];
    }

    public function file(UploadedFile $file)
    {
        $path = $file->store("images" . DIRECTORY_SEPARATOR . date('Ym'));

        return [
            'path' => $path,
            'url' => asset($path),
        ];
    }
}
