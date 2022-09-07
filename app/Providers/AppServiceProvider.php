<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-09-05 21:40:58
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Providers/AppServiceProvider.php
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
        if ($this->app->environment('local')) {
            $this->app->register(\Laravel\Telescope\TelescopeServiceProvider::class);
            $this->app->register(TelescopeServiceProvider::class);
        }
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
