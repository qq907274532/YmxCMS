<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		导航栏模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class NavModel extends Model {
	
	protected $_validate = array(
      array('name','require','导航栏名称必须填写'), //默认情况下用正则进行验证
    
   );

}
?>