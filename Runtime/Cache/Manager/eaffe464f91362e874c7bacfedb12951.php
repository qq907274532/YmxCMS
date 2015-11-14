<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo C('COMM_TITLE');?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->

		<link href="/Public/admin/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/admin/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/admin/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

		
		<!-- ace styles -->

		<link rel="stylesheet" href="/Public/admin/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/admin/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/admin/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/admin/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->

		<script src="/Public/admin/js/ace-extra.min.js"></script>
		<script src="/Public/admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
		<link href="/Public/admin/css/validator.css" rel="stylesheet" type="text/css" />
		<script src="/Public/admin/js/formValidatorRegex.js" type="text/javascript"></script>
		<script src="/Public/admin/js/formValidator-4.0.1.js" type="text/javascript"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/admin/js/html5shiv.js"></script>
		<script src="/Public/admin/js/respond.min.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="/Public/admin/css/jquery.datetimepicker.css" />
		<script src="/Public/admin/js/jquery.datetimepicker1.js"></script>
		<script src="/Public/admin/layer/layer.js" type="text/javascript"></script>
		<script src="/Public/kindeditor/kindeditor.js"></script>  
	    
		<script>
		 
	       KindEditor.ready(function(K) {
	                window.editor = K.create('#desc',{
								    width : '700px',
								     height : '350px'
								}
		                	);
	        });
    </script>
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							<?php echo C('COMM_TITLE');?>
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						

						<li class="purple" style="display:none;">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-bell-alt icon-animated-bell"></i>
								<span class="badge badge-important">8</span>
							</a>

							<ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-warning-sign"></i>
									8 Notifications
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<i class="btn btn-xs btn-primary icon-user"></i>
										Bob just signed up as an editor ...
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
											<span class="pull-right badge badge-success">+8</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
											<span class="pull-right badge badge-info">+11</span>
										</div>
									</a>
								</li>

								<li>
									<a href="#">
										See all notifications
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green" style="display:none;">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="icon-envelope-alt"></i>
									5 Messages
								</li>

								<li>
									<a href="#">
										<img src="/Public/admin/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
									</a>
								</li>

							

								<li>
									<a href="#">
										<img src="/Public/admin/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
										<span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
									</a>
								</li>

								<li>
									<a href="inbox.html">
										See all messages
										<i class="icon-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/Public/admin/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎,</small>
									<?php echo (session('name')); ?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="<?php echo U('UserInfo/index');?>">
										<i class="icon-cog"></i>
										修改昵称
									</a>
								</li>

								<li>
									<a href="<?php echo U('UserInfo/pass');?>">
										<i class="icon-user"></i>
										修改密码
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="<?php echo U('Login/logout');?>">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>
<style type="text/css">
	
	.wminimize:hover{
		text-decoration:none;
	}
	.table thead>tr>th, .table tbody>tr>th, .table tfoot>tr>th, .table thead>tr>td, .table tbody>tr>td, .table tfoot>tr>td {
			padding: 5px;
			line-height: 1.428571429;
			vertical-align: top;
			 border-top: 0px solid #ddd; 
			 width: 1px;
			 padding-right: 2px;
}
.td19{
	width:10px;
}
	</style>
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
<style type="text/css">
	.activ{
		background: #438eb9;
	}
</style>


					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<a href="/" class="btn btn-success">
								<i class="icon-home"></i>
							</a>

							<a href="<?php echo U('Article/index');?>" class="btn btn-info">
								<i class="icon-pencil"></i>
							</a>

							<a href="<?php echo U('User/index');?>" class="btn btn-warning">
								<i class="icon-group"></i>
							</a>

							<a href="<?php echo U('Cahe/index');?>" class="btn btn-danger">
								<i class="icon-cogs"> </i>
							</a>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li <?php if( CONTROLLER_NAME == 'Index'): ?>class="active"<?php endif; ?>>
							<a href="<?php echo U('Index/index');?>">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 首页 </span>
							</a>
						</li>
						 <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li  <?php if($vo["id"] == $openFirstId): ?>class="open" style="display:block"<?php endif; ?>>
		                        <a href="javascript:void(0);"  class="dropdown-toggle"><i class="icon-<?php echo ($vo["icon"]); ?>"></i>
								<span class="menu-text"> <?php echo ($vo["title"]); ?> </span><b class="arrow icon-angle-down"></b></a>
		                       <ul class="submenu" <?php if($openFirstId == $vo['id']): ?>style="display:block"<?php endif; ?> >
		                          <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($open == $v['id']): ?>class="active"<?php endif; ?> ><a href="<?php echo ($v["urls"]); ?>"><i class="icon-double-angle-right"></i>
										<?php echo ($v["title"]); ?></a>
		                            </li><?php endforeach; endif; else: echo "" ;endif; ?>  
		                        </ul>
		                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
						<!-- <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li <?php if($open == $vo['id']): ?>class="open" style="display:block"<?php endif; ?>>
							<a href="#" class="dropdown-toggle">
								<i class="icon-<?php echo ($vo["icon"]); ?>"></i>
								<span class="menu-text"> <?php echo ($vo["title"]); ?> </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu" <?php if($open == $vo['id']): ?>style="display:block"<?php endif; ?> >
							 <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li <?php if($v['name'] == CONTROLLER_NAME): ?>class="active"<?php endif; ?> >
									<a href="<?php echo ($v["url"]); ?>" >
										<i class="icon-double-angle-right"></i>
										<?php echo ($v["title"]); ?>
									</a>
								</li><?php endforeach; endif; else: echo "" ;endif; ?>
								
							</ul>
						</li><?php endforeach; endif; else: echo "" ;endif; ?> -->
								
							

						
					</ul><!-- /.nav-list -->

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
								<a href="<?php echo U('Index/index');?>">首页</a>
							</li>

							<li>
								<a href="#">权限管理</a>
							</li>
							<li class="active">角色授权</li>
						</ul><!-- .breadcrumb -->

						
					</div>

					<div class="page-content">
						<div class="page-header">
						 
							<a class="label label-xlg label-primary arrowed-right " href="<?php echo U('Role/index');?>">
							返回列表</a>
							
							
							
						</div>

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->

						<div class="row">
							<div class="col-xs-12">
								<div class="table-responsive">
								  <form action="" method="post">
									<table id="sample-table-1" class="table table-striped table-hover">
										

										<tbody>
										 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$val): $mod = ($i % 2 );++$i;?><tr>
												<th class="right" colspan="6">
												<input type="checkbox" class="ace" name="node[]"  value="<?php echo ($val["id"]); ?>" <?php if($val["access"] == 1): ?>checked=checked<?php endif; ?>/>
														<span class="lbl">&nbsp;&nbsp;<?php echo ($val["title"]); ?></span>
													
												</th>
												
											</tr>
										  <?php if(is_array($val["child"])): $i = 0; $__LIST__ = $val["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
												<td class="right td<?php echo ($val["id"]); ?>">
														<input type="checkbox" class="ace" name="node[]"  value="<?php echo ($vo["id"]); ?>" <?php if($vo["access"] == 1): ?>checked=checked<?php endif; ?> />
														<span class="lbl">&nbsp;&nbsp;<?php echo ($vo["title"]); ?></span>
												</td>
											 <?php if(is_array($vo["child"])): $i = 0; $__LIST__ = $vo["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><td class="td<?php echo ($val["id"]); ?>">
														<input type="checkbox" class="ace" name="node[]" value="<?php echo ($v["id"]); ?>" <?php if($v["access"] == 1): ?>checked=checked<?php endif; ?>/>
														<span class="lbl">&nbsp;&nbsp;<?php echo ($v["title"]); ?></span>
												</td><?php endforeach; endif; else: echo "" ;endif; ?>
											</tr><?php endforeach; endif; else: echo "" ;endif; endforeach; endif; else: echo "" ;endif; ?>
										<tr>
											<td colspan="5">
											<input type="hidden" name="id" value="<?php echo ($id); ?>">
											<button class="btn btn-info " type="submit">
												<i class="icon-ok bigger-110"></i>
												提交
											</button></td>
										</tr>

										</tbody>
									
								   </table>
								  
								</form>
								</div><!-- /.table-responsive -->
								<div class="col-sm-6 pull-right">
									<div class="dataTables_paginate paging_bootstrap ">
										<ul class="pagination ">
										
										</ul>
									</div>
								</div>
							</div><!-- /span -->
						</div><!-- /row -->

					

					
					</div><!-- /.col -->
				</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

			
			</div><!-- /.main-container-inner -->
}

			
<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->
	<!-- basic scripts -->

		<!--[if !IE]> -->

		

		<!-- <![endif]-->

		<!--[if IE]>

<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/admin/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/admin/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/admin/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/admin/js/bootstrap.min.js"></script>
		<script src="/Public/admin/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/Public/admin/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/Public/admin/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/admin/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/admin/js/jquery.slimscroll.min.js"></script>
		<script src="/Public/admin/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/Public/admin/js/jquery.sparkline.min.js"></script>
		<script src="/Public/admin/js/flot/jquery.flot.min.js"></script>
		<script src="/Public/admin/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/Public/admin/js/flot/jquery.flot.resize.min.js"></script>


		<!-- page specific plugin scripts -->

		<script src="/Public/admin/js/jquery.dataTables.min.js"></script>
		<script src="/Public/admin/js/jquery.dataTables.bootstrap.js"></script>

		<!-- ace scripts -->

		<script src="/Public/admin/js/ace-elements.min.js"></script>
		<script src="/Public/admin/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		
	</body>
</html>


		<!-- ace scripts -->

		
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
					var id='.td'+$(this).val();
					$(this).closest('tr').nextAll().find(id+' input:checkbox')
					.each(function(){
						this.checked = that.checked;
						//$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
				$('table .right input:checkbox').on('click' , function(){
					var that = this;
					//alert($(this).closest('td').attr('class'));
					$(this).closest('tr').find('td input:checkbox')
					.each(function(){
						this.checked = that.checked;
						$(this).closest('tr').toggleClass('selected');
					});
						
				});
			
				
			})
		</script>