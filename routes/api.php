<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//登录&登出&重置密码
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);
Route::post('forget-password', ForgetPasswordController::class);

//上传
Route::post('upload/avatar', [UploadController::class, 'avatar']);
Route::post('upload/image', [UploadController::class, 'image']);

//用户
Route::apiResource('user', UserController::class);
Route::get('current_user_info', [UserController::class, 'currentUserInfo']);
Route::get('menu/my', [MenuController::class, 'myMenu']);

Route::apiResource('permission', PermissionController::class);
Route::apiResource('role', RoleController::class);
Route::apiResource('config', ConfigController::class);
Route::get('menu/tree', [MenuController::class, 'tree']);
Route::apiResource('menu', MenuController::class);

//安装
Route::post('install/test', [InstallController::class, 'testLink']);
Route::get('install/migrate', [InstallController::class, 'migrate']);
