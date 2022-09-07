<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 17:18:10
 * @LastEditTime: 2022-08-24 22:12:34
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Http/Controllers/UserController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index()
    {
        return UserResource::collection(User::latest()->paginate(request('per_page', 15)));
    }

    public function store(StoreUserRequest $request)
    {

        $user = new User();
        $user->full($request->input());
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        $user->save();
        return $this->success('用户添加成功', $user);
    }

    public function show(User $user)
    {
        return $this->success(data: new UserResource($user));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->fill($request->input())->save();
        return $this->success('用户编辑成功', $user);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->success('用户删除成功');
    }

    public function currentUserInfo()
    {
        return $this->success(data: new UserResource(Auth::user()));
    }
}
