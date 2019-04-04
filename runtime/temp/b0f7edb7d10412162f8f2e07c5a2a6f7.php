<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"/www/wwwroot/szz/public/../application/admin/view/tenant/cet.html";i:1552876572;}*/ ?>
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <div class="page-wrap">
                    <section class="page-hd">
                        <header>
                            <h2 class="title"><?php echo $name; ?></h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData">
                        <div class="form-group-col-2">
                            <div class="form-label">服务类型:<?php echo $cet==1?'包年':'VIP'; ?></div>
                            <div class="form-cont">
                                <span></span>
                                <input type="text" placeholder="" class="form-control form-boxed" name="cetvalue"  id="cetvalue">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label"></div>
                            <div class="form-cont">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="cet" value="<?php echo $cet; ?>">
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
<script>
    $("#submit").click(function () {
        //phone
        //获取续费信息
        var cetvalue = $("#cetvalue").val();
        var id = $("input:hidden[name='id']").val();
        var cet = $("input:hidden[name='cet']").val();

        //判断
        if (cetvalue == '') {
            layer.msg('请填入续费信息', { icon: 5 });
            return false;
        }

        // console.log(formData);
        //确认信息
        layer.confirm('商户信息是否准确', ['删除', '取消'], function () {
        $.ajax({
            url: '/teds/xfei',
            type: 'post',
            data: {id:id,cet:cet,cetvalue:cetvalue},
            success: function (data) {
                //console.log(data.msg);

                if (data.code == 200) {
                    layer.msg(data.msg, { icon: 6, time: 900 });
                    // location.href = '/adminuser/index';
                    setTimeout("location.href='/tenant/index';", 1000);
                }

                if (data.code == 400) {
                    layer.msg(data.msg, { icon: 5 });
                }

                if (data.code == 201) {
                    layer.msg(data.msg, { icon: 5 });
                }
            },
            error: function (e) {
                alert(e);
            }
        })

    })
        return false;

    })

</script>