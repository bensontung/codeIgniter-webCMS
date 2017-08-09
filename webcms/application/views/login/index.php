<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>后台管理</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo base_url('static/css/bootstrap/bootstrap.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/font-awesome.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/ionicons.min.css');  ?>" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url('static/css/AdminLTE.min.css');  ?>" rel="stylesheet">

    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('static/plugins/iCheck/square/blue.css');  ?>">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('static/js/plugins/html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/js/plugins/respond.min.js'); ?>"></script>
    <![endif]-->
    <style>

    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="#">后台管理</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg text-danger"><?php echo $errorTips;?></p>

        <form action="" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="账号" name="loginName">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="密码" name="loginPass">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> 记住账号
                        </label>
                    </div>



                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">登陆</button>
                </div>
                <!-- /.col -->
            </div>
        </form>



        <a href="#">忘记密码?</a><br>


    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo base_url('static/js/plugins/jquery-2.2.3.min.js'); ?>"></script>
<script src="<?php echo base_url('static/js/bootstrap/bootstrap.min.js'); ?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('static/plugins/iCheck/icheck.min.js'); ?>"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>

