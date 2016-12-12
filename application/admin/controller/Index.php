<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace test\admin\controller;

use think\Env;
use think\View;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return [
            'status' => 1,
            'data'   => [
                'name' => 'test',
                'phone_no' => '18888888888',
                'address' => '四川省成都市'
            ], 
            'message' => '获取用户信息成功！'
        ];
    }

    public function getUserInfo()
    {
        $this->fetch();
        echo Env::get('HOSTNAME');
        exit;
    }

    public function getHello()
    {
        // 获取http请求信息
        $request = \think\Request::instance();
//        $param = $request->param();

        // 获取header头部信息
//        $header = $request->header();
//        var_dump($header);
//        exit;

        //input('session.user_id');
       // $v = input('get.v/d');
//        if (request()->isGet()) {
//
//        }

        $data = array(
            '1' => 'zsj',
            '2' => 'lhz'
        );

        //$this->success("操作成功！");
        return view('admin/hello', ['data' => $data]);
    }

    public function postUser()
    {
        return [
            'status' => 1,
            'data' => [],
            'message' => '哈哈哈哈哈'
        ];
    }
}