<?php
namespace app\admin\controller;
/****************************商户添加**********************************************/
use think\Controller;
use think\Db;
use thik\Validate;

class Tenant extends Allow
{

    //列表显示
    public function getindex()
    {
        // echo 11111;
        $request =\request();

        $name = $request->param('k');
        // dd($k);
        $list = Db::table('tenant')->where('name','like','%'.$name.'%')->order('id asc')->paginate('5');

        $page = $list->render();
        $data = $list->all();
        // dd($data);
        foreach ($data as $k =>$val) {
            if (!empty($val['cetval'])) {
                // dd($val['cetval']);
                //获取现在的时间戳
                // $tme = time();
                $aa= ($val['cetval'] - time()) / 3600 / 24;
                $data[$k]['cetval'] = round($aa);
            }
        }
      
        return $this->fetch('tenant/index', ['data'=>$data,'page'=>$page,'k'=>$name]);
    }


    //添加页面
    public function getadd()
    {
        // echo 11111;

        return $this->fetch('tenant/add');
    }

    //执行添加
    public function postinsert()
    {
        $request = request();

        $data = $request->except('action');
        $file = $request->file('file');
        // dd($file);

        //地址处理
        $where=  $data['province'].",".$data['city'].",".$data['area'];
    
        $city = DB::table('city')->where('id', 'in', $where)->field('cityname')->select();
    
        //将二维数组遍历重新组装
        foreach ($city as $val) {
            $val = join(",", $val);
            $cit[] = $val;
        }
        //拼接
        $res = implode("-", $cit);

        //包年信息处理时间戳
        $ymd = strtotime("+".$data['cetval']." year");

        //数据信息
        $tena['name'] = $data['name'];
        $tena['ress'] = $res."|".$data['ress'];
        $tena['phone'] = $data['phone'];
        $tena['password'] = $data['password'];
        $tena['repassword'] = $data['repassword'];
        $tena['cet'] = $data['cet'];
        $tena['cetval'] = $ymd;
        $tena['cetvas'] = $data['cetvas'];
        $tena['pag'] = $data['pag'];
        $tena['ale'] = $data['ale'];
        $tena['static'] = 1;

        //判断服务类型
        //包年
        if (empty($tena['cteval'])) {
            unset($tena['cteval']);
        }

        //次数
        if (empty($tena['ctevas'])) {
            unset($tena['ctevas']);
        }


        //引入验证
        $validate = validate('yanzhen');

        //返回验证错误信息
        if (!$validate->check($tena)) {
            return ['code'=>400,'message'=>$validate->getError()];
        } else {
            //删除确认密码
            unset($tena['repassword']);

            //加密密码
            $tena['password'] = \md5($tena['password']);


            //加规则 size 1024*1024*1024
            $result = $this->validate(['file1'=>$file], ['file1'=>"require|image"], ['file1.require'=>'上传图片不能为空','file1.image'=>'非法图像文件']);

            //判断
            if (true !== $result) {
                return ['code'=>201,'message'=>$result];
                // echo  1111;
            }
            //logo图片处理
            //移动图片
            $info = $file->move(ROOT_PATH."public".DS."logo");

            //获取图片名字
            $savename1 = "/logo/".$info->getSaveName();

            //转换斜杠
            $logo = str_replace("\\", "/", $savename1);

            //拼接logo路径
            $tena['logo'] = $logo;
        }


        $pid = DB::table('tenant')->insertGetId($tena);
        if(!empty($pid)){
            $url = 'http://szz.cshans.cn/apps/index?id='.$pid;
            $filename = ewm($url);
            $var=explode("/",$filename);
//             dd($var[1]);
            $er['erweima'] = '/erweima/'.$var[6];
            $er['pid'] = $pid;
            $aa =  DB::table('erweima')->insert($er);
            if(true != $aa){
                return ['code'=>201,'message'=>'二维码分配失败'];
            }
            return ['code'=>200,'message'=>'添加成功'];
        } else {
            return ['code'=>201,'message'=>'系统错误'];
        }




    }


    //二维码
//    public function getwei(){
//        $url = 'http://szz.cshans.cn/apps/index?id=1';
//        $filename = ewm($url);
////        dd($filename);
//        $var=explode("/",$filename);
////        dd($var);
//        $epic = '/erweima/'.$var[6];
//
//        dd($epic);
//
//    }


    //删除操作
    public function getdelete(){
        $request = request();

        $sid = $request->param('sid');
        
        //获取商家分类信息
        $cate = DB::table('show_template')->where('sid',$sid)->count();
        
        
        //获取二维码信息
        $erwei = DB::table('erweima')->where('pid',$sid)->value('erweima');
        $er = ".".$erwei;   

        //获取商家logo信息
        $logo = DB::table('tenant')->where('id',$sid)->value('logo');
        $pic = ".".$logo;
       
        //删除商家信息
        if(DB::table('tenant')->where('id',$sid)->delete()){

            //删除分类信息
            if($cate > 0){
                DB::table('show_template')->where('sid',$sid)->delete();
            }
            //删除二维码
           DB::table('erweima')->where('pid',$sid)->delete();
            //删除二维码图片
           unlink($er);
            //删除logo
           unlink($pic);
           return ['code'=>200,'message'=>'删除成功'];
           
        }else{

          return ['code'=>201,'message'=>'系统错误'];

        }
   
    }

}
