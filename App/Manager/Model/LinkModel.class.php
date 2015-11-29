<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		友情链接模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class LinkModel extends Model {
	
	protected $_validate = array(
      array('name','require','公司名称必须填写'), //默认情况下用正则进行验证
      array('desc','require','公司描述必须填写'), //默认情况下用正则进行验证
      array('url','require','公司链接必须填写'), //默认情况下用正则进行验证
    
   );

}
?>