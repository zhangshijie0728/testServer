<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2016/12/9
 * Time: 9:51
 */
namespace test\admin\controller;

class Publics
{
    public function miss()
    {
        return [
            'status' => 10000,
            'data' => [],
            'message' => '没有该页面~~'
        ];
    }
}