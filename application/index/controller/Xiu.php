<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Cookie;
class Xiu extends Bese
{

    public function postedit(){
        $request = \request();
        // dd(1111);
        //取出商家id
        $sid = Cookie::get('sid');
        
        //获取 商家资格
        $aut = DB::table('tenant')->where('id',$sid)->value('pag');
        // dd($aut);
        if($aut != 1){
            return $this->error("抱歉，您没有开通此项服务！",'/index/ad');
        }

        // dd($sid);
        //获取文字数据
        $data = $request->except('action');

        //获取logo图片
        $logo = $request->file('file');
        
        //获取广告图片
        $pic = $request->file('image');

        //获取尾页弹窗
        $tan = $request->file('file1');

        // dd($tan);
        


        // dd($logo);
        if(empty($logo) && empty($pic) && empty($tan)){

            return $this->error("信息错误",'/index/ad');

        }

        //判断商户是否有广告信息
        $info = DB::table('verts')->where('sid',$sid)->find();
        // dd($info);

        if(!empty($info) && $info != null){

             //删除文件
            //多图删除
            $pics = explode("|",$info['pic']);
            foreach($pics as $vo){
                $res = ".".$vo;
                // var_dump($res);
                unlink($res);
            }

            //单图删除
            $logos = ".".$info['logo'];
            $tans = '.'.$info['tan'];
            // dd($logo);
            unlink($logos);
            unlink($tans);

            DB::table('verts')->where('sid',$sid)->delete();

        }


        // dd($pic);
        //商品图片的处理
        $img = '';
        foreach($pic as $picFile){
 
             // 移动到框架应用根目录/public/uploads/ 目录下
             $info = $picFile->move(ROOT_PATH . 'public' . DS . 'verts');
            
             if ($info) {
 
                 $img .= "/verts/".$info->getSaveName()."|";
 
            }
               
  
        }
 
         //多图片路径
         $imgs = substr($img,0,strlen($img)-1);
         $data['pic'] = str_replace("\\","/",$imgs);
 
         //logo图片的处理
         $result = $logo->move(ROOT_PATH."public".DS."verts");
         $files = "/verts/".$result->getSaveName();
        
         $data['logo'] = str_replace("\\","/",$files);

        //弹窗广告处理
        $res = $tan->move(ROOT_PATH."public".DS."verts");
        $aa = "/verts/".$res->getSaveName();


        $data['tan'] =  str_replace("\\","/",$aa);

         $data['sid'] = $sid;


         if(DB::table('verts')->insert($data)){
             return $this->success("广告信息添加成功",'/index/ad');
         }else{
             return $this->error("广告信息添加失败",'/index/ad');
         }
 

    }


}

?>