<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/8
 * Time: 15:42
 */

namespace app\admin\controller;


use think\Db;

class Edit extends Allow
{
    public function getindex()
    {
        //接收商户id
        $sid = request()->param('sid');
//        dd($sid);

        //查询模板分类
        $cate = Db::name('cate')->select();

        $this->assign('cate', $cate);

        return $this->fetch('/edit/index', ['sid' => $sid]);
//        dd($db);
        //接收模板分类id,查取分类类型
//        $id = request()->get('id');
//        $list = Db::name('template')->select();
//        dd($list);
//        //存入show_template 表中
//        $data = [
//            'sid' => $sid
//        ];
//        Db::name('show_template')->insert($data);
//        $this->assign('moban', $list);

    }

    public function getadd()
    {
        //获取商户id
        $sid = request()->param('sid');
        //获取模板分类id
        $fid = request()->param('fid');

        //查询模板分类
        $list = Db::name('template')->where('type', $fid)->value('cates');
        //如果模板分类中模板为空
        if (!isset($list)) {
            return $this->error('该模板为空');
        }


        $mo = Db::name('show_template')->where('sid', $sid)->where('type', $fid)->value('template');

        $moban = explode(",", $mo);


        //查询模板信息
        $template = Db::name('template')->where('type', $fid)->select();
        //分配给视图
        $this->assign('list', $template);


        return $this->fetch('edit/add', ['cates' => $list, 'sid' => $sid, 'fid' => $fid, 'moban' => $moban]);


    }

    public function getinset()
    {

        $sid = ($_GET['sid']);
        $fid = ($_GET['fid']);
        $id = ($_GET['id']);

        //将维数组转换字符串
        $mid = implode(",", $id);



        //存入show_template 表中
        $data = [
            'sid' => $sid,
            'type' => $fid,
            'template' => $mid,
        ];
//        dd($data);
        //查询  商家是否已经有分配的模板数据
        $mo = Db::name('show_template')->where('sid', $sid)->where('type', $fid)->value('id');

        //判断
        if (!empty($mo) && $mo != null) {

//            echo '1111';

            if (Db::name('show_template')->where('id', $mo)->update($data)) {
                return '数据选择成功';
            } else {
                return '数据未更改';
            }

        } else {
            if (Db::name('show_template')->insert($data)) {
                return '成功';
            } else {
                return '失败';
            }

        }


    }


}