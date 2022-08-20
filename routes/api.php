<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-08-08 23:39:52
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/routes/api.php
 */

use App\Http\Controllers\CodeController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RegistrController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

//登录注册
Route::post('registr', RegistrController::class);
Route::post('login', LoginController::class);
Route::get('logout', LogoutController::class);
Route::post('account/forget-password', ForgetPasswordController::class);

//验证码
Route::post('code/send', [CodeController::class, 'send']);
Route::post('code/not_exist_user', [CodeController::class, 'notExistUser']);
Route::post('code/exist_user', [CodeController::class, 'existUser']);
Route::post('code/current_user/{type}', [CodeController::class, 'currentUser']);

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
Route::post('install/test', [InstallController::class, 'test']);
Route::get('install/migrate', [InstallController::class, 'migrate']);
