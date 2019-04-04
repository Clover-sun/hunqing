<?php

namespace app\index\controller;

use think\Db;
use think\Controller;
use think\Session;
use think\Cookie;

class Index extends Bese
{
    //公共方法
    public function logo()
    {
        $sid = Cookie::get('sid');
        // dd($sid);
        //商户信息
        $logo = DB::table('tenant')->where('id', $sid)->value('logo');

        return $logo;

    }


    //无限递归查询分类显示
    public function getca($pid)
    {
        //查询所有分类信息
        $data = Db::table("cate")->where("type", "{$pid}")->select();
        $data1 = [];
        //遍历数组$data
        foreach ($data as $key => $value) {
            //查询子类信息  把子类信息存储在shop下面
            $value['shop'] = $this->getca($value['id']);
            $data1[] = $value;
        }
        return $data1;
    }


    //首页
    public function getindex()
    {
        //取出商户id
        $sid = Cookie::get('sid');


        //获取商户的分类和模板信息 id
        $nodes = Db::name('show_template')->where('sid', $sid)->field('type,template')->select();


        $template = [];
        //遍历信息  生成新数组
        foreach ($nodes as $node) {
            $template[] = [

                // 获取到商户下的所有模板信息 加入数组
                'template' => Db::name('template')->whereIn('id', explode(',', $node['template']))->select()
            ];
        }
//         dd($template);
//         echo "<pre>";
//         print_r($template);
//         exit;

        //模板信息 分类
        $list = Db::name('show_template')->alias('ur')
            ->where('ur.sid', $sid)->join('cate c', 'c.id = ur.type')
            ->field('cate')->select();

        $this->assign('list', $list);


        //商户信息
        $info = DB::table('tenant')->where('id', $sid)->find();

        //商户的二维码
        $er = DB::table('erweima')->where('pid', $sid)->value('erweima');


        if (!empty($info['cetval'])) {
            // dd($val['cetval']);
            //获取现在的时间戳
            // $tme = time();
            $aa = ($info['cetval'] - time()) / 3600 / 24;
            $info['cetval'] = round($aa);
        }

     
        return $this->fetch('index/index', ['info' => $info, 'er' => $er, 'template' => $template]);

    }



    //模板跳转页面
    public function getsee()
    {
        $id = request()->get('id');

//        $file = "/temp/see?id=$id";
//        'file'=>$file,
//
        return $this->fetch('index/see',['id'=>$id]);
    }


    //视频
    public function getvideo()
    {
         //商家logo
         $logo = $this->logo();

        //获取视频信息
        $arr = DB::table('video')->order('fid asc')->select();
        // dd($arr);
        //获取分类信息
        $cate = DB::table('cate')->order('id asc')->select();

         $result= array();
         foreach ($arr as $key => $info) {
            //  var_dump($info);
             $result[$info['fid']][] = $info;
         }

//          dd($result);
         return $this->fetch('index/video', ['logo' => $logo,'cate' => $cate,'result' => $result]);
    }

    //客源查询
    public function getfind()
    {
        //取出商户id
        $sid = Cookie::get('sid');
        //商家logo
        $logo = $this->logo();
        $select_user = Db::name('mb_user')->order('id desc')->where('sid',$sid)->paginate(10);

        $page = $select_user->render();
       
        $this->assign('page', $page);
        return $this->fetch('index/find', ['logo' => $logo,'select_user'=>$select_user]);
    }

    //客源查询处理
    public function getdelete()
    {

        $id = ($_GET['id']);
//        dd($id);
        if (Db::name('mb_user')->where('id',"in",$id)->delete())
        {
            echo 1;
        }else{
            echo 2;
        }


    }


    //广告管理
    public function getad()
    {
        //商家logo
        $logo = $this->logo();
//        dd($logo);
        //取出商户id
        $sid = Cookie::get('sid');

        $info = DB::table('verts')->where('sid',$sid)->find();
        if(!empty($info)){
            $info['pic'] = explode("|",$info['pic']);
        }

//         dd($info);
        
        return $this->fetch('index/add2', ['logo' => $logo,'info'=>$info]);
    }


    //客服帮助
    public function getcustom()
    {
        //商家logo
        $logo = $this->logo();
        //广告
        $info = DB::table('advert')->where('id', 1)->find();
        return $this->fetch('index/custom', ['logo' => $logo, 'info' => $info]);
        // dd($logo);
    }

    //广告编辑页
    public function getedit()
    {
        //商家logo
        $logo = $this->logo();
        return $this->fetch('index/add2', ['logo' => $logo]);
    }

  


}
