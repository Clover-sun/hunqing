<?php
namespace app\admin\controller;

/****************************广告管理**********************************************/
use think\Controller;
use think\Db;

class Advert extends Allow
{
    public function getindex()
    {
        $row = DB::table('advert')->where('id', 1)->find();
       
        return $this->fetch('advert/index', ['row'=>$row]);
    }




    public function getedit()
    {
        $request = request();

        $id  = $request->param('id');

        $info = DB::table('advert')->where('id', $id)->find();

        return $this->fetch('advert/edit', ['info'=>$info]);
    }



    public function postupdate()
    {
        $request = request();
        $file = $request->file('file');

        $id = $request->param('id');
        $data['phone'] = $request->param('phone');
        $data['weixin'] = $request->param('weixin');
        $data['qq'] = $request->param('qq');
        // dd($data);
        if (!empty($file)) {
            //获取现有图片路径
            $pic = DB::table('advert')->where('id', $id)->value('pic');
            $aa = '.'.$pic;
            unlink($aa);

            //加规则 size 1024*1024*1024
            $result = $this->validate(['file1'=>$file], ['file1'=>"image"], ['file1.image'=>'非法图像文件']);

            //判断
            if (true !== $result) {
                return ['code'=>201,'mag'=>$result];
                //    echo  1111;
            }
  
            //移动图片
            $info = $file->move(ROOT_PATH."public".DS."advert");
  
            //获取图片名字
            $savename1 = $info->getSavename();
         
            //转换斜杠
            $savename = str_replace("\\", "/", $savename1);

            //拼接原图路径
            $data['pic'] = "/advert/".$savename;
        }

        if(DB::table('advert')->where('id',$id)->update($data)){

            return ['code'=>200,'mag'=>'修改成功'];

        }else{
            
            return ['code'=>202,'mag'=>'系统错误'];

        }

    }
}
