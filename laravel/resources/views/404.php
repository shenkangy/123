﻿<!DOCTYPE html>
<html lang="en">
<head>
    <title>响应式设计别墅网站模板</title>
    <meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" media="screen" /> 
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
		
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.cookie.js"></script>	
	<script>		
   jQuery(window).load(function() {	
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
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
<div class="spinner"></div>
<!--  header  -->
<header>
  <div class="container clearfix">
    <div class="row">
          <div class="span12">
        <div class="navbar navbar_">
              <div class="container">
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li><a href="index.html">首页</a></li>
                <li class="sub-menu"><a href="process.html">设计案例</a>
                   <ul>
                    <li><a href="#">一层别野</a></li>
                    <li><a href="#">二层别野</a></li>
                    <li><a href="#">三层别野</a></li>
                  </ul>
                </li>
                <li><a href="work.html">图片欣赏</a></li>
                <li><a href="blog.html">论坛</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
  <h1 class="brand brand_" style="position:absolute; top:0; left:0;"><a href="index.html"><img alt="" src="img/logo.png"> </a></h1>
    </header>
<div class="bg-content">  

<!--  content  -->

<div id="content"> 
  <div class="container">
    <div class="row ">
    
<div class="span12">
<div class="block-404">  
      <img class="img-404" src="img/404.jpg" alt="">       
    	<div class="box-404">
        	<h2>Oopss!</h2>
<h3>404 page not found</h3>        	
           
            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil doming id quod mazim placerat facer possim assum orem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy euismod.</p>
           
        	<form id="form-search" action="search.php" method="GET" accept-charset="utf-8" >
            	<div class="clearfix">
                    <input type="text" name="s" onBlur="if(this.value=='') this.value=''" onFocus="if(this.value =='' ) this.value=''" >
                    <a href="#" onClick="document.getElementById('form-search').submit()" class="btn btn-1 ">Search</a>
                </div>
            </form>
		</div>
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