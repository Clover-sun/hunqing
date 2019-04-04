<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\wamp64\www\moban\public/../application/admin\view\edit\index.html";i:1553046707;}*/ ?>
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <div class="page-wrap">
                    <section class="page-hd">
                        <header>
                            <h2 class="title">选择分类</h2>
                        </header>
                        <hr>
                    </section>
                    <div class="form-group-col-2">
                        <div class="form-label">模板分类:</div>
                        <form action="/edit/add" method="get">
                            <div class="form-cont">
                                <select style="width:auto;" name="fid" id="fid">
                                    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): if( count($cate)==0 ) : echo "" ;else: foreach($cate as $key=>$vo): ?>

                                    <option value="<?php echo $vo['id']; ?>"><?php echo $vo['cate']; ?></option>

                                    <?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                                <input type="hidden" id="sid" name="sid" value="<?php echo $sid; ?>">
                                <button class="btn btn-primary add">提交</button>
                            </div>
                        </form>
                    </div>


                </div>

            </div>
        </div>
    </div>
</div>
<script>
    // //添加商户
    // $('.add').click(function () {
    //     var sid = $("#sid").val();
    //     var fid = $("#fid").val();
    //
    //     $.ajax({
    //             url: '/edit/add',
    //             type: 'get',
    //             data: {sid: sid, fid: fid},
    //             success: function (data) {
    //
    //                 alert(data)
    //             },
    //             error: function (e) {
    //                 alert(e);
    //             },
    //         })
    // });
</script>




