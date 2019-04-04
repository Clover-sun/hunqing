<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:93:"D:\wamp64\www\mb\wedding_platform\admin\moban\public/../application/apps\view\index\show.html";i:1553822859;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>选择模板</title>
    <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=0">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link rel="stylesheet" href="/static/moban/css/choose_template.css">
</head>
<body>
<form method="post" action="/apps/show?id=<?php echo $sid; ?>">
    <div class="wrap">
        <div class="tabs">
            <?php foreach($type as $vo): ?>
            <a href="#" hidefocus="true" class="active"><?php echo $vo; ?></a>
            <?php endforeach; ?>
        </div>
        <?php if(is_array($template) || $template instanceof \think\Collection || $template instanceof \think\Paginator): if( count($template)==0 ) : echo "" ;else: foreach($template as $key=>$row): ?>
        <div class="swiper-container">

            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="content-slide">
                        <ul>
                            <?php if(is_array($row['template']) || $row['template'] instanceof \think\Collection || $row['template'] instanceof \think\Paginator): if( count($row['template'])==0 ) : echo "" ;else: foreach($row['template'] as $key=>$so): ?>
                            <a href="/apps/see?id=<?php echo $so['id']; ?>" target="_blank">
                                <li class="kids_list">
                                    <img src="<?php echo $so['img']; ?>" alt="">
                                    <p><?php echo $so['name']; ?></p>

                                    <!--<button>查看</button>-->

                                </li>
                            </a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content-slide">

                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
</form>
</body>
<script src="/static/moban/js/jquery-1.10.1.min.js"></script>
<script src="http://www.lanrenzhijia.com/ajaxjs/idangerous.swiper.min.js"></script>
<script>
    var tabsSwiper = new Swiper('.swiper-container', {
        speed: 500,
        onSlideChangeStart: function () {
            $(".tabs .active").removeClass('active');
            $(".tabs a").eq(tabsSwiper.activeIndex).addClass('active');
        }
    });

    $(".tabs a").on('touchstart mousedown', function (e) {
        e.preventDefault()
        $(".tabs .active").removeClass('active');
        $(this).addClass('active');
        tabsSwiper.swipeTo($(this).index());
    });

    $(".tabs a").click(function (e) {
        e.preventDefault();
    });
</script>
</html>