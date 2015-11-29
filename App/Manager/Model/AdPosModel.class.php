<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		广告位模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class AdPosModel extends Model {
	
	protected $_validate = array(
      array('name','require','广告位名称必须填写'), //默认情况下用正则进行验证
    
   );

}
?>