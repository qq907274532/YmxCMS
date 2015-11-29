<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		广告模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class AdModel extends Model {
	
	protected $_validate = array(
      array('cate_id','require','广告位必须选择'), //默认情况下用正则进行验证
      array('ad_name','require','广告名称必须填写'),
      array('ad_content','require','广告代码必须填写'),
    
   );

}
?>