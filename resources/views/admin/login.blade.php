<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>登录系统</title>
    <meta name="keywords" content="企业后台管理,后台管理框架,后台框架模板,java,spring,spring-boot"/>
    <meta name="description" content="登录描述"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('/admin/css/login.css')}}" rel='stylesheet' type='text/css'/>
    <script src="{{asset('/lib/jquery/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('/lib/layer/layer.js')}}"></script>
    <script src="{{asset('/lib/bootstrap/js/bootstrap.min.js')}}"></script>
</head>
<body>
<div class="login">
    <div class="login-body">
        <div class="login-content">
            <div class="login-top"><span>Affilate Program</span></div>
            <div class="form-group">
                <label for="">管理员账号:</label>
                <input type="text" name="username" class="text">
            </div>
            <div class="form-group">
                <label for="">管理员密码:</label>
                <input type="password" name="password" class="pwd">
            </div>
        </div>
        <div class="login-submit">
            <button type="submit" onclick="return check()">立即登录</button>
        </div>
        <div class="login-footer">
            ©2017-2022 Ezpopsy,lnc all rights reserved
        </div>
    </div>
</div>
</body>
</html>
<script type="text/javascript">

    $(function () {
        $(".text").keydown(function (event) {
            if (event.keyCode == 13) {
                $(".pwd").focus();
            }
        });
        $(".pwd").keydown(function (event) {
            if (event.keyCode == 13) {
                check();
            }
        });
    });

    function check() {
        var userName = $(".text").val();
        var passwd = $(".pwd").val();
        if (userName == '') {
            layer.msg('用户名不能为空！', {
                icon: 2,
                time: 2000
            });
            $(".text").focus();
            return false;
        }
        if (passwd == '') {
            layer.msg('密码不能为空！', {
                icon: 2,
                time: 2000
            });
            $(".pwd").focus();
            return false;
        }
        $.ajax({
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: "{{url('/admin/doLogin')}}",
            data: {'_token':'{{csrf_token()}}',userName: userName, loginPwd: passwd},
            type: 'POST',
            dataType: 'json',
            success: function (e) {
                if (e.status == 1) {
                    layer.msg(e.msg, {
                        icon: 2,
                        time: 2000
                    });
                    $(".text").focus();
                }
                if (e.status == 2) {
                    layer.msg(e.msg, {
                        icon: 2,
                        time: 2000
                    });
                    $(".pwd").focus();
                }
                if (e.status == 3) {
                    layer.msg(e.msg, {
                        icon: 1,
                        time: 2000
                    });
                    window.location.href = '{{url('/admin/index')}}';
                }
            },
            error: function (e) {
                layer.msg(e.msg);
            }
        });
    }
</script>