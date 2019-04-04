<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:66:"D:\wamp64\www\moban\public/../application/admin\view\edit\add.html";i:1553220657;s:66:"D:\wamp64\www\moban\application\admin\view\AdminPublic\public.html";i:1552876572;}*/ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>模板管理</title>
	<meta name="keywords"  content="设置关键词..." />
	<meta name="description" content="设置描述..." />
	<meta name="author" content="DeathGhost" />
	<meta name="renderer" content="webkit">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<link rel="icon" href="/static/admin/images/icon/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="/static/admin/css/style.css" />
	<!-- <link rel="stylesheet" type="text/css" href="/static/pic/css/style.css" /> -->
	<script src="/static/admin/javascript/jquery.js"></script>
	<script src="/static/admin/javascript/plug-ins/customScrollbar.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/echarts.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/layerUi/layer.js"></script>
	<script src="/static/admin/ueditor/umeditor.config.js"></script>
	<script src="/static/admin/ueditor/umeditor.min.js"></script>
	<script src="/static/admin/javascript/plug-ins/pagination.js"></script>
	<script src="/static/admin/javascript/public.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/jquery-1.6.1.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/jquery.validate.min.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/jquery.metadata.js"></script>
	<script language="JavaScript" type="text/JavaScript" src="/static/admin/jq/messages_cn.js"></script>

</head>
<body>
<div class="main-wrap">
	<div class="side-nav">
		<div class="side-logo">
			<div class="logo">
				<span class="logo-ico">
					<i class="i-l-1"></i>
					<i class="i-l-2"></i>
					<i class="i-l-3"></i>
				</span>
				<strong>模块化后台管理</strong>
			</div>
		</div>
		
		<nav class="side-menu content mCustomScrollbar" data-mcs-theme="minimal-dark">
			<h2>
				<a href="/admin/index" class="InitialPage"><i class="icon-dashboard"></i>后台首页</a>
			</h2>
			<ul>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>商户管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/tenant/index">商户列表</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>广告管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/advert/index">广告列表</a>
						</dd>
					</dl>
				</li>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>模板管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/cate/index">模板分类</a>
						</dd>
						<dd>
							<a href="/template/index">模板列表</a>
						</dd>

					</dl>
				</li>
				<li>
					<dl>
						<dt>
							<i class="icon-user"></i>登录管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/logo/index">登录logo</a>
						</dd>

					</dl>
				</li>
			</ul>
		</nav>
		<footer class="side-footer">© DeathGhost 版权所有</footer>
	</div>
	<div class="content-wrap">
		<header class="top-hd">
			<div class="hd-lt">
				<a class="icon-reorder"></a>
			</div>
			<div class="hd-rt">
				<ul>
					
					<li>
						<a><i class="icon-user"></i>管理员:<em><?php echo \think\Request::instance()->session('name'); ?></em></a>
					</li>
					<li>
						<a class="xu"><i class="icon-bell-alt">修改密码</i></a>
					</li>
					<li>
						<a href="/login/logout" id=""><i class="icon-signout"></i>安全退出</a>
					</li>
				</ul>
			</div>
		</header>
		<main class="main-cont content mCustomScrollbar">
		<!-- <div class="page-wrap"> -->
		<!-- </div> -->

		
								

<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <section class="page-hd">
                    <header>
                        <h2 class="title"><?php echo $cates; ?>模板</h2>
                        <input type="hidden" id="sid" name="sid" value="<?php echo $sid; ?>">
                        <input type="hidden" id="fid" name="fid" value="<?php echo $fid; ?>">
                        <!--<td id="sid">商户id:<?php echo $sid; ?></td>-->

                        <!--<td>模板分类id:<?php echo $fid; ?></td>-->

                    </header>
                    <hr>
                </section>

                <table class="table table-bordered table-striped mb-15">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>模板封面</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <tr class="cen">


                        <td><input type="checkbox" name="title" id="<?php echo $vo['id']; ?>"  <?php if(in_array($vo['id'],$moban)): ?>checked<?php endif; ?>></td>



                        <!--<td><input type="checkbox" name="title" id="<?php echo $vo['id']; ?>"></td>-->

                        <td><img src="<?php echo $vo['img']; ?>" width="100px" height="100px"></td>
                        <td>
                            <a href="<?php echo $vo['file']; ?>" title="编辑" class="mr-5">查看</a>
                        </td>
                    </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    </tbody>
                </table>
                <button class="btn btn-info radius" id="btnOperate" onclick="static_num()">确认选择</button>
            </div>
        </div>
    </div>
</div>
<script>
    //复选框点击事件
    function static_num() {
        // document.getElementById("btnOperate").onclick = function () {
        var sid = $("#sid").val();
        var fid = $("#fid").val();
        var arr = new Array();
        var items = document.getElementsByName("title");
        for (i = 0; i < items.length; i++) {
            if (items[i].checked) {
                arr.push(items[i].id);
            }
        }

        if (arr == '') {
            layer.msg('请选择模板');
            return false;
        }

        // alert(id);
        // alert("选择为：" + arr);
        $.ajax({
            url: '/edit/inset',
            type: 'get',
            data: {id: arr, sid: sid, fid: fid},
            success: function (data) {

                alert(data);
                location.href='/tenant/index';
            },
            error: function (e) {
                // alert(e);
            },
        })
        // };

    };


</script>


				
			<!--开始::结束-->
		
		</main>
		
	</div>
</div>
</body>
<script>
$(".xu").click(function(){

	$.ajax({
            url: '/adminuser/edit',
            typr: 'get',
            data: {},
            success: function (data) {

                layer.open({
                    type: 1,
                    title: '管理员修改',
                    skin: 'layui-layer-demo', //加上边框
                    area: ['600px', '500px'], //宽高
                    content: data
                })
                // console.log(data);
            },
            error: function (e) {
                console.log(e);
            }

        })

});

</script>
</html>
