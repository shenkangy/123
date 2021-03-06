<!DOCTYPE html>
<html lang="en">
	<head>
	<title>登陆页面</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen" /> 
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>   
    
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();}	
	
	jQuery(".list-blog li:last-child").addClass("last"); 
	jQuery(".list li:last-child").addClass("last"); 
  		  }); 
					
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link rel="stylesheet" href="css/docs.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
<!--  header  -->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li><a href="index">首页</a></li>
                <li class="sub-menu"><a href="process">设计案例</a>
                   <ul>
                    <li><a href="#">一层别野</a></li>
                    <li><a href="#">二层别野</a></li>
                    <li><a href="#">三层别野</a></li>
                  </ul>
                </li>
                <li><a href="work">图片欣赏</a></li>
                <li><a href="blog">论坛</a></li> 
                <li><a href="register">注册</a></li> 
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
  <h1 class="brand brand_" style="position:absolute; top:0; left:0;"><a href="index"><img alt="" src="img/logo.png"> </a></h1>
    </header>
<div class="bg-content">       
  <!--  content  -->      
   <div id="content"><div class="ic"></div>
    <div class="container">
          <div class="row">
          <article class="span12">
                        <h4 style="font-size:14px">当前位置：<a href="index">首页</a>>登陆</h4>
                    </article>
    <div style="height:438px;">
       <div>
        <form action="login" method="post">
         <table align="center">
           <tr>
             <td style="font-size:20px;color:#FFF;">用户名:</td>
             <td><input type="text" name="user_name"></td>
           </tr>
           <tr>
             <td style="font-size:20px;color:#FFF;">密码:</td>
             <td><input type="password" name="password"></td>
           </tr>         
           <tr>
             <td style="font-size:20px;color:#FFF;">验证码:</td>
             <td><input type="text"></td>
           </tr>
           <tr>
             <td><input type="submit" value="登陆" class="btn btn-lg btn-success"></td>
             <td><input type="button" value="忘记密码" class="btn btn-sm btn-warning"></td>
           </tr>
           <tr>
             <td></td>
             <td></td>
           </tr>
         </table>
         </form>
       </div>
       </div> 
      </div>
     </div>
  </div>
 </div>


<!--  footer  -->
<footer>
      <div class="container clearfix">
       <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">&copy; Copyright &copy; 2014.Company lookbs All rights reserved. &nbsp;&nbsp;技术支持：&nbsp;&nbsp;邮箱：1055198140@qq.com</div>
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
<div style="display:none"></div>
</body>
</html>