<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\index\controller;

class User
{
    public function index()
    {
        var_dump([
            'status' => 1,
            'data'   => [
                'name' => 'test',
                'phone_no' => '18888888888',
                'address' => '四川省成都市'
            ], 
            'message' => '获取用户信息成功！'
        ]);
        exit;
    }
}

