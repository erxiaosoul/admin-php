<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-05 17:18:10
 * @LastEditTime: 2022-08-20 13:49:36
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/app/Http/Controllers/UserController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index()
    {
        return UserResource::collection(User::latest()->paginate());
    }

    public function store(StoreUserRequest $request)
    {
        $role = User::create(['name' => $request->name, 'email' => $request->email, 'mobile' => $request->mobile]);
        return $this->success('用户添加成功', $role);
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
