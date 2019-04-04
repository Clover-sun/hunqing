<?php
namespace app\admin\controller;

/****************************商户信息操作**********************************************/
use think\Controller;
use think\Db;
use thik\Validate;

class Teds extends Allow
{


    //修改logo
    public function getlogo()
    {
        $request = request();

        $id = $request->param('id');

        $logo = DB::table('tenant')->where('id', $id)->value('logo');
        //分配给修改页面
        return $this->fetch('/tenant/logo', ['id'=>$id,'logo'=>$logo]);
    }

    //执行logo修改
    public function postlogos()
    {
        $request = \request();

        //获取id
        $id = $request->param('id');
        // dd($id);

        //获取图片信息
        $file = $request->file('file');

        //加规则 size 1024*1024*1024
        $result = $this->validate(['file1'=>$file], ['file1'=>"require|image"], ['file1.require'=>'上传图片不能为空','file1.image'=>'非法图像文件']);

        //判断
        if (true !== $result) {
            return ['code'=>201,'mag'=>$result];
        }


        //移动图片
        $info = $file->move(ROOT_PATH."public".DS."logo");

        //获取图片名字
        $savename1 = $info->getSavename();
        $savename = str_replace("\\", "/", $savename1);
        // dd($savename);
        //拼接原图路径
        $data['logo'] = "/logo/".$savename;
   
        //获取现有图片的信息
        $info = DB::table('tenant')->where('id', $id)->find();

        $pic = ".".$info['logo'];

        // dd($info);

        if (DB::table('tenant')->where('id', $id)->update($data)) {
            unlink($pic);
            return ['code'=>200,'mag'=>'修改成功'];
        } else {
            return ['code'=>202,'mag'=>'修改失败'];
        }
    }




    //修改商户密码页面
    public function getpas()
    {
        $request = request();

        $id = $request->param('id');

        //分配给修改页面
        return $this->fetch('/tenant/pass', ['id'=>$id]);
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
        if (Db::table('tenant')->where('id', $data1['id'])->update($res)) {
            return ['code'=>200,'msg'=>'修改成功'];
        } else {
            return ['code'=>201,'msg'=>'修改错误'];
        }
    }


    //续费
    public function getxu()
    {
        $request = request();

        //获取id
        $id = $request->param('id');

        //获取服务类
        $cet = DB::table('tenant')->where('id', $id)->value('cet');
        
        //商户名
        $name = DB::table('tenant')->where('id', $id)->value('name');
      
        // dd($cet);
        //分配给修改页面
        return $this->fetch('/tenant/cet', ['id'=>$id,'cet'=>$cet,'name'=>$name]);
    }


    //执行续费
    public function postxfei()
    {
        $request = request();

        //获取信息
        $id = $request->param('id');
        $cet = $request->param('cet');
        $cetvalue = $request->param('cetvalue');
        // dd($cetvalue);
        $info = DB::table('tenant')->where('id', $id)->field('cet,cetval,cetvas')->find();

        if (empty($cet)) {
            return ['code'=>400,'msg'=>'系统错误，请重试~'];
        }

        if ($cet == 1) {
            //包年
            //计算剩余天数
            $cets =  $info['cetval'] - time();
           
            //计算续费天数
            $ymd = strtotime("+".$cetvalue." year");
            $data['cetval'] = $ymd + $cets;
            //执行修改
        } else {
            //VIP
            $data['cetvas'] = $info['cetvas'] + $cetvalue;
        
        }


        if (DB::table('tenant')->where('id', $id)->update($data)) {
            return ['code'=>200,'msg'=>'续费成功'];
        } else {
            return ['code'=>201,'msg'=>'系统错误'];
        }

        
    }

    //状态
    public function getjins()
    {
        $request = request();

        $id = $request->param('id');

        $sta = DB::table('tenant')->where('id',$id)->value('static');

        if (empty($sta)) {
            return ['code'=>400,'msg'=>'系统错误，请重试~'];
        }
        // dd($sta);
        if($sta != 1){
            $data['static'] = 1;
        }else{
            $data['static'] = 2;
        }

        if (DB::table('tenant')->where('id', $id)->update($data)) {
            return ['code'=>200,'msg'=>'操作成功'];
        } else {
            return ['code'=>201,'msg'=>'操作失败'];
        }
    }


    //尾页广告
    public function getpag()
    {
        $request = request();

        $id = $request->param('id');
        // dd($id);
        $sta = DB::table('tenant')->where('id',$id)->value('pag');

        if (empty($sta)) {
            return ['code'=>400,'msg'=>'系统错误，请重试~'];
        }
        // dd($sta);
        if($sta != 1){
            $data['pag'] = 1;
        }else{
            $data['pag'] = 2;
        }

        if (DB::table('tenant')->where('id', $id)->update($data)) {
            return ['code'=>200,'msg'=>'操作成功'];
        } else {
            return ['code'=>201,'msg'=>'操作失败'];
        }
    }


    //弹窗广告
    public function getale()
    {
        $request = request();

        $id = $request->param('id');
        // dd($id);
        $sta = DB::table('tenant')->where('id',$id)->value('ale');

        if (empty($sta)) {
            return ['code'=>400,'msg'=>'系统错误，请重试~'];
        }
        // dd($sta);
        if($sta != 1){
            $data['ale'] = 1;
        }else{
            $data['ale'] = 2;
        }

        if (DB::table('tenant')->where('id', $id)->update($data)) {
            return ['code'=>200,'msg'=>'操作成功'];
        } else {
            return ['code'=>201,'msg'=>'操作失败'];
        }
    }





}
