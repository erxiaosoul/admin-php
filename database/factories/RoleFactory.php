<?php
/*
 * @Author: 贾二小
 * @Date: 2022-08-19 16:39:12
 * @LastEditTime: 2022-08-19 19:20:45
 * @LastEditors: 贾二小
 * @FilePath: /EXUI_API/database/factories/RoleFactory.php
 */

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'title' => fake()->sentence(),
            'guard_name' => fake()->userName()
        ];
    }
}
