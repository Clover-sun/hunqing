<?php
namespace app\admin\controller;
/****************************管理员管理**********************************************/
use think\Controller;
use think\Db;
use thik\Validate;
class Adminuser extends Allow
{


    //修改页面
    public function getedit()
    {

        //获取要修改数据的id
        $id =1;
        // return $id;

        //分配给修改页面
        return $this->fetch('/adminuser/edit', ['id'=>$id]);
    }


    //提交修改
    public function postupdate()
    {
        $request = \request();

        //获取修改的数据
        $data = $request->except('action');

        //把获取的数据 转换成数组
        $data1 = json_decode($data['data'], true);
        // dd($data1);

        //信息校验
        $result = $this->validate(
        [
        'password' => $data1['password'],
        'repassword'=>$data1['repassword'],
        ],
        [
        'password'              =>     'regex:\w{6,16}|confirm:repassword',
        'repassword'            =>     'regex:\w{6,16}',
        ],
        [
        'password.regex'            =>  '密码任意字母数字下划线6-16位',
        'password.confirm'          =>  '两次密码不一致,请确认',
        'repassword.regex'          =>  '确认密码任意字母数字下划线6-16位',
        ]
        );
        //\halt($result);
        //返回验证错误信息
        if (true !== $result) {
            // return ['code'=>400,'message'=>$validate->getError()];
            return ['code'=>400,'msg'=>$result];
        }

        //删除确认密码
        unset($data1['repassword']);

        //加密密码
        $res['password'] = \md5($data1['password']);
        // dd($data1['id']);
        //执行数据修改
        if (Db::table('admin_user')->where('id', $data1['id'])->update($res)) {
            return ['code'=>200,'msg'=>'修改成功'];
        } else {
            return ['code'=>201,'msg'=>'修改错误'];
        }
    }
}
