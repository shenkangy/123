<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Bootstrap表单组件 - Bootstrap后台管理系统模版Ace下载</title>
    <meta name="keywords" content="Bootstrap模版,Bootstrap模版下载,Bootstrap教程,Bootstrap中文" />
    <meta name="description" content="站长素材提供Bootstrap模版,Bootstrap教程,Bootstrap中文翻译等相关Bootstrap插件下载" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
    <link rel="stylesheet" href="assets/css/chosen.css" />
    <link rel="stylesheet" href="assets/css/datepicker.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="assets/css/daterangepicker.css" />
    <link rel="stylesheet" href="assets/css/colorpicker.css" />

    <!-- fonts -->

    <link rel="stylesheet" href="" />

    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<?php include('head.php');?>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->
            <?php include('left.php');?>
            <!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="#">Home</a>
                    </li>

                    <li>
                        <a href="#">Forms</a>
                    </li>
                    <li class="active">Form Elements</li>
                </ul><!-- .breadcrumb -->

                <div class="nav-search" id="nav-search">
                    <form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
                    </form>
                </div><!-- #nav-search -->
            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>
                        添加
                    </h1>
                </div><!-- /.page-header -->

                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <form class="form-horizontal" role="form" >
                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"  for="form-field-1">管理员姓名</label>

                                <div class="col-sm-9">
                                    <input type="text" id="form-field-1" placeholder="Username" class='admin_name' class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> 密码 </label>

                                <div class="col-sm-9">
                                    <input type="password" id="form-field-2" placeholder="Password" class='admin_pwd' class="col-xs-10 col-sm-5" />
                                </div>
                            </div>

                            <div class="space-4"></div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label no-padding-right" class="time()" for="form-input-readonly"> 添加时间 </label>

                                <div class="col-sm-9">
                                    <input  type="text" class="col-xs-10 col-sm-5" class='reg_time' id="form-input-readonly"  />

                                </div>
                            </div>

                            <div class="space-4"></div>


                                        

                                    </div>



                                </div>

                                <div class="space-4"></div>



                                <div class="clearfix form-actions">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button class="btn btn-info" id="btn" type="button">
                                            <i class="icon-ok bigger-110"></i>
                                            添加
                                        </button>

                                        &nbsp; &nbsp; &nbsp;
                                        <button class="btn" type="reset">
                                            <i class="icon-undo bigger-110"></i>
                                            重置
                                        </button>
                                    </div>
                                </div>
                        
                        
                                <div class="hr hr-24"></div>

                                <!-- /.main-container -->

                                <!-- basic scripts -->

                                <!--[if !IE]> -->

                                <script src="assets/js/jquery-2.0.3.min.js"></script>

                                <!-- <![endif]-->

                                <!--[if IE]>
                                <script src="assets/js/jquery-2.0.3.min.js"></script>
                                <![endif]-->

                                <!--[if !IE]> -->

                                <script type="text/javascript">
                                    window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
                                </script>

                                <!-- <![endif]-->

                                <!--[if IE]>
                                <script type="text/javascript">
                                    window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
                                </script>
                                <![endif]-->

                              33
                                <script src="assets/js/bootstrap.min.js"></script>
                                <script src="assets/js/typeahead-bs2.min.js"></script>

                                <!-- page specific plugin scripts -->

                                <!--[if lte IE 8]>
                                <script src="assets/js/excanvas.min.js"></script>
                                <![endif]-->

                                <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
                                <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
                                <script src="assets/js/chosen.jquery.min.js"></script>
                                <script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
                                <script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
                                <script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
                                <script src="assets/js/date-time/moment.min.js"></script>
                                <script src="assets/js/date-time/daterangepicker.min.js"></script>
                                <script src="assets/js/bootstrap-colorpicker.min.js"></script>
                                <script src="assets/js/jquery.knob.min.js"></script>
                                <script src="assets/js/jquery.autosize.min.js"></script>
                                <script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
                                <script src="assets/js/jquery.maskedinput.min.js"></script>
                                <script src="assets/js/bootstrap-tag.min.js"></script>

                                <!-- ace scripts -->

                                <script src="assets/js/ace-elements.min.js"></script>
                                <script src="assets/js/ace.min.js"></script>

                                <!-- inline scripts related to this page -->

                              <!-- <div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div> -->
</body>
</html>
<script>
/**
 * [description]
 * @author ZHAO 
 *@AJAX添加管理员
 */
    $(document).on("click","#btn",function(){
        var _this=$('this');
        var name=$('.admin_name').val();
        var pwd=$('.admin_pwd').val();
        //alert(pwd);
        if (name.length<6) {
            alert('admin length is too slow');
            return false;
        }
        if (pwd.length<6) {
            alert('password length is too slow');
            return false;
        }
        $.ajax({
        //dataType:"json",
        url:'?r=admin/add',
        type:'post',
        data:{name:name,pwd:pwd},
        success:function(msg){
                if(msg==1)
                {
                    alert('添加成功');

                }
                else
                {
                    alert('添加失败');
                }
            }


        })
    })



</script>