<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/szz/public/../application/index/view/index/find.html";i:1554276458;}*/ ?>
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

    #header {
        width: 100%;
        height: 100px;
        background: #416482;
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

    .top_box {
        width:100%;
        position:relative;
        margin-left:100px;
    }

    .ip_num {
        width: 30%;
        height: 300px;
        overflow: hidden;
        float:left;
        margin-right:80px;

    }

    .ip_num h5 {
        width: 100%;
        height: 32px;
        line-height: 32px;
        font-size: 14px;
        text-indent: -10px;
    }

    .ip_num h5 img {
        width: 32px;
        height: 32px;
        float: left;

    }

    .ip_num ul {
        width: 100%;
        height: 240px;
        overflow-x: hidden;
        overflow-y: scroll;
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
     .math_num{
         width:10%;
         height: 300px;
        float:left;
     }

     .math_num h5 {
         width: 100%;
         border:1px solid black;
         height: 32px;
         line-height: 32px;
         font-size: 14px;
         color: grey;
         text-align: center;
     }

     .math_num ul {
         width: 100%;
         height: 270px;

     }

     .math_num ul li {
         width: 100%;
         height: 20px;
         line-height: 20px;
         text-align: center;
         font-size: 12px;
         color: grey;
     }

    #main {
        width:50%;
        position:absolute;
        right:140px;
        top:0;
    }

    .nav_list a {
        color: white;
        text-decoration: none;
    }

    #header .nav_list {
        width: 1000px;
        float: right;
    }

    #header .nav_list li {
        width: 180px;
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
        width:100%;
        height: auto;
        clear: both;
    }

    .left {
        width:15%;
        height:auto;
        float: left;
        margin:50px 30px 0 100px;
    }

    .left input {
        width: 100%;
        height: 50px;
        line-height: 50px;
        text-align: center;
        color: white;
        font-size: 18px;
        background-color: #b28b51;
        margin: 20px 0;
        display: block;
        border: none;
    }

    .right {
        width: 70%;
        height: auto;
        float: left;
        color: #2383A9;
        margin-top: 20px;
        margin-left: 30px;
        font-size: 18px;
        box-shadow: gainsboro 1px 1px 1px 1px;

    }

    .page {
        width: 60%;
        height: auto;
        margin-left: 20px;
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
        <a href="/logs/logout" id=""><i class="icon-signout"></i>安全退出</a>

    </ul>
</div>
<!--内容区-->
<div class="content">
    <!--访问量-->
    <div class="top_box">
        <h4 style="position:absolute;right:48%;">月广告访问量分析</h4>
        <div class="ip_num">
            <h4 style="text-indent:12px;">客户访问流量</h4>
            <br>
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
                <li>
                    <p>13569968395</p>
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
                    <p>13569968395</p>
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
            </ul>
        </div>
        <div class="guest" >
            <h4>客资流量分析</h4>
            <br>
            <ul style="font-size:15px;">
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
        <div class="math_num" id="main">

        </div>
    </div>
    <!--------------------------------------------------->
    <div class="box">
        <div class="left">
            <input type="button" class="seleAll" value="全选　"/>
            <input type="button" class="del" value="删除　"/>
            <input type="button" class="top" value="上一页　"/>
            <input type="button" class="next" value="下一页　"/>

        </div>
        <div class="right">


            <table cellspacing="8" cellpadding="120" style="width:94%;height:auto;text-align:center;">
                <th>选择</th>
                <th>提交时间</th>
                <th>姓名</th>
                <th>联系电话</th>
                <th>微信</th>
                <th>需求类型</th>
                <?php if(is_array($select_user) || $select_user instanceof \think\Collection || $select_user instanceof \think\Paginator): if( count($select_user)==0 ) : echo "" ;else: foreach($select_user as $key=>$vo): ?>
                <tr>
                    <td>
                        <input type="checkbox" name="title" id="<?php echo $vo['id']; ?>">
                    </td>

                    <td><?php echo $vo['datetime']; ?></td>
                    <td><?php echo $vo['name']; ?></td>
                    <td><?php echo $vo['num']; ?></td>
                    <td><?php echo $vo['weixin']; ?></td>
                    <td><?php echo $vo['type']; ?></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>

            </table>

            <div class="page">
                <?php echo $page; ?>
            </div>
        </div>

    </div>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/static/echarts/echarts.min.js"></script>
<script>
    //折线图
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));
    // 指定图表的配置项和数据
    var option = {
        xAxis: {
            type: 'category',
            data: ['一月', '二月', '三月', '四月', '五月', '六月', '七月', '八月', '九月', '十月', '十一月', '十二月']
        },
        yAxis: {
            type: 'value',
            scale: true,
            max: 10000,
            min: 0,
            splitNumber:10,
            boundaryGap: [0.2, 0.2]

        },
        series: [{
            data: [2200, 1320, 4010, 4340, 2900, 3300, 3200, 7000, 8000, 1200, 9000,3600],
            type: 'line'
        }]
    };
    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);


    //全选
    var u = true;
    $(".seleAll").on("click", function () {
        var oin = $("input[type='checkbox']")
        if(u){
            oin.each(function () {
                $(this).prop("checked", true)
            })
            u = false;
        }else{
            oin.each(function () {
                $(this).prop("checked", false)
            })
            u = true;
        }
    })
    // $(".seleAll").on("click", function () {
    //     var oin = $("input[type='checkbox']")
    //     oin.each(function () {
    //         $(this).prop("checked", true)
    //     })
    //
    //
    // })

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
                if (data == 1) {
                    alert('删除成功');
                    location.href = '/index/find';
                }
                if (data == 2) {
                    alert('删除失败')
                }
                //
            },
            error: function (e) {
                // alert(e);
            },
        })


    })

    // //上一页
    // $(".top").on("click", function () {
    //
    //     $.ajax({
    //         url: '/index/delete',
    //         type: 'get',
    //         data: {id: arr},
    //         success: function (data) {
    //             // alert(data);
    //             if (data == 1) {
    //                 alert('删除成功');
    //                 location.href = '/index/find';
    //             }
    //             if (data == 2) {
    //                 alert('删除失败')
    //             }
    //             //
    //         },
    //         error: function (e) {
    //             // alert(e);
    //         },
    //     })
    //
    // })

</script>
</html>