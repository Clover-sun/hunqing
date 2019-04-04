<?php
namespace app\admin\controller;
/****************************后台首页**********************************************/
use think\Controller;
use think\Request;
use think\Session;
class Index extends Allow
{
    public function getindex()
    {

        //服务器信息表
        $sys_info['os']             = PHP_OS;
        $sys_info['zlib']           = function_exists('gzclose') ? 'YES' : 'NO';
        $sys_info['safe_mode']      = (boolean) ini_get('safe_mode') ? 'YES' : 'NO';
        $sys_info['timezone']       = function_exists("date_default_timezone_get") ? date_default_timezone_get() : "no_timezone";
        $sys_info['curl']			= function_exists('curl_init') ? 'YES' : 'NO';
        $sys_info['web_server']     = $_SERVER['SERVER_SOFTWARE'];
        $sys_info['phpv']           = phpversion();
        $sys_info['ip'] 			= GetHostByName($_SERVER['SERVER_NAME']);
        $sys_info['fileupload']     = @ini_get('file_uploads') ? ini_get('upload_max_filesize') :'unknown';
        $sys_info['max_ex_time'] 	= @ini_get("max_execution_time").'s'; //脚本最大执行时间
        $sys_info['set_time_limit'] = function_exists("set_time_limit") ? true : false;
        $sys_info['domain'] 		= $_SERVER['HTTP_HOST'];
        $sys_info['memory_limit']   = ini_get('memory_limit');
        $sys_info['timezone']       = date_default_timezone_get();
        $sys_info['time']           = date('Y-m-d H:i:s',time());
        $sys_info['php_uname']         = php_uname();


       return $this->fetch('admin/index',['sys_info'=>$sys_info]);
    }
}
