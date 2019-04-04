<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"D:\phpstudy\PHPTutorial\WWW\wg\public/../application/admin\view\tenant\pass.html";i:1552876572;}*/ ?>
<div class="panel panel-default">
    <div class="panel-bd">
        <div class="panel panel-primary">
            <div class="panel-hd"></div>
            <div class="panel-bd">
                <div class="page-wrap">
                    <section class="page-hd">
                        <header>
                            <h2 class="title">修改商户密码</h2>
                        </header>
                        <hr>
                    </section>

                    <form id="formData">
                        <div class="form-group-col-2">
                            <div class="form-label">新密码：</div>
                            <div class="form-cont">
                                <input type="password" placeholder="密码" class="form-control form-boxed" name="password" id="pas">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label">确认新密码：</div>
                            <div class="form-cont">
                                <input type="password" placeholder="确认密码" class="form-control form-boxed"
                                    name="repassword" id="pass">
                                <span class="span"></span>
                            </div>
                        </div>
                        <div class="form-group-col-2">
                            <div class="form-label"></div>
                            <div class="form-cont">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
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
        var phone = $("#pas").val();
        //email
        var email = $("#pass").val();
        // alert(name);

        if (phone == '') {
            layer.msg('新密码不能为空', { icon: 5 });
            return false;
        }

        if (email == '') {
            layer.msg('确认密码不能为空', { icon: 5 });
            return false;
        }


        //声明一个对象
        var data = {};
        //获取form下的值
        var t = $('#formData').serializeArray();
        // console.log(t);
        //遍历添加到对象中
        $.each(t, function () {
            data[this.name] = this.value;
        });

        // //把对象转换成json
        var datas = JSON.stringify(data);

        // console.log(datas);


        $.ajax({
            url: '/teds/update',
            type: 'post',
            data: { data: datas },
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


        return false;

    })
</script>