<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
    'dsn'	=> '',
    'hostname' => '127.0.0.1',  //数据库地址
    'username' => '',     //数据库用户名
    'password' => '', //数据库密码
    'database' => 'web_cms',  //数据库名称
    'dbdriver' => 'mysqli',   // 数据库类型
    'dbprefix' => 'cn_',    //表前缀
    'pconnect' => FALSE,
    'db_debug' => TRUE,
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);