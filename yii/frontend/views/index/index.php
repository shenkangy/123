<?php 
use yii\web\Session;
 $session = yii::$app->session;
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>爱屋及屋(后台管理)</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">

                <li><a href="?r=index/index">爱屋及屋后台管理</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href=""></a><?php echo $dataList['links'] ?></li>
                <li><a href="<?php echo $link ?>" target="_blank">www.aiwujiwu.admin.com<?php echo $link ?></a></li>
                <li><a href="#"><?php echo $session->get('admin_name')?></a></li>
                <li><a href="index.php?r=index/out">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            系统操作
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                 <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>房屋管理</a>
                    <ul class="sub-menu"> 
                        <li><a href="?r=index/house"><i class="icon-font">&#xe012;</i>房屋信息</a></li>
                    </ul>
                    <ul class="sub-menu"> 
                        <li><a href="?r=index/houseadd"><i class="icon-font">&#xe012;</i>房屋添加</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>客户管理</a>
                    <ul class="sub-menu">
                        <li><a href="?r=index/user"><i class="icon-font">&#xe017;</i>客户信息</a></li>
                    </ul>
                </li>
                 <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>日志管理</a>
                    <ul class="sub-menu"> 
                        <li><a href="index.php?r=index/log"><i class="icon-font">&#xe012;</i>日志查看</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>管理员管理</a>
                    <ul class="sub-menu">
                        <li><a href="index.php?r=index/show_admin"><i class="icon-font">&#xe017;</i>管理员信息</a></li>
                        <li><a href="index.php?r=index/update_admin"><i class="icon-font">&#xe017;</i>权限管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入<font color="red">爱屋及屋</font>招租网</span></div>
        </div>
        
        <div class="result-wrap">
            
            <div class="result-content">	
                <ul class="sys-info-list">
                <li></li> 
                   <li></li>
                </ul>
            </div>
        </div>
 <div class="result-wrap">
            <div class="result-title">
                <h1>使用帮助</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">官方交流网站：</label><span class="res-info"><a href="http://www.aiwujiwu.com/" target="_blank">爱屋及屋首页</a></span>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div>
    <!--/main-->
</div>
</body>
</html>