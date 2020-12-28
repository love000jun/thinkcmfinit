<?php
/**
 * 配置文件
 */

use think\facade\Env;

return [
    // 数据库类型
    'type'     => Env::get('database_type'),
    // 服务器地址
    'hostname' => Env::get('database_hostname'),
    // 数据库名
    'database' => Env::get('database_database'),
    // 用户名
    'username' => Env::get('database_username'),
    // 密码
    'password' => Env::get('database_password'),
    // 端口
    'hostport' => Env::get('database_hostport'),
    // 数据库编码默认采用utf8
    'charset'  => Env::get('database_charset'),
    // 数据库表前缀
    'prefix'   => Env::get('database_prefix'),
    // 加密密钥
    "authcode" => Env::get('database_authcode'),
];

