<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 12:22:14
 * @LastEditTime: 2022-07-23 14:05:29
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/app/Http/Controllers/ConfigController.php
 */

namespace App\Http\Controllers;

use App\Http\Requests\StoreConfigRequest;
use App\Http\Requests\UpdateConfigRequest;
use App\Http\Resources\ConfigResource;
use App\Models\Config;

class ConfigController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    public function index()
    {
        return ConfigResource::collection(Config::latest()->paginate());
    }

    public function store(StoreConfigRequest $request)
    {
        $role = Config::create(['key' => $request->key, 'value' => $request->value, 'title' => $request->title, 'category' => $request->category]);
        return $this->success('配置添加成功', $role);
    }

    public function show(Config $config)
    {
        return $this->success(data: new ConfigResource($config));
    }

    public function update(UpdateConfigRequest $request, Config $config)
    {
        $config->fill($request->input())->save();
        return $this->success('配置编辑成功', $config);
    }

    public function destroy(Config $config)
    {
        $config->delete();
        return $this->success('配置删除成功');
    }
}
