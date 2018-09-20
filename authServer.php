<?php
/**
 * Created by PhpStorm.
 * User: paulchou
 * Date: 2018/9/20
 * Time: 下午11:44
 */
use EasyWeChat\Factory;

$config = [
    'app_id' => 'wx47c82afa63b4bd71',
    'secret' => '70f2611f53095d48e0369f48374f4b2f',
    'token' => 'PaulChou',
    'response_type' => 'array',
];

$app = Factory::officialAccount($config);

$response = $app->server->serve();

// 将响应输出
return $response;