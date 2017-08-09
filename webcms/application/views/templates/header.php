<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title.'-不见不散后台管理'; ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="<?php echo base_url('static/css/bootstrap/bootstrap.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/font-awesome.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/ionicons.min.css');  ?>" rel="stylesheet">
    <!-- Theme style -->
    <link href="<?php echo base_url('static/css/AdminLTE.min.css');  ?>" rel="stylesheet">
    <link href="<?php echo base_url('static/css/skins/skin-default.css');  ?>" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url('static/js/plugins/html5shiv.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/js/plugins/respond.min.js'); ?>"></script>
    <![endif]-->

    <script src="<?php echo base_url('static/js/plugins/jquery-2.2.3.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/js/bootstrap/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo base_url('static/js/fn.js'); ?>"></script>

</head>
<body class="hold-transition skin-default sidebar-mini ">
<div class="wrapper">

<header class="main-header">
<!-- Logo -->
<a href="#" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <!--<span class="logo-mini"><b>A</b>LT</span>-->
    <!-- logo for regular state and mobile devices -->
    <!--<span class="logo-lg"><b>Admin</b>LTE</span>-->
    <span>See Me Here</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
    <span class="sr-only">Toggle navigation</span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
    <span class="icon-bar"></span>
</a>

<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope-o"></i>
        <span class="label label-success">4</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">你有<strong>4</strong>条新信息</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li><!-- start message -->
                    <a href="#">
                        <div class="pull-left">
                            <img src="<?php echo base_url();  ?>static/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            产品修改
                            <small><i class="fa fa-clock-o"></i> 5 分钟前</small>
                        </h4>
                        <p>MIFA M1 软件修改</p>
                    </a>
                </li>
                <!-- end message -->
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="<?php echo base_url();  ?>static/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            费用报销
                            <small><i class="fa fa-clock-o"></i> 2 小时前</small>
                        </h4>
                        <p>请核对，金额是否正确?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="<?php echo base_url();  ?>static/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            考勤打卡
                            <small><i class="fa fa-clock-o"></i> 今天</small>
                        </h4>
                        <p>18号中午下班未打卡</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="<?php echo base_url();  ?>static/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            市场推广
                            <small><i class="fa fa-clock-o"></i> 昨天</small>
                        </h4>
                        <p>SK520活动问题?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="<?php echo base_url();  ?>static/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                        </div>
                        <h4>
                            产品上市
                            <small><i class="fa fa-clock-o"></i> 2 天前</small>
                        </h4>
                        <p>进程日程安排?</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="footer"><a href="#">查看全部</a></li>
    </ul>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-bell-o"></i>
        <span class="label label-warning">10</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">你有 <strong>10</strong>条新通知</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li>
                    <a href="#">
                        <i class="fa fa-users text-aqua"></i> 5个新同事加入
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-warning text-yellow"></i> 8个产品上市
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-users text-red"></i> 9条新闻报道
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-shopping-cart text-green"></i> 你修改了密码
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user text-red"></i> 你修改了资料
                    </a>
                </li>
            </ul>
        </li>
        <li class="footer"><a href="#">查看全部</a></li>
    </ul>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-flag-o"></i>
        <span class="label label-danger">9</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">你有 <strong>9</strong>条新任务</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            M1产品进度
                            <small class="pull-right">60%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 60%" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">60% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            审批审核
                            <small class="pull-right">40%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">40% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            物料采购
                            <small class="pull-right">30%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 30%" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">30% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                    <a href="#">
                        <h3>
                            产品包装
                            <small class="pull-right">80%</small>
                        </h3>
                        <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                <span class="sr-only">80% Complete</span>
                            </div>
                        </div>
                    </a>
                </li>
                <!-- end task item -->
            </ul>
        </li>
        <li class="footer">
            <a href="#">查看全部</a>
        </li>
    </ul>
</li>
<!-- User Account: style can be found in dropdown.less -->
<li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <img src="<?php echo base_url();  ?>static/img/user2-160x160.jpg" class="user-image" alt="User Image">
        <span class="hidden-xs">Benson Tung</span>
    </a>
    <ul class="dropdown-menu">
        <!-- User image -->
        <li class="user-header">
            <img src="<?php echo base_url();  ?>static/img/user2-160x160.jpg" class="img-circle" alt="User Image">

            <p>
                Benson Tung - 网页开发
                <small>Member since Nov. 2012</small>
            </p>
        </li>
        <!-- Menu Body -->
        <!--<li class="user-body">-->
        <!--<div class="row">-->
        <!--<div class="col-xs-4 text-center">-->
        <!--<a href="#">Followers</a>-->
        <!--</div>-->
        <!--<div class="col-xs-4 text-center">-->
        <!--<a href="#">Sales</a>-->
        <!--</div>-->
        <!--<div class="col-xs-4 text-center">-->
        <!--<a href="#">Friends</a>-->
        <!--</div>-->
        <!--</div>-->
        <!--&lt;!&ndash; /.row &ndash;&gt;-->
        <!--</li>-->
        <!-- Menu Footer-->
        <li class="user-footer">
            <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">个人资料</a>
            </div>
            <div class="pull-right">
                <a href="<?php echo base_url('/login/logout'); ?>" class="btn btn-default btn-flat">退出登录</a>
            </div>
        </li>
    </ul>
</li>

</ul>
</div>
</nav>
</header>
