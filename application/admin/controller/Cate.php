<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/6
 * Time: 10:40
 */

namespace app\admin\controller;

use think\Validate;
use think\Db;

/****************************模板分类修改**********************************************/
class Cate extends Allow
{
    //模板分类列表展示
    public function getindex()
    {
        $list = Db::table('cate')->order('id desc')->select();
        $this->assign('list', $list);

        $a = 1;
        return $this->fetch('cate/index', ['a' => $a]);
    }

    //模板分类添加
    public function getadd()
    {
        return $this->fetch('cate/add');

    }

    //模板分类添加信息处理
    public function postinsert()
    {
        $cate = request()->post();
//        dd($cate);
        //信息校验
        $result = $this->validate(
            [
                'cate' => $cate['cate']
            ],
            [
                'cate' => 'unique:cate'
            ],
            [
                'cate.unique' => '分类名称已存在'
            ]
        );
        if (true !== $result) {
            return $this->error($result);
        } else {
            Db::table('cate')->insert($cate);
            return $this->success('添加成功', '/cate/index');

        }

//        if (Db::table('cate')->insert($cate)) {
//            return $this->success('添加成功', '/cate/index');
//        }
    }

    //点击编辑按钮
    public function getedit()
    {
        $id = request()->get('id');
        $db = Db::table('cate')->where('id', $id)->find();
        $this->assign('data', $db);
        return $this->fetch('cate/edit');
    }

    //编辑页面
    public function postedits()
    {
        $id = request()->get('id');
        $cate = request()->post();

        $result = $this->validate(
            [
                'cate' => $cate['cate']
            ],
            [
                'cate' => 'unique:cate'
            ],
            [
                'cate.unique' => '分类名称已存在,请重新修改'
            ]
        );
        if (true !== $result) {
            return $this->error($result);
        } else {
            Db::table('cate')->where('id', $id)->update($cate);
            return $this->success('修改成功', '/cate/index');
        }
//
//        if (Db::table('cate')->where('id', $id)->update($cate)) {
//            return $this->success('修改成功', '/cate/index');
//        }

    }


    //删除页面

    public function getdelete()
    {
        $id = request()->get('id');
        if (
            Db::table('cate')->where('id', $id)->delete() &&
            Db::name('template')->where('type', $id)->delete() &&
            Db::name('video')->where('type', $id)->delete()) {
            return ['code' => 200, 'message' => '删除成功'];
        } else {
            return ['code' => 408, 'message' => '请求超时'];
        }
//         Db::table('cate')->where('id', $id)->delete();
//         Db::name('template')->where('type',$id)->delete();
//         Db::name('video')->where('type',$id)->delete();


    }


}