<?php
namespace app\admin\controller;

/****************************登录管理**********************************************/

//引入类库
use think\Controller;
use think\Db;
use think\Validate;
//
use think\Session;

class Login extends Controller
{
    
    //分配登录页
    public function getindex()
    {
        //分配登录页
        return $this->fetch('login/login');
    }

    //登录验证
    public function postlog()
    {
        $request = \request();

        //获取登录信息
        $fcode = $request->param('fcode');

        // \var_dump($data);
        //验证码验证
        if(captcha_check($fcode)){
            
            //获取密码和用户名
            $name = $request->param('name');
            $password = $request->param('password');
            
            //获取当前登录的管理员信息
            $info = DB::table('admin_user')->where('name',$name)->find();
            // \var_dump($info);
            if($info){
                //对比密码
                if($info['password'] == md5($password)){
                    // dd($name);
                    //把管理的id 名字 存入session
                    Session::set('name',$name);
                    Session::set('id',$info['id']);

                    return ['code'=>200,'msg'=>'登陆成功'];
                    
                }else{

                    return ['code'=>203,'msg'=>'密码错误']; 
                }

            }else{

                return ['code'=>202,'msg'=>'管理员错误']; 
            }

        }else{

            return ['code'=>201,'msg'=>'验证码错误'];

        }
    }
    

    //退出
    public function getlogout(){
         // 清除session（当前作用域）
         Session::clear();
         //分配登录页
         return $this->fetch('login/login');
    }
    
}
