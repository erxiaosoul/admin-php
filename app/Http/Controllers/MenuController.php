<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
use App\Http\Resources\MenuResource;
use App\Models\Menu;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index()
    {
        return MenuResource::collection(Menu::latest()->paginate(request('per_page', 15)));
    }

    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu();
        $menu->full($request->input())->save();
        return $this->success('菜单添加成功', $menu);
    }

    public function show(Menu $menu)
    {
        return $this->success(data: new MenuResource($menu));
    }

    public function update(UpdateMenuRequest $request, Menu $menu)
    {
        $menu->fill($request->input())->save();
        return $this->success('菜单编辑成功', $menu);
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return $this->success('菜单删除成功');
    }

    public function tree()
    {
        $menu = Menu::query()->where('pid', 0)->with(['children'])->get();
        return $this->success(data: $menu);
    }

    public function myMenu()
    {
        $menu = Menu::all();
        return $this->success(data: new MenuResource($menu));
    }
}
