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
		
		.onShow{
			height:30px;display:block;float:right;margin-right:321px;width:140px
		}
		.onError{
			height:30px;display:block;float:right;margin-right:321px;width:140px
		}
		.onFocus{
			height:30px;display:block;float:right;margin-right:321px;width:140px
		}
		.onCorrect{
			height:30px;display:block;float:right;margin-right:321px;width:140px
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
								<a href="#">首页</a>
							</li>

							<li>
								<a href="<?php echo U('AdminUser/index');?>">管理员列表</a>
							</li>
							<li class="active">修改管理员</li>
						</ul><!-- .breadcrumb -->

					
					</div>

					<div class="page-content">
						<div class="page-header">
						 <a class="label label-xlg label-primary arrowed " href="<?php echo U('AdminUser/index');?>">
							返回列表</a>
							
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form class="form-horizontal" action="" method="post" id="myform">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 管理员名称： </label>

										<div class="col-sm-9">
											<input type="text" id="username" placeholder="管理员名称" class="col-xs-5" name="username" value="<?php echo ($info["username"]); ?>" disabled="disabled"/>
											 
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 权限组： </label>
									
										<div class="col-sm-3">
											
											<select   class="form-control"  name="role_id" id="role">
												<option value="0">请选择权限</option>
												 <?php if(is_array($infoRole)): $i = 0; $__LIST__ = $infoRole;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><option value="<?php echo ($v["id"]); ?>" <?php if($info["role_id"] == $v['id']): ?>selected="selected"<?php endif; ?>><?php echo ($v["title"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
											</select>
											 
										</div>

										<span class='onShow'  id="roleTip"></span>
									</div>
                                  
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 排序： </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-2" placeholder="排序" class="input-large"  name="sort" value="<?php echo ($info["sort"]); ?>" />
											
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 状态： </label>

										<div class="col-sm-9">
										<label>
											<input name="lock" type="radio" class="ace" value="开启" <?php if($info["lock"] == '开启'): ?>checked="checked"<?php endif; ?>/>
											<span class="lbl">&nbsp;开启</span>
										</label>
										<label>	
											<input name="lock" type="radio" class="ace" value="关闭" <?php if($info["lock"] == '关闭'): ?>checked="checked"<?php endif; ?> />
											<span class="lbl">&nbsp;关闭</span>
										</label>	
									
										</div>
									</div>
								
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
										<input type="hidden" name="id" value="<?php echo ($info["id"]); ?>">
											<button class="btn btn-info" type="submit">
												<i class="icon-ok bigger-110"></i>
												提交
											</button>

											
										</div>
									</div>

								

									
								</form>

								

							
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

				
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

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

<script type="text/javascript">
$(function(){
	$.formValidator.initConfig({formID:"myform",debug:false,submitOnce:true
		
	});
	$("#username").formValidator({onShow:"请输入用户名",onFocus:"用户名4-10个字符",onCorrect:"该用户名可以注册"}).inputValidator({min:4,max:10,onError:"你输入的用户名非法"})
	    .ajaxValidator({
		async : false,
		url :"<?php echo U('Admin/check_user');?>",
		success : function(data){

			if(data==0){
				return true;
			}else if(data==1){
				return false;
			}
			else{
				return false;
			}
		},
		buttons: $("#button"),
		error: function(jqXHR, textStatus, errorThrown){alert("服务器没有返回数据，可能服务器忙，请重试"+errorThrown);},
		onError : "用户名已存在",
		onWait : "正在对用户名进行合法性校验，请稍候..."
	}).defaultPassed();
	$("#password").formValidator({onShow:"填写密码",onFocus:"填写6位以上密码",onCorrect:"密码已经输入"}).inputValidator({min:6,onError:"填写6位以上密码"}).defaultPassed();
	
	$("#repass").formValidator({onShow:"再次输入密码",onFocus:"至少6个长度",onCorrect:"密码一致"}).inputValidator({min:1,empty:{leftEmpty:false,rightEmpty:false},onError:"重复密码不能为空"}).compareValidator({desID:"password",operateor:"=",onError:"2次密码不一致"});
	$("#role").formValidator({onShow:"选择权限组",onFocus:"选择权限组",onCorrect:"权限组已选择"}).inputValidator({min:1,onError:"选择权限组"}).defaultPassed();
	
   
   
});
</script>