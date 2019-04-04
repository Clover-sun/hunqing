<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/3/27
 * Time: 14:33
 */

namespace app\apps\controller;

use think\Controller;
use think\Db;
use think\Validate;
use think\Session;

class Index extends Controller
{
    public function getindex()
    {
        //二维码携带商家id
        $sid = request()->param('id');
        return $this->fetch('index/index',['sid'=>$sid]);
    }

    public function postlogin()
    {

        //二维码携带商家id
//        $sid = request()->param('id');

//         Session::set('id',$sid);

//        dd($sid);
        //获取输入的手机号
        $phone = request()->param('phone');
        //查询数据库中的手机号码，进行对比
        $num = Db::name('mb_user')->where('num', $phone)->find();

        if ($phone == $num['num']) {
            //获取商家id
            $sid = $num['sid'];
            //根据商家id 查询 show_template表，判断该商家是否分配模板
            $select_sid = Db::name('show_template')->where('sid', $sid)->select();

            if ($select_sid) {

                //平台已给商家分配，查询模板分类
                foreach ($select_sid as $v) {
                    $types[] = $v['type'] . ',';
                }
                //$types 为模板分类id
                //已获取模板分类id,通过模板分类id查找模板分类名称
                $type_name = Db::name('cate')->where('id', 'in', $types)->column('cate');
//                dd($type_name);

                //获取商户的分类和模板信息 id
                $nodes = Db::name('show_template')->where('sid', $sid)->field('type,template')->select();
//                var_dump($nodes);

                $template = [];
                //遍历信息  生成新数组
                foreach ($nodes as $node) {
                    $template[] = [

                        // 获取到商户下的所有模板信息 加入数组
                        'template' => Db::name('template')->whereIn('id', explode(',', $node['template']))->select()
                    ];
                }

//                 dd($template);
//                 echo "<pre>";
//                 print_r($template);
//                 exit;

                //模板信息 分类
//                $list = Db::name('show_template')->alias('ur')
//                    ->where('ur.sid', $sid)->join('cate c', 'c.id = ur.type')
//                    ->field('cate')->select();
//                $this->assign('list', $list);
//                dd($list);

            } else {
                return $this->error('该商家不存在模板，请联系商家');
            }
            return $this->fetch('index/show', ['sid' => $sid, 'type' => $type_name, 'template' => $template] );
        } else {
            return $this->error('该用户不存在，请联系商家');
        }
    }

    //模板查看页面
    public function getsee()
    {

        //获取模板id
        $id = request()->get('id');
        //通过模板路径获取文件路径
        $file = Db::name('template')->where('id', $id)->value('file');
        //$file1 = substr("$file", 0, 5);
        $file1 = '/index';
//        var_dump($file1);
        $file2 = substr("$file", 9);
//        var_dump($file2);
        $file = "$file1$file2";
//        var_dump($file);
//        exit();
        return $this->fetch("$file", ['id' => $id]);
    }

    //编辑模板页面
    public function getbianji()
    {
        $request = request();
        $id = $request->param('id');
        return $this->fetch('index/bianji', ['sid' => $id]);
    }

    //接收处理编辑模板页面信息
    public function postchuli()
    {

//        $sid = Cookie::get('sid');
//        dd($sid);
        $id = request()->param('id');
        $name = request()->post('name');
        $name1 = request()->post('name1');
        $num = request()->post('num');
        $date = request()->post('date');
        $location = request()->post('location');
        $datetime = date("Y-m-d H:i:s");
//        var_dump($datetime);
//        exit();

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
//            'sid'=>$sid,
            'mid'=>$id,
            'name' => $name,
            'name1' => $name1,
            'num' => $num,
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
                return $this->fetch('index/infoEdit', ['pid' => $pid, 'mid' => $id]);
            } else {
                return $this->error('上传失败');
            }
        }
    }


    //接收处理编辑模板页面图片
    public function getinfoEdit()
    {
        return $this->fetch('apps/infoEdit');
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
            $this->redirect('/apps/editsee', ['id' => $id, 'mid' => $mid]);
        } else {
            $this->error('上传失败');
        }

    }

    //把上传的图片遍历到模板里面
    public function geteditsee()
    {

        $mid = request()->param('mid');

        $file = Db::name('template')->where('id', $mid)->value('file');



        $id = request()->param('id');
        $list = Db::name('mb_user')->where('id', $id)->find();
        $list['pic'] = (explode(",", $list['pic'])); //把字符串转换为数组

        $weizhi = 'edit';
        //插入字符串
        $files = substr_replace($file, $weizhi, 10, 0);




        //截取拼接字符串

        $files1 = '/index';

        $files2 = substr("$files", 9);
        $files = "$files1$files2";


        return $this->fetch("$files", ['list' => $list]);

    }

    public function postshow()
    {
        return 123;

    }


}