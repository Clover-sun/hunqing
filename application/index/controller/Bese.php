<?php
namespace app\index\controller;

/****************************权限判断**********************************************/

//引入类库
use think\Controller;
use think\Db;
use think\Session;
use think\Cookie;
//基类
class Bese extends Controller
{

    public function _initialize()
    {
        //检测session
        // dd(Cookie::get('sid'));
        if(!Cookie::get('sid')){
            //跳转到登录页面
            $this->redirect("/logs/index");

        }

      
    }
}
