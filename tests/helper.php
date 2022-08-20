<?php
/*
 * @Author: 贾二小
 * @Date: 2022-07-17 01:55:36
 * @LastEditTime: 2022-07-17 01:56:29
 * @LastEditors: 贾二小
 * @FilePath: /exuiApi/tests/helper.php
 */

function create($class, $attributes = [], $num = null)
{
    return $class::factory($num)->create($attributes);
}

function make($class, $attributes = [], $num = null)
{
    return $class::factory($num)->make($attributes);
}
