<?php
namespace app\admin\controller;
use think\Db;
class Video extends Allow{
    //视频列表页
    public function getindex()
    {
        
        $info = DB::table('video')->order('fid asc')->select();


        foreach($info as $k => $vla){
            $info[$k]['fid'] = DB::table('cate')->where('id',$vla['fid'])->value('cate');
        }

        return $this->fetch('video/index',['info'=>$info]);
    }

    //视频添加页
    public function getadd()
    {


        $cate = DB::table('cate')->select();

        return $this->fetch('video/add',['cate'=>$cate]);

    }


    //执行添加
    public function postinsert()
    {
        $request = \request();

        $data = $request->except('action');
        $file = $request->file('file');

        //移动图片
        $info = $file->move(ROOT_PATH."public".DS."vid");

        //获取图片名字
        $savename1 = $info->getSavename();

        //转换斜杠
        $savename = str_replace("\\","/",$savename1);
        // dd($savename);

        //拼接原图路径
        $data['pic'] = "/vid/".$savename;

        // dd($data);

        if(DB::table('video')->insert($data)){
            return ['code'=>200,'mag'=>'添加成功'];
        }else{
            return ['code'=>202,'mag'=>'添加失败'];
        }



    }

    //视频修改页
    public function getedit()
    {
        $request = request();
        //获取id
        $id = $request->param('id');
        //获取信息
        $info = DB::table('video')->where('id',$id)->find();

        //分类信息
        $cate = DB::table('cate')->select();

        return $this->fetch('video/edit',['info'=>$info,'cate'=>$cate]);


    }


    //执行修改
    public function postupdate()
    {
        $request = request();

        //获取修改的id
        $id = $request->param('id');

        //获取修改数据
        $data = $request->except('action,id');

        //获取图片信息
        $file = $request->file('file');
        
        if(empty($file)){

            unset($data['file']);
            // dd($data);
            if(DB::table('video')->where('id',$id)->update($data)){
                return ['code'=>200,'mag'=>'修改成功'];
            }else{
                return ['code'=>201,'mag'=>'系统错误'];

            }
        }


         //移动新图片
         $info = $file->move(ROOT_PATH."public".DS."vid");

         //获取图片名字
         $savename1 = $info->getSavename();
 
         //转换斜杠
         $savename = str_replace("\\","/",$savename1);
         // dd($savename);
 
         //拼接原图路径
         $data['pic'] = "/vid/".$savename;

        //获取现有图片信息
        $pic =DB::table('video')->where('id',$id)->value('pic');

        //拼接路径
        $pic = ".".$pic;

        if(DB::table('video')->where('id',$id)->update($data)){
            unlink($pic);
            return ['code'=>200,'mag'=>'修改成功'];
        }else{
            return ['code'=>201,'mag'=>'系统错误'];
        }





    }


    //视频删除
    public function getdelete()
    {
        $request = request();
        //获取id
        $id = $request->param('id');

        //获取封面图片信息
        $pic = DB::table('video')->where('id',$id)->value('pic');

        $pic = ".".$pic;

        if(DB::table('video')->where('id',$id)->delete())
        {
            \unlink($pic);
            return ['code'=>200,'message'=>'删除成功'];
        }else{
            return ['code'=>201,'message'=>'系统错误'];
        }
    }


}

?>