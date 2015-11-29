<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		文章分类模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class CateModel extends Model {
	
	protected $_validate = array(
      array('cate','require','分类名称必须填写'), //默认情况下用正则进行验证
    
   );

}
?>