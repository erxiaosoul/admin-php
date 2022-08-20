<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-14 22:52:52
 * @LastEditTime: 2022-08-05 18:03:49
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/RegistrController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\RegistrRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrController extends Controller
{
    public function __invoke(RegistrRequest $request)
    {
        $fieldName = filter_var(request('account'), FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile';
        $user = User::create([
            $fieldName => $request->account,
            'password' => Hash::make($request->password),
        ]);
        return [
            'user' => $user,
            'token' => $user->createToken('auth')->plainTextToken
        ];
    }
}
