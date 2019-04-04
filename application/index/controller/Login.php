<?php
namespace app\index\controller;

/****************************登录管理**********************************************/

//引入类库
use think\Controller;
use think\Db;
use think\Validate;
use think\Session;
use think\Cookie;

class Login extends Controller
{
    
    //分配登录页
    public function getindex()
    {
        $logo = DB::table('logo')->where('id',1)->value('logo');
        //分配登录页
        return $this->fetch('login/login',['logo'=>$logo]);
    }

    //登录验证
    public function postlog()
    {
        $request = \request();

        $data = $request->param();
        // dd($data);
        // \var_dump($data);
  
            //获取密码和用户名
            $name = $request->param('name');
            $password = $request->param('password');
            
            //获取当前登录的管理员信息
            $info = DB::table('tenant')->where('phone',$name)->find();

            if($info['static'] != 1){
                return ['code'=>202,'msg'=>'您的账号已被禁用']; 
            }
            // \var_dump($info);
            // dd($info);
            if($info){
                //对比密码
                if($info['password'] == md5($password)){
                    // dd($name);
                    //把管理的id 名字 存入session
                    // Session::set('sname',$name);
                    // Session::set('sid',$info['id']);
                    Cookie::set('sid',$info['id']);
                    // dd(Cookie::get('sid'));

                    return ['code'=>200,'msg'=>'登陆成功'];
                    
                }else{

                    return ['code'=>203,'msg'=>'密码错误']; 
                }

            }else{

                return ['code'=>202,'msg'=>'管理员错误']; 
            }

       
    }
    //退出
    public function getlogout(){
        // 清空当前设定前缀的所有cookie值
        Cookie::clear();
        //分配登录页
        return $this->redirect('/logs/index');
    }
    

    
}
