<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-16 17:40:45
 * @LastEditTime: 2022-08-05 16:29:50
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/LoginController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function __invoke(LoginRequest $request)
    {

        $user = User::where(filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile', $request->account)->first();
        $data = [
            'user' => new UserResource($user),
            'token' => $user->createToken('auth')->plainTextToken
        ];
        return $this->success('登录成功', $data);
    }
}
