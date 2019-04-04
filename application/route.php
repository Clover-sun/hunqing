<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

//登录页
Route::controller('/login','admin/Login');

//后台首页
Route::controller('/admin','admin/Index');

//管理员管理
Route::controller('/adminuser','admin/Adminuser');

//商户管理
Route::controller('/tenant','admin/Tenant');

//三级联动
Route::controller('/tools','admin/Tools');

//商户的信息修改
Route::controller('/teds','admin/Teds');

//广告管理
Route::controller('/advert','admin/Advert');

//模板分类
Route::controller('/cate','admin/Cate');

//模板管理
Route::controller('/template','admin/Template');

//商家登录背景图
Route::controller('/logo','admin/Logo');

//视频管理
Route::controller('/video','admin/Video');

//h5模板编辑
Route::controller('/edit','admin/Edit');

//测试
Route::controller('/wii','admin/Wii');






//前台商户登录
Route::controller('/logs','index/login');

//前台首页
Route::controller('/index','index/index');

//二级商家广告修改
Route::controller('/xiu','index/xiu');

//前台商户登录
Route::controller('/temp','index/template');


//移动端二维码入口
Route::controller('/apps','apps/index');