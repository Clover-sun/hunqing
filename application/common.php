<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


function dd($res)
{
    $arr = halt($res);
    return $arr;
}


//生成二维码
function ewm($url)
{
    Vendor('phpqrcode.phpqrcode');
    //生成二维码图片
    $object = new \QRcode();
//    $url='http://szz.cshans.cn/index/index';//网址或者是文本内容
    $level=3;
    $size=4;
    $aa = time();
    $saveandprint = true;
    // dd($aa);
    $filename  = ROOT_PATH."public".DS."erweima/"."$aa".'.jpg';
    $errorCorrectionLevel =intval($level) ;//容错级别
    $matrixPointSize = intval($size);//生成图片大小
    $object->png($url,$filename , $errorCorrectionLevel, $matrixPointSize, 2,$saveandprint);
    return $filename ;
}


//计算天数
function tit($cetval)
{
    $aa= ($cetval- time()) / 3600 / 24;
    $date = round($aa);

    return $date;
}
