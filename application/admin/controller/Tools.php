<?php
namespace app\admin\controller;
use think\Db;
use think\Controller;

class Tools extends Allow
{
    // 省市区三级联动------------
    //读取省
    public function postprivance()
    {
        $list = DB::table('city')->where('pid', 1)->select();
        return $list;
    }

    //读取市
    public function postcity($provinceid)
    {
        if ($provinceid==110000) {
            $where = "pid=110000";
        } else {
            $where = "pid=$provinceid";
        }
        $list = DB::table('city')->where($where)->select();
        return $list;
    }

    //读取区
    public function postarea($cityid)
    {
        if ($cityid==110000) {
            $where = "pid=110000";
        } else {
            $where = "pid=$cityid";
        }
        $list = DB::table('city')->where($where)->select();
        // dd($list);
        // echo $list->getLastSql();
        return $list;
    }
    //省市区三级联动结束---------------
}
