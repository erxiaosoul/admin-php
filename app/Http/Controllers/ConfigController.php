<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 12:22:14
 * @LastEditTime: 2022-08-24 22:17:25
 * @LastEditors: 贾二小
 * @FilePath: /admin-php/app/Http/Controllers/ConfigController.php
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
        return ConfigResource::collection(Config::latest()->paginate(request('per_page', 5)));
    }

    public function store(StoreConfigRequest $request)
    {
        $config = new Config();
        $config->full($request->input())->save();
        return $this->success('配置添加成功', $config);
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
