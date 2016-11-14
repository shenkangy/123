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
                <li><a href="#"><?php echo $session->get('name')?></a></li>
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
 <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.php?r=index/index">首页</a><span class="crumb-step">&gt;</span>房屋添加<span class="crumb-step"></span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="index.php?r=index/teach_add" method="post">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                        </tr>
                            <tr>
                                <th><i class="require-red"></i>房屋地址</th>
                                <td>
                                    <input class="common-text required"name="teacher_name" size="50" value="" type="text">
                                </td>
                            </tr>
                             <tr>
                                <th>房屋描述</th>
                                <td><input type="radio"  name="teacher_sex" value="男">&nbsp;&nbsp;男 &nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="teacher_sex" value="女">&nbsp;&nbsp;女
                                </td>
                            </tr>
                             <tr>
                                <th>电话：</th>
                                <td><input class="common-text" name="teacher_phone" size="50"  type="text"></td>
                            </tr>
                              </tr>
                             <tr>
                                <th>学院：</th>
                                <td><select name="collage_id" id="">
                                    <option value="1">软工</option>
                                    <option value="2">传媒</option>
                                    <option value="3">云计算</option>
                                    <option value="4">移动通信</option>
                                    <option value="5">游戏</option>
                                    <option value="6">建筑</option>
                                    <option value="6">高翻</option>
                                    <option value="6">国际经贸</option>
                                </select></td>
                            </tr>
                              <tr>
                                <th>职位：</th>
                                <td><select name="post_id" id="">
                                    <option value="1">院长</option>
                                    <option value="2">主任</option>
                                    <option value="3">讲师</option>
                                    <option value="4">班主任</option>
                                </select></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>