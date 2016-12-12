<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

return [
    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]'     => [
        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],
//
//    //'hello' => ['admin/Index/hello', ['before_behavior'=>'\test\admin\behavior']],
//
//    //\think\Route::rule('hello','admin/Index/hello'),
    '[home]' => [
        'before_behavior' => '\test\admin\behavior',
        'hello' => ['admin/Index/getHello'],
        'user' => ['admin/Index/postUser'],
        'method' => 'get'
    ],
    '__miss__' => 'admin/publics/miss'
];

// 控制器路由
//\think\Route::controller('Home', 'admin/Index');

// 分组路由
//\think\Route::group('home', [
//    'hello' => ['admin/Index/getHello'],
//    'user' => ['admin/Index/postUser']
//], ['before_behavior' => '\test\admin\behavior', 'method' => 'get']);   // , 'ext' => 'html'