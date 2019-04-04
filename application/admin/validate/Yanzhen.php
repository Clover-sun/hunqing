<?php
namespace app\admin\validate;
use think\Validate;
class Yanzhen extends Validate
{
    // 测试完成后放开完整规则
     protected $rule =   [
         'phone'                 =>     'require|regex:[1][3,4,5,7,8][0-9]{9}|unique:tenant',
         'password'              =>      'require|regex:\w{6,16}|confirm:repassword',
        'repassword'             =>      'require|regex:\w{6,16}',
        
     ];
     // 提示信息
     protected $message  =   [
        'phone.require'             =>  '手机必须填写',
        'phone.regex'               =>  '联系电话格式不正确',
        'phone.unique'              =>  '联系电话重复',
        'password.require'          =>  '密码不能为空',
        'password.regex'            =>  '密码任意字母数字下划线6-16位',
        'password.confirm'          =>  '两次密码不一致,请确认',
        'repassword.require'        =>  '密码不能为空',
        'repassword.regex'          =>  '确认密码任意字母数字下划线6-16位',

     ];
}