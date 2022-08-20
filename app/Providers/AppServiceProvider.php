<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-07-17 02:12:06
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Providers/AppServiceProvider.php
 */

namespace App\Providers;

use App\Services\CodeService;
use App\Services\SmsService;
use App\Services\UploadService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance('user', new UserService);
        $this->app->instance('code', new CodeService);
        $this->app->instance("sms", new SmsService);
        $this->app->instance("upload", new UploadService);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
