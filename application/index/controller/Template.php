<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/4
 * Time: 18:12
 */

namespace app\index\controller;
/****************************模板控制**********************************************/

use think\Controller;
use think\Db;
use think\Validate;
use think\Cookie;

class Template extends Controller
{
    //列表显示
    public function getindex()
    {
        //接收搜索查询信息
        $select = request()->get('name');
        //获取模板分类信息
        $selects = request()->get('cates');

        //查询模板分类    distinct方法用于返回唯一不同的值
        $cates = Db::table('template')->distinct(true)->field('cates')->select();


        //倒叙模糊查询、模板数据、搜索
        $list = Db::name('template')->where(
            [
                'name' => ['like', '%' . $select . '%'],
                'cates' => ['like', '%' . $selects . '%']
            ])->order('id desc')->select();

        $a = 1;
        //分配
        $this->assign('list', $list);
        //渲染
        return $this->fetch('template/index', ['a' => $a, 'cates' => $cates, 'select' => $select]);
    }

    //添加页面
    public function getadd()
    {
        //获取模板分类信息
        $cate = DB::table('cate')->select();
        //渲染模板
        return $this->fetch('template/add', ['cate' => $cate]);
    }

    //添加页面提交信息处理
    public function postinsert()
    {
        //获取接收数据
        $name = request()->post('name');
        $type = request()->post('type');
        $img = request()->file('img');
        $file_name = request()->post('file');

        //获取接收的模板名称
        $file = "/template/$file_name";


        //获取数据库分类数据
        $cate = Db::table('cate')->where('id', $type)->find();

        $imgName = '';
        //判断封面图片是否存在
        if (!empty($img)) {
            //移动文件
            $info = $img->move(ROOT_PATH . 'public' . DS . 'template');
            //获取模板封面信息
            $imgName = '/template/' . $info->getSaveName();
            //替换
            $imgName = str_replace("\\", "/", $imgName);
        } else {
            // 上传失败获取错误信息
            return $this->Error('上传失败');
        }

//        $fileName = '';
//        //判断模板是否存在 HTML文件
//        if (!empty($file)) {
//            //存入template文件
//            $info_two = $file->move(ROOT_PATH . 'public' . DS . 'template');
//            //获取模板信息
//            $fileName = '/template/' . $info_two->getSaveName();
//            //替换
//            $fileName = str_replace("\\", "/", $fileName);
//        } else {
//            // 上传失败获取错误信息
//            return $this->Error('上传失败');
//        }


        //整理数据
        $data =
            [
                'name' => $name,
                'type' => $type,
                'img' => $imgName,
                'file' => $file,
                'cates' => $cate['cate']
            ];


        //查询模板数据
        $insert = Db::name('template')->insert($data);
        if ($insert) {
            return $this->success('上传成功', '/template/index');
        } else {
            return $this->error('上传失败');
        }
    }

    //编辑页面
    public function getedit()
    {
        //获取模板数据id
        $id = request()->get('id');
        //查询模板信息
        $list = Db::table('template')->where('id', $id)->find();
        //分配数据
        $this->assign('list', $list);
        return $this->fetch('/template/edit');
    }

    //编辑页面数据处理
    public function postedits()
    {
        //获取信息
        $id = request()->get('id');
        $name = request()->post('name');
        $img = request()->file('img');

        //判断模板图片是否为空
        if (isset($img)) {
            //获取原有图片信息
            $pic = Db::table('template')->where('id', $id)->value('img');
            //拼接路径
            $pic = '.' . $pic;

            //移动新图片
            $info = $img->move(ROOT_PATH . 'public' . DS . 'template');
            //获取信息
            $imgName = '/template/' . $info->getSaveName();
            //转换字符
            $imgName = str_replace('\\', '/', $imgName);

            //整理数据
            $data = [
                'name' => $name,
                'img' => $imgName
            ];

            //删除文件
            unlink($pic);
        } else {
            $data =
                [
                    'name' => $name,
                ];
        }
        //执行操作
        if (Db::table('template')->where('id', $id)->update($data)) {
            return $this->success('修改成功', '/template/index');
        } else {
            return $this->error('修改失败', '/template/index');
        }

    }

    //模板查看页面
    public function getsee()
    {

        //获取模板id
        $id = request()->get('id');
        //通过模板路径获取文件路径
        $file = Db::name('template')->where('id', $id)->value('file');
        $file1 = substr("$file", 0, 5);
        $file2 = substr("$file", 9);
        $file = "$file1$file2";
//        dd($file);
       
        return $this->fetch("$file", ['id' => $id]);
    }

    //编辑模板页面
    public function getbianji()
    {
        $request = request();
        $id = $request->param('id');
        $cate = Db::name('cate')->select();
//        dd($cate);
        return $this->fetch('temp/bianji', ['sid' => $id,'cate'=>$cate]);
    }

    //接收处理编辑模板页面信息
    public function postchuli()
    {

        $sid = Cookie::get('sid');
        $id = request()->param('id');
        $name = request()->post('name');
        $name1 = request()->post('name1');
        $weixin = request()->post('weixin');
        $type = request()->post('type');
        $num = request()->post('num');
        $date = request()->post('date');
        $datetime = date("Y-m-d H:i:s");
        $location = request()->post('location');

        //验证提交信息
        $validate = new Validate(
            [
                'name' => 'require|max:25',
                'name1' => 'require|max:25',
                'num' => 'number|require|max:11|/^1[3-8]{1}[0-9]{9}$/',
            ],
            [
                'name.require' => '名称必须填写',
                'name.max' => '名称最多不能超过25个字符',
                'name1.require' => '名称必须填写',
                'name1.max' => '名称最多不能超过25个字符',
                'num' => '手机号格式错误',
            ]);
        $data = [
            'sid'=>$sid,
            'mid'=>$id,
            'name' => $name,
            'name1' => $name1,
            'num' => $num,
            'weixin' => $weixin,
            'type' => $type,
            'time' => $date,
            'location' => $location,
            'datetime'=>$datetime
        ];
        if (!$validate->check($data)) {
            return $this->error($validate->getError());
        }
        //查询手机号是否存在
        $unm = Db::name('mb_user')->where('num', $data['num'])->select();
        if ($unm) {
            return $this->success('手机号已存在，请重新输入');
        } else {
            //存入信息获取id
            $pid = Db::name('mb_user')->insertGetId($data);
            if ($pid) {
                return $this->fetch('temp/infoEdit', ['pid' => $pid, 'mid' => $id]);
            } else {
                return $this->error('上传失败');
            }
        }
    }

    //接收处理编辑模板页面图片
    public function getinfoEdit()
    {
        return $this->fetch('temp/infoEdit');
    }


    //编辑模板页面图片信息
    public function posteditimg()
    {
        //获取模板id
        $mid = request()->param('mid');
        $id = request()->post('pid');
        $info_images = request()->file('file');
        $filename = [];//定义数组获取多张图片信息

        //返回数组中元素的数目
        $con = count($info_images);
        //检测上传图片的数量
        if ($con !== 6) {
            return $this->error('图片上传数量不足');
        }
        //循环数组
        foreach ($info_images as $info_image) {
            //图片储存到指定位置
            $move = $info_image->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($move) {
                //获取信息，并进行拼接
                $filename[] = '/uploads/' . $move->getSaveName();
            } else {
                return $move->getError();
            }
        }
        //把数组转换为字符串
        $info_jpg = implode(",", $filename);  //var_dump(explode(",",$a)); 把字符串转换为数组
        //转换字符
        $pic['pic'] = str_replace('\\', '/', $info_jpg);
        //存储到数据库
        $pic = Db::name('mb_user')->where('id', $id)->update($pic);
        if ($pic) {
            $this->redirect('/temp/editsee', ['id' => $id, 'mid' => $mid]);
        } else {
            $this->error('上传失败');
        }

    }

    //把上传的图片遍历到模板里面
    public function geteditsee()
    {

        $mid = request()->param('mid');

        $file = Db::name('template')->where('id', $mid)->value('file');
//        var_dump($file);


        $id = request()->param('id');
        $list = Db::name('mb_user')->where('id', $id)->find();
        $list['pic'] = (explode(",", $list['pic'])); //把字符串转换为数组

        $weizhi = 'edit';
        //插入字符串
        $files = substr_replace($file, $weizhi, 10, 0);


        //截取拼接字符串
        $files1 = substr("$files", 0, 5);
        $files2 = substr("$files", 9);
        $files = "$files1$files2";

//         var_dump($files);
//        dd($list);


        return $this->fetch("$files", ['list' => $list]);

    }


    //删除页面
    public function getdelete()
    {
        $request = request();
        $id = $request->param('id');
//        dd($id);
        //获取现有图片路径
        $delete = Db::table('template')->where('id', $id)->find();
//        var_dump($delete);
        //拼接原图片路径信息
        $img = '.' . $delete['img'];

        //获取原模板路径
        $file = '.' . $delete['file'];
//        dd($delete['file']);

        //执行数据删除
        if (Db::table('template')->where('id', $id)->delete()) {
            //执行文件删除
            unlink($img);
            unlink($file);
            return $this->success('删除成功', '/template/index');
//            return ['code'=>201,'message'=>'删除成功'];

        } else {

            return $this->error('请求超时');

        }
    }

}