<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/11
 * Time: 14:33
 */

namespace app\admin\controller;


use think\Db;

class Logo extends Allow
{
    public function getindex()
    {
        //查询数据
        $list = Db::table('logo')->where('id', 1)->value('logo');

        return $this->fetch('logo/logo', ['list' => $list]);
    }


    public function getedit()
    {
        return $this->fetch('logo/edit');


    }


    public function postupdate()
    {
        $img = request()->file('img');
//        dd($img);

        //判断模板图片是否为空
        if (isset($img)) {
            //获取原有图片信息
            $pic = Db::table('logo')->where('id', 1)->value('logo');
            //拼接路径
            $pic = '.' . $pic;

            //移动新图片
            $info = $img->move(ROOT_PATH . 'public' . DS . 'logo');
            //获取信息
            $imgName = '/logo/' . $info->getSaveName();
            //转换字符
            $imgName = str_replace('\\', '/', $imgName);

            //整理数据
            $data = [
                'logo' => $imgName
            ];

            //删除文件
            unlink($pic);
        }else{
            return $this->success('请选择图片','/logo/edit');
        }
        //执行操作
        if (Db::table('logo')->where('id', 1)->update($data)) {
            return $this->success('修改成功', '/logo/index');
        } else {
            return $this->error('修改失败', '/logo/index');
        }


    }
}