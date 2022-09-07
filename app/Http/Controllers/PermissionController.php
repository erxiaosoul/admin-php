<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePermissionRequest;
use App\Http\Requests\UpdatePermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index()
    {
        return PermissionResource::collection(Permission::latest()->paginate(request('per_page', 15)));
    }

    public function store(StorePermissionRequest $request)
    {
        $permission = new Permission();
        $permission->full($request->input())->save();
        return $this->success('权限添加成功', $permission);
    }

    public function show(Permission $permission)
    {
        return $this->success(data: new PermissionResource($permission));
    }

    public function update(UpdatePermissionRequest $request, Permission $permission)
    {
        $permission->fill($request->input())->save();
        return $this->success('权限编辑成功', $permission);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return $this->success('权限删除成功');
    }
}
