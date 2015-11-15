<?php
return array(

	'SHOW_PAGE_TRACE' => false,
	'URL_CASE_INSENSITIVE' => false,
	'SystemTitle' => '买嘎嘎时代科技有限公司',
	'SystemTitles' => '嘎嘎时代',
	'Serverice' => '服务器信息',
	'Team' => '技术团队配置',
	'Android' => '张三',
	'PHPer' => '李四，王五',
	'Ios' => '小李',
	'The_team' => '嘎嘎时代技术团队',
	'Leader' => '12345',
	'server_info' => php_uname(), //服务器信息
	'server' => $_SERVER['SERVER_SOFTWARE'], //服务器环境
	'php' => PHP_VERSION, //php版本
	'mysql' => mysql_get_server_info(), //mysql信息
	'lan' => $_SERVER['HTTP_ACCEPT_LANGUAGE'], //服务器语言
	'IP' => get_client_ip(), //服务器ip
	'COMM_TITLE'=>'易名轩管理系统',
	'AUTH_ON' => true, //认证开关
    'AUTH_TYPE' => 1, // 认证方式，1为时时认证；2为登录认证。
    'AUTH_GROUP' => 'hx_auth_group', //用户组数据表名
    'AUTH_GROUP_ACCESS' => 'hx_auth_group_access', //用户组明细表
    'AUTH_RULE' => 'hx_auth_rule', //权限规则表
    'AUTH_USER' => 'hx_admin',//用户信息表
    
    'NOT_AUTH'=>['Manager/Index/index','Manager/Admin/check_user'],
	'TMPL_ACTION_ERROR'     =>  'Public:error', // 默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'   =>  'Public:success', // 默认成功跳转对应的模板文件
	
);