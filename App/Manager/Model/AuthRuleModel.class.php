<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		节点模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class AuthRuleModel extends Model {
	
	protected $_validate = array(
      array('title','require','规则名称必须填写'), //默认情况下用正则进行验证
      array('name','require','规则标识必须填写'), //默认情况下用正则进行验证
      array('name','','规则标识已经存在！',0,'unique',1), // 在新增的时候验证name字段是否唯一
      array('url','require','url必须填写'), //默认情况下用正则进行验证 
   );

}
?>