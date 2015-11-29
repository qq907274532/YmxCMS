<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		文章模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class ArticleModel extends Model {
	const TBL_ARTICLE="article";
	const TBL_CATE="cate";
	const TBL_ADMIN="admin";
	protected $_validate = array(
      array('cate_id','require','文章分类必须选择'), //默认情况下用正则进行验证
      array('title','require','文章标题必须填写'),
      array('desc','require','文章描述必须填写'),
      array('content','require','文章内容必须填写'),
    
   );
	/*总数*/
	public function articleCount($where){
		$count=M(self::TBL_ARTICLE)->where($where)->count();
		return $count;
	}
	/*列表*/
	public function articleList($firstRow,$listRows,$where){
		
	   
		$list=M(self::TBL_ARTICLE)
		->where($where)->order(array('sort'=>'desc','id'=>'desc'))->limit($firstRow.','.$listRows)->select();
		foreach ($list as $key => $v) {
			$list[$key]['username']=$this->user($v['userid']);
			$list[$key]['cate']=$this->cate($v['cate_id']);
		}
		return $list;
	}
	/*查询用户名*/
	public function user($id){
		$username=M(self::TBL_ADMIN)->where(array('id'=>$id))->getField('username');
		return $username;
	}
	public function cate($id){
		$cate=M(self::TBL_CATE)->where(array('id'=>$id))->getField('cate');
		return $cate;
	}

}
?>