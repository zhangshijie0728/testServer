<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 2016/12/8
 * Time: 16:14
 */
// ������Ŀ·��
define('APP_PATH', __DIR__ . '/../application');

// ���ؿ�ܻ����ļ�
require __DIR__ . '/../thinkphp/base.php';

// �󶨵�ǰ����ļ���adminģ��
\think\Route::bind('admin');

// �ر�adminģ���·��
\think\App::route(false);

// ִ��Ӧ��
\think\App::run()->send();