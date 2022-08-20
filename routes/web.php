<?php
/*
 * @Author: 贾二小
 * @Date: 2022-06-28 22:36:21
 * @LastEditTime: 2022-08-08 23:22:17
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/routes/web.php
 */

use App\Models\Menu;
use App\Models\User;
use App\Notifications\EmailValidateCodeNotification;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $info =  \Larva\Ip2Region\Ip2Region::find('112.20.118.178');
    return ['code' => 0, 'info' => $info];
});

Route::get('test', function () {
    return (new EmailValidateCodeNotification())->toMail(User::factory()->make());
});
