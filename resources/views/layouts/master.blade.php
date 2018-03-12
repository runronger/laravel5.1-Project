<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
{{--<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300,400' rel='stylesheet' type='text/css'>--}}
{{--<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>--}}
<!-- CSS Libs -->
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/checkbox3.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/jquery.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/dataTables.bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/lib/css/select2.min.css')}}">
    <!-- CSS App -->
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/admin/css/themes/flat-green.css')}}">
</head>

<body class="flat-green">
<div class="app-container">
    <div class="row content-container">
        <nav class="navbar navbar-default navbar-fixed-top navbar-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-expand-toggle">
                        <i class="fa fa-bars icon"></i>
                    </button>
                    <ol class="breadcrumb navbar-breadcrumb">
                        <li class="active">首页</li>
                    </ol>
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-th icon"></i>
                    </button>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <button type="button" class="navbar-right-expand-toggle pull-right visible-xs">
                        <i class="fa fa-times icon"></i>
                    </button>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-navicon"></i></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="title">
                                通知 <span class="badge pull-right">0</span>
                            </li>
                            <li class="message">
                                没有信息
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown danger">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false"><i class="fa fa-info-circle"></i> 4</a>
                        <ul class="dropdown-menu danger  animated fadeInDown">
                            <li class="title">
                                通知 <span class="badge pull-right">4</span>
                            </li>
                            <li>
                                <ul class="list-group notifications">
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge">1</span> <i class="fa fa-exclamation-circle icon"></i>
                                            新注册会员
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge success">1</span> <i class="fa fa-check icon"></i>
                                            订单信息
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item">
                                            <span class="badge danger">2</span> <i class="fa fa-comments icon"></i>
                                            客户信息
                                        </li>
                                    </a>
                                    <a href="#">
                                        <li class="list-group-item message">
                                            查看所有
                                        </li>
                                    </a>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown profile">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">用户信息<span
                                    class="caret"></span></a>
                        <ul class="dropdown-menu animated fadeInDown">
                            <li class="profile-img">
                                <img src="{{asset('/admin/images/profile/picjumbo.com_HNCK4153_resize.jpg')}}"
                                     class="profile-img">
                            </li>
                            <li>
                                <div class="profile-info">
                                    <h4 class="username">Emily Hart</h4>
                                    <p>emily_hart@email.com</p>
                                    <div class="btn-group margin-bottom-2x" role="group">
                                        <button type="button" class="btn btn-default"><i class="fa fa-user"></i> 个人中心
                                        </button>
                                        <button type="button" class="btn btn-default"><i class="fa fa-sign-out"></i>
                                            <a href="{{asset('/admin/signOut')}}" >退出</a>
                                        </button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="side-menu ">
            <nav class="navbar navbar-default" role="navigation">
                <div class="side-menu-container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="{{asset('/admin/index')}}">
                            <div class="icon fa fa-paper-plane"></div>
                            <div class="title">后台管理系统</div>
                        </a>
                        <button type="button" class="navbar-expand-toggle pull-right visible-xs">
                            <i class="fa fa-times icon"></i>
                        </button>
                    </div>
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{asset('/admin/index')}}">
                                <span class="icon fa fa-tachometer"></span><span class="title">数据统计</span>
                            </a>
                        </li>
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-element">
                                <span class="icon fa fa-desktop"></span><span class="title">系统设置</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-element" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/setWeb')}}">网站设置</a>
                                        </li>
                                        <li><a href="{{asset('/admin/setWebRoot')}}">站点设置</a>
                                        </li>
                                        <li><a href="{{asset('/admin/setMenu')}}">菜单设置</a>
                                        </li>
                                        <li><a href="{{asset('/admin/setEmail')}}">邮件设置</a>
                                        </li>
                                        <li><a href="{{asset('/admin/backups')}}">数据备份</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-order">
                                <span class="icon fa fa-reorder"></span><span class="title">订单管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-order" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/order')}}">订单列表</a>
                                        </li>
                                        <li><a href="{{asset('/admin/orderConut')}}">数据统计</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-product">
                                <span class="icon fa fa-shopping-cart"></span><span class="title">商品管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-product" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/product')}}">商品列表</a>
                                        </li>
                                        <li><a href="{{asset('/admin/addProduct')}}">商品添加</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-ads">
                                <span class="icon fa fa-buysellads"></span><span class="title">广告管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-ads" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/ad')}}">广告列表</a>
                                        </li>
                                        <li><a href="{{asset('/admin/addAd')}}">广告添加</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>


                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#component-asset">
                                <span class="icon fa fa-folder"></span><span class="title">资源管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="component-asset" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/picture')}}">相册管理</a>
                                        </li>
                                        <li><a href="{{asset('/admin/document')}}">文档管理</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-member">
                                <span class="icon fa fa-users"></span><span class="title">会员管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-member" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/member')}}">会员列表</a>
                                        </li>
                                        <li><a href="{{asset('/admin/addMember')}}">会员添加</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-admin">
                                <span class="icon fa fa-user"></span><span class="title">管理员管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-admin" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/adminList')}}">管理员列表</a>
                                        </li>
                                        <li><a href="{{asset('/admin/addAdmin')}}">管理员添加</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="panel panel-default dropdown">
                            <a data-toggle="collapse" href="#dropdown-auth">
                                <span class="icon fa fa-user-plus"></span><span class="title">权限管理</span>
                            </a>
                            <!-- Dropdown level 1 -->
                            <div id="dropdown-auth" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul class="nav navbar-nav">
                                        <li><a href="{{asset('/admin/auth')}}">角色列表</a>
                                        </li>
                                        <li><a href="{{asset('/admin/addAuth')}}">添加角色</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li>
                            <a href="{{asset('/admin/instruction')}}">
                                <span class="icon fa fa-thumbs-o-up"></span><span class="title">网站说明</span>
                            </a>
                        </li>


                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>
        <!-- Main Content -->
        <div class="container-fluid">
            @if(session('message'))
                <span class="help-block text-center">{{ session('message') }}</span>
            @endif

            @section('content')
                @show
        </div>
    </div>
    @section('foot')
        <footer class="app-footer">
            <div class="wrapper">
                <span class="pull-right"><a href="#">返回顶部<i class="fa fa-long-arrow-up"></i></a></span> © 2018 Copyright.
            </div>
        </footer>
        @show
    <div>
        <!-- Javascript Libs -->
        <script type="text/javascript" src="{{asset('/lib/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/Chart.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/bootstrap-switch.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/jquery.matchHeight-min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/select2.full.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/ace/ace.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/ace/mode-html.js')}}"></script>
        <script type="text/javascript" src="{{asset('/lib/js/ace/theme-github.js')}}"></script>
        <!-- Javascript -->
        <script type="text/javascript" src="{{asset('/admin/js/app.js')}}"></script>
        <script type="text/javascript" src="{{asset('/admin/js/index.js')}}"></script>
    </div>
</div>
</body>
</html>