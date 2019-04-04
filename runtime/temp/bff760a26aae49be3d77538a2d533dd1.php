<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:94:"D:\wamp64\www\mb\wedding_platform\admin\moban\public/../application/index\view\index\find.html";i:1553846938;}*/ ?>
<!doctype html>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>客源查询</title>
<link rel="stylesheet" href="/static/index/css/public.css">
<style>
    * {
        margin: 0;
        padding: 0;
    }

    a {
        text-decoration: none;
    }

    li {
        list-style: none;
    }

    body {
        background: #EBEBEB;

    }

    .content {
        width: 95%;
        height: auto;
        margin: 2.5%;
        color: #49505B;

    }

    .ip_num {
        width: 35%;
        height: 300px;
        float: left;
        /*background: red;*/
    }

    .ip_num h5 {
        width: 100%;
        height: 32px;
        line-height: 32px;
        font-size: 14px;
        color: grey;
    }

    .ip_num h5 img {
        width: 32px;
        height: 32px;
        float: left;

    }

    .ip_num ul {
        width: 100%;
        height: 168px;
        overflow: scroll;
    }

    .ip_num ul li {
        float: left;
        width: 100%;
        height: 15px;
        font-size: 12px;
        line-height: 15px;
        margin-top: 10px;
    }

    .ip_num ul li p {
        width: 20%;
        height: 100%;
        float: left;
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        text-align: center;
    }

    /*月度排行*/
    .math_num {
        width: 15%;
        height: 300px;
        /*overflow: scroll;*/
        /*background: red;*/
        float: left;
    }

    .math_num h5 {
        width: 100%;
        height: 32px;
        line-height: 32px;
        font-size: 14px;
        color: grey;
        text-align: center;
    }

    .math_num ul {
        width: 100%;
        height: 270px;
        overflow: hidden;

    }

    .math_num ul li {
        width: 100%;
        height: 20px;
        line-height: 20px;
        text-align: center;
        font-size: 12px;
        color: red;
    }

    #header .nav_list li {
        width: 20%;
        height: 100%;
        text-align: center;
        float: left;
        color: white;
    }

    #header .nav_list li p {
        height: 60px;
        line-height: 80px;
    }

    #header .nav_list li span {
        height: 30px;
        line-height: 20px;
    }

    /*-------------------   */
    .box {
        width: 100%;
        height: auto;
        clear: both;
    }

    .left {
        width: 20%;
        height: auto;
        float: left;
    }

    .left input {
        width: 100%;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: white;
        font-size: 16px;
        background-color: #b28b51;
        margin: 20px 0;
        display: block;
        border: none;
    }
    .page{


    }
    .right {
        width: 70%;
        height: auto;
        float: left;
        color: #2383A9;
        margin-top: 20px;
        box-shadow: gainsboro 1px 1px 1px 1px;

    }

    .right ul li div {
        margin-left: 0px;
        font-weight: 900;
    }

    .right ul li div span {
        margin: 10px 60px;
    }

    .right ul li p {
        margin-left: 60px;

    }

    .right ul li p span {
        display: inline-block;
        margin: 10px 60px;
    }


</style>
</head>

<body>
<!--头部导航栏-->
<div id="header">
    <div class="logo"><img src="<?php echo $logo; ?>" alt="logo"></div>
    <ul class="nav_list">
        <li><a href="/index/index"><p>首页</p><span>HOME</span></a></li>
        <li><a href="/index/video"><p>婚礼视频</p><span>VIDEO</span></a></li>
        <li><a href="/index/find"><p>客源查询</p><span>QUERY</span></a></li>
        <li><a href="/index/ad"><p>广告管理</p><span>Administration</span></a></li>
        <li><a href="/index/custom"><p>客服帮助</p><span>Help</span></a></li>
    </ul>
</div>
<!--内容区-->
<div class="content">
    <!--访问量-->
    <div class="ip_num">
        <h5><img src="img/tongzhi.png" alt="">客户访问流量</h5>
        <ul>
            <li>
                <p>135699683395</p>
                <p>鹿晗</p>
                <p>成功提交</p>
                <p>访问33</p>
                <p>2019-1-11</p>
            </li>
            <li>
                <p>13569968395</p>
                <p>鹿晗</p>
                <p>成功提交</p>
                <p>访问33</p>
                <p>2019-1-11</p>
            </li>
            <li>
                <p>135699683395</p>
                <p>鹿晗</p>
                <p>成功提交</p>
                <p>访问33</p>
                <p>2019-1-11</p>
            </li>
            <li>
                <p>13569968395</p>
                <p>鹿晗</p>
                <p>成功提交</p>
                <p>访问33</p>
                <p>2019-1-11</p>
            </li>
            <li>
                <p>135699683395</p>
                <p>鹿晗</p>
                <p>成功提交</p>
                <p>访问33</p>
                <p>2019-1-11</p>
            </li>
            <li>
                <p>13569968395</p>
                <p>鹿晗</p>
                <p>成功提交</p>
                <p>访问33</p>
                <p>2019-1-11</p>
            </li>

        </ul>
    </div>
    <div class="math_num">
        <h5>月广告访问量分析</h5>
        <ul>
            <li>
                <p>一月：<span>300</span></p>
            </li>
            <li>
                <p>二月：<span>355</span></p>
            </li>
            <li>
                <p>三月：<span>450</span></p>
            </li>
            <li>
                <p>四月：<span>300</span></p>
            </li>
            <li>
                <p>五月：<span>355</span></p>
            </li>
            <li>
                <p>六月：<span>450</span></p>
            </li>
            <li>
                <p>七月：<span>300</span></p>
            </li>
            <li>
                <p>八月：<span>355</span></p>
            </li>
            <li>
                <p>九月：<span>450</span></p>
            </li>
            <li>
                <p>十月：<span>300</span></p>
            </li>
            <li>十一月：<span>355</span></p>
            </li>
            <li>
                <p>十二月：<span>450</span></p>
            </li>

        </ul>
    </div>

    <!--------------------------------------------------->
    <div class="box">
        <div class="left">
            <input type="button" class="seleAll" value="全选　"/>
            <input type="button" class="del" value="删除　"/>

            <!--<input type="button" class="" value="上一页"/>-->
            <!--<input type="button" class="" value="下一页"/>-->
            <div class="page">
                <?php echo $page; ?>
            </div>

        </div>
        <div class="right">

            <ul>
                <li>
                    <div>
                        <span>选择</span>
                        <span>提交时间</span>
                        <span>姓名</span>
                        <span>联系电话</span>
                    </div>
                    <?php if(is_array($select_user) || $select_user instanceof \think\Collection || $select_user instanceof \think\Paginator): if( count($select_user)==0 ) : echo "" ;else: foreach($select_user as $key=>$vo): ?>
                    <p>
                        <input type="checkbox" name="title" id="<?php echo $vo['id']; ?>" >
                        <span><?php echo $vo['datetime']; ?></span>
                        <span><?php echo $vo['name']; ?></span>
                        <span><?php echo $vo['num']; ?></span>
                    </p>
                    <?php endforeach; endif; else: echo "" ;endif; ?>

                </li>

            </ul>
        </div>

    </div>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
    //全选
    $(".seleAll").on("click", function () {
        var oin = $("input[type='checkbox']")
        oin.each(function () {
            $(this).prop("checked", true)
        })


    })

    // 批量删除

    $(".del").on("click", function () {
        var arr = new Array();
        var items = document.getElementsByName("title");
        for (i = 0; i < items.length; i++) {
            if (items[i].checked) {
                arr.push(items[i].id);
            }
        }
        console.log(arr);

        // if (sele.length > 0) {
        //     sele.each(function () {
        //         $(this).parent().remove()
        //     })
        //
        // } else {
        //     alert("至少选一个数据")
        // }
        $.ajax({
            url: '/index/delete',
            type: 'get',
            data: {id: arr},
            success: function (data) {
                // alert(data);
                if (data==1){
                    alert('删除成功');
                    location.href = '/index/find';
                }
                if (data==2){
                    alert('删除失败')
                }
                //
            },
            error: function (e) {
                // alert(e);
            },
        })


    })

</script>
</html>