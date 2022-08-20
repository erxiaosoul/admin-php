<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-18 00:20:08
 * @LastEditTime: 2022-07-20 21:12:55
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/ForgetPasswordController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\ForgetPasswordRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ForgetPasswordController extends Controller
{
    public function __invoke(ForgetPasswordRequest $request)
    {
        $user = User::where(app('user')->fieldName(), $request->account)->first();
        $user->password = bcrypt($request->password);
        $user->save();

        return $this->success('密码修改成功', [
            'user' => new JsonResource($user->refresh()),
            'token' => $user->createToken('auth')->plainTextToken
        ]);
    }
}
