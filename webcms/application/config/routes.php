<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//产品
$route['product/create'] = 'product/create';
$route['product/list'] = 'product/list';
$route['product/type'] = 'product/type';
$route['product/edit'] = 'product/edit';
$route['product/(:any)'] = 'product/index/$1';
$route['product'] = 'product';
//内容
$route['news/create'] = 'news/create';
$route['news/list'] = 'news/list';
$route['news/type'] = 'news/type';
$route['news/edit'] = 'news/edit';
$route['news/search'] = 'news/search';
$route['news/(:any)'] = 'news/index/$1';
$route['news'] = 'news';
//系统设置
$route['set/user'] = 'set/user';
$route['set/edit'] = 'set/edit';
$route['set/del'] = 'set/del';
$route['set/backup'] = 'set/backup';
$route['set'] = 'set';
//广告位置
$route['ad/create'] = 'ad/create';
$route['ad/list'] = 'ad/list';
$route['ad/type'] = 'ad/type';
$route['ad/edit'] = 'ad/edit';
$route['ad/(:any)'] = 'ad/index/$1';
$route['ad'] = 'ad';
//线下实体店
$route['store/create'] = 'store/create';
$route['store/list'] = 'store/list';
$route['store/type'] = 'store/type';
$route['store/edit'] = 'store/edit';
$route['store/search'] = 'store/search';
$route['store/(:any)'] = 'store/index/$1';
$route['store'] = 'store';

$route['login'] = 'login';
$route['default_controller'] = 'product';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;