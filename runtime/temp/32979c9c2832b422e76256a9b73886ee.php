<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:101:"C:\wamp64\www\hunqing\wedding_platform\admin\moban\public/../application/admin\view\template\add.html";i:1553755848;s:97:"C:\wamp64\www\hunqing\wedding_platform\admin\moban\application\admin\view\AdminPublic\public.html";i:1553755848;}*/ ?>
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
							<i class="icon-user"></i>视频管理<i class="icon-angle-right"></i>
						</dt>
						<dd>
							<a href="/video/index">视频列表</a>
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

		
								
<style>
    #xmTanImg {
        width: 100px;
        height: 100px;

    }
</style>
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <div class="page-wrap">
                    <section class="page-hd">
                        <header>
                            <h2 class="title">模板添加</h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData" method="post"  onSubmit="return inputNull(this)" enctype="multipart/form-data" action="/template/insert">

                        <div class="form-group-col-2">
                            <div class="form-label">模板名称:</div>
                            <div class="form-cont">
                                <input type="text" placeholder="模板名称" class="form-control form-boxed " name="name" id="name">
                                <span class="span"></span>
                            </div>
                        </div>

                        <div class="form-group-col-2">
                            <div class="form-label">模板分类:</div>
                            <span class="cls_select_span">
                             <select id="id_select" class="cls_select"  name="type">
                                 <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$row): ?>

                                  <option value="<?php echo $row['id']; ?>"><?php echo $row['cate']; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                             </select>
                            </span>
                        </div>

                        <div class="form-group-col-2">
                            <div class="form-label">模板封面:</div>
                            <div>
                                <p>
                                    <input type="file" id="xdaTanFileImg" name="img" onchange="xmTanUploadImg(this)" />
                                </p>
                                <!--<img id="xmTanImg" />-->
                                <div id="xmTanDiv"></div>
                            </div>
                        </div>

                        <div class="form-group-col-2">
                            <div class="form-label">模板名称:</div>
                            <div>
                                <p>
                                    <input type="text" id="xdaTanFileImg1" name="file" onchange="xmTanUploadImg(this)" />
                                </p>
                                <img id="xmTanImg1" />
                                <div id="xmTanDiv1"></div>
                            </div>
                        </div>


                      <div class="form-group-col-2">
                            <div class="form-label"></div>
                            <div class="form-cont">
                                <input type="submit" class="btn btn-primary" id="submit" value="提交表单" />

                            </div>
                        </div>
                        <!--开始::结束-->
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function inputNull(form){
        for(i=0;i<form.length;i++){
            //form属性的elements的首字母e要小写
            if(form.elements[i].value == ""){
                alert("亲：" + form.elements[i].placeholder + "提交数据不能为空");
                form.elements[i].focus();
                return false;
            }
        }
    }
</script>

<!--<script>-->
    <!--//判断浏览器是否支持FileReader接口-->
    <!--if (typeof FileReader == 'undefined') {-->
        <!--document.getElementById("xmTanDiv").InnerHTML = "<h1>当前浏览器不支持FileReader接口</h1>";-->
        <!--//使选择控件不可操作-->
        <!--document.getElementById("xdaTanFileImg").setAttribute("disabled", "disabled");-->
    <!--}-->

    <!--//选择图片，马上预览-->
    <!--function xmTanUploadImg(obj) {-->
        <!--var file = obj.files[0];-->
        <!--var reader = new FileReader();-->

        <!--reader.onload = function (e) {-->

            <!--var img = document.getElementById("xmTanImg");-->
            <!--img.src = e.target.result;-->
        <!--}-->

        <!--reader.readAsDataURL(file)-->

    <!--}-->

<!--</script>-->


<!--<script>-->

    <!--$("#button").click(function () {-->
        <!--// alert(1111);-->
        <!--var name = $("#name").val();-->
        <!--//获取 图片信息-->
        <!--var file = document.getElementById("xdaTanFileImg").files[0];-->
        <!--var ress = $("#ress").val();-->
        <!--var phone = $("#phone").val();-->
        <!--var password = $('#password').val();-->
        <!--var repassword = $('#repassword').val();-->
        <!--var cet = $('input:radio:checked').val();-->
        <!--var cetval = $("#cetval").val();-->
        <!--var cetvas = $("#cetvas").val();-->

        <!--var formData = new FormData();-->
        <!--formData.append('name', name);-->
        <!--formData.append('file', file);-->
        <!--formData.append('ress', ress);-->
        <!--formData.append('phone', phone);-->
        <!--formData.append('password', password);-->
        <!--formData.append('repassword', repassword);-->
        <!--formData.append('cet', cet);-->
        <!--formData.append('cetval', cetval);-->
        <!--formData.append('cetvas', cetvas);-->
        <!--console.log(formData);-->
        <!--// // alert(name);-->
        <!--// if(name == ''){-->
        <!--//     layer.msg('影楼名不能为空', { icon: 5, time: 900 });-->
        <!--//     return false;-->
        <!--// }-->

        <!--// if(ress == ''){-->
        <!--//     layer.msg('详细地址不能为空', { icon: 5, time: 900 });-->
        <!--//     return false;-->
        <!--// }-->


        <!--// if(phone == ''){-->
        <!--//     layer.msg('手机号不能为空', { icon: 5, time: 900 });-->
        <!--//     return false;-->
        <!--// }-->


        <!--// if(password == ''){-->
        <!--//     layer.msg('密码不能为空', { icon: 5, time: 900 });-->
        <!--//     return false;-->
        <!--// }-->


        <!--// if(repassword == ''){-->
        <!--//     layer.msg('确认密码不能为空', { icon: 5, time: 900 });-->
        <!--//     return false;-->
        <!--// }-->

        <!--// if(cet == 1){-->
        <!--//     if(cetval == ''){-->
        <!--//         layer.msg('使用时间不能为空', { icon: 5, time: 900 });-->
        <!--//         return false;-->
        <!--//     }-->
        <!--// }-->

        <!--// if(cet == 2){-->
        <!--//     if(cetvas == ''){-->
        <!--//         layer.msg('使用次数不能为空', { icon: 5, time: 900 });-->
        <!--//         return false;-->
        <!--//     }-->
        <!--// }-->


        <!--//声明一个对象-->
        <!--// var data = {};-->
        <!--// //获取form下的值-->
        <!--// var t = $('#formData').serializeArray();-->
        <!--// // alert(t);-->
        <!--// //遍历添加到对象中-->
        <!--// $.each(t, function () {-->
        <!--//     data[this.name] = this.value;-->
        <!--// });-->

        <!--// //把对象转换成json-->
        <!--// var datas = JSON.stringify(data);-->
        <!--// // alert(datas);-->
        <!--// console.log(datas);-->

        <!--$.ajax({-->
            <!--url: '/tenant/insert',-->
            <!--type: 'post',-->
            <!--data: formData,-->
            <!--contentType: false,-->
            <!--processData: false,-->
            <!--mimeType: "multipart/form-data",-->
            <!--success: function (data) {-->
                <!--//判断返回结果-->
                <!--if (data.code == 200) {-->

                    <!--layer.msg(data.message, { icon: 6, time: 900 });-->
                    <!--// location.href = '/adminuser/index';-->
                    <!--setTimeout("location.href='/template/index';", 1000);-->

                <!--} else if (data.code == 400) {-->

                    <!--layer.msg(data.message, { icon: 5 });-->

                <!--} else if (data.code == 201) {-->

                    <!--layer.msg(data.message, { icon: 5 });-->
                <!--}-->

            <!--},-->
            <!--error: function (e) {-->
                <!--//    alert(e);-->
                <!--console.log(e);-->
            <!--}-->
        <!--})-->
        <!--// console.log(postData)-->
        <!--//alert(aa);-->
        <!--return false;-->
    <!--})-->
<!--</script>-->

				
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
