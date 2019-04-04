<?php
namespace app\admin\controller;

/****************************权限判断**********************************************/

//引入类库
use think\Controller;
use think\Db;
// use think\Validate;
//
use think\Session;

class Allow extends Controller
{

    public function _initialize()
    {
        //检测session
        if(!Session::get('id')){
            //跳转到登录页面
            $this->redirect("/login/index");

        }
      
    }
}
