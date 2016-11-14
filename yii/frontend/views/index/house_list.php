<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Bootstrap表格插件 - Bootstrap后台管理系统模版Ace下载</title>
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
		<?php include('head.php'); ?>

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
					<?php include('left.php'); ?>
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
								<a href="#">Tables</a>
							</li>
							<li class="active">Simple &amp; Dynamic</li>
						</ul><!-- .breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<!-- 原来是放搜索框的地儿 -->
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								房屋列表
								<small>
									<i class="icon-double-angle-right"></i>
									Static &amp; Dynamic Tables
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12">
										<div class="table-responsive">
										<p class="input-icon">
									<button class="btn btn-xs btn-success" id="price_asc"><i class="icon-search nav-search-icon"></i>价格升序</button>

									<button class="btn btn-xs btn-success" id="price_desc"><i class="icon-search nav-search-icon"></i>价格降序</button>
									<input type="text" placeholder="关键字" class="nav-search-input" id="keyword" autocomplete="off" />关键字
									<input type="text" placeholder="排除关键字" class="nav-search-input" id="unkeyword" autocomplete="off" />排除关键字
									<input type="text" size="9" placeholder="最低价" class="nav-search-input" id="start_price" autocomplete="off" />-
									<input type="text" size="9" placeholder="最高价" class="nav-search-input" id="end_price" autocomplete="off" />价格
									<button class="btn btn-xs btn-success" id="search"><i class="icon-search nav-search-icon"></i>搜索</button>
									
								</p>
											<table id="sample-table-1" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>房屋名称</th>
														<th>地理位置</th>
														<th>预览</th>
														<th class="hidden-480">房屋类型</th>

														<th>所属区域</th>
														<th>楼层</th>
														<th>附近地铁</th>
														<th>供暖方式</th>
														<th>价格</th>
														<th>看房人数</th>
														<th>房屋大小</th>
														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															上线时间
														</th>
														<th class="hidden-480">面向方向</th>
														<th class="hidden-480">操作</th>
													</tr>
												</thead>

												<tbody id="tbody">
												<?php foreach ($data as $key => $v) { ?>
													<tr>
														<td class="center">
															<label>
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#"><?php echo $v['title'] ?></a>
														</td>
														<td><?php echo $v['area'] ?></td>
														<td class="hidden-480"><a href="<?php echo $v['img'] ?>" target="_blank"><img src='<?php echo $v['img'] ?>' width="100"></a></td>
														<td><?php echo $v['attribute'] ?></td>
														<td><?php echo $v['rule'] ?></td>
														<td><?php echo $v['floor'] ?></td>
														<td><?php echo $v['subway'] ?></td>
														<td><?php echo $v['method'] ?></td>
														<td><?php echo $v['price'] ?></td>
														<td><?php echo $v['visit'] ?></td>
														<td><?php echo $v['size'] ?></td>
														<td><?php echo $v['time'] ?></td>

														<td class="hidden-480">
															<span class="label label-sm label-warning"><?php echo $v['direction'] ?></span>
														</td>

														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group" c_id="<?php echo $v['id'] ?>">
																<button class="btn btn-xs btn-danger">
																	<i class="icon-trash bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>
											<?php	} ?>
												</tbody>
											</table>
												<div id="pages"></div>
										</div><!-- /.table-responsive -->
									</div><!-- /span -->
								</div><!-- /row -->

								<div class="hr hr-18 dotted hr-double"></div>

								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				<div class="ace-settings-container" id="ace-settings-container">
					<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
						<i class="icon-cog bigger-150"></i>
					</div>

					<div class="ace-settings-box" id="ace-settings-box">
						<div>
							<div class="pull-left">
								<select id="skin-colorpicker" class="hide">
									<option data-skin="default" value="#438EB9">#438EB9</option>
									<option data-skin="skin-1" value="#222A2D">#222A2D</option>
									<option data-skin="skin-2" value="#C6487E">#C6487E</option>
									<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
								</select>
							</div>
							<span>&nbsp; Choose Skin</span>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
							<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
							<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
							<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
							<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
						</div>

						<div>
							<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
							<label class="lbl" for="ace-settings-add-container">
								Inside
								<b>.container</b>
							</label>
						</div>
					</div>
				</div><!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<script src="assets/js/jquery-2.0.3.min.js"></script>


		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<script src="assets/js/jquery.dataTables.min.js"></script>
		<script src="assets/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->

		<script type="text/javascript">
			jQuery(function($) {
				var oTable1 = $('#sample-table-2').dataTable( {
				"aoColumns": [
			      { "bSortable": false },
			      null, null,null, null, null,
				  { "bSortable": false }
				] } );
				
				
				$('table th input:checkbox').on('click' , function(){
					var that = this;
					$(this).closest('table').find('tr > td:first-child input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
			
				$('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('table')
					var off1 = $parent.offset();
					var w1 = $parent.width();
			
					var off2 = $source.offset();
					var w2 = $source.width();
			
					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}
			})
		</script>
	<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>
<script>

	$('#btn btn-xs btn-danger').click(function(){
		_this = $(this);
		var id = _this.pron('c_id');
		alert(id);
	})
	$('#price_asc').click(function(){
		alert('价格升序')
	})
	$('#price_desc').click(function(){
		alert('价格降序')
	})
	//搜素拼接条件
	var obj = new Object();
	$('#search').click(function(){
		obj['keyword']		= $('#keyword').val();
		obj['unkeyword']	= $('#unkeyword').val();
		obj['start_price']	= $('#start_price').val();
		obj['end_price']	= $('#end_price').val();
		page(1);
	});
	window.onload = function(){
　　	page(1);
	} 

	//分页
	function page(p){

		var str = '';
		$.each(obj, function(k,v){
			str += k+'='+v+'&';
		});

		str += 'p='+p;

		$.ajax({
		   type: "GET",
		   url: "?r=index/page",
		   data: str,
		   dataType:'json',
		   success: function(msg){
		     	str1(msg);
		   }
		});
	}

	//拼接数据
	function str1(msg){
		var str = '';
		$.each(msg.data,function(ke,va){
			str+='<tr><td class="center"><label><input type="checkbox" class="ace" /><span class="lbl"></span></label></td><td><a href="#">'+va.title+'</a></td><td>'+va.area+'</td><td class="hidden-480"><a href="'+va.img+'" target="_blank"><img src="'+va.img+'" width="100"></a></td><td>'+va.attribute+'</td><td>'+va.rule+'</td><td>'+va.floor+'</td><td>'+va.subway+'</td><td>'+va.method+'</td><td>'+va.price+'</td><td>'+va.visit+'</td><td>'+va.size+'</td><td>'+va.time+'</td><td class="hidden-480"><span class="label label-sm label-warning">'+va.direction+'</span></td><td><div class="visible-md visible-lg hidden-sm hidden-xs btn-group"><button class="btn btn-xs btn-danger" c_id="'+va.id+'"><i class="icon-trash bigger-120"></i></button></div></td></tr>';
		})
		$("#tbody").html(str);
		$("#pages").html(msg.pages);
	}

</script>