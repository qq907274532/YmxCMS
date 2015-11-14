<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		评论模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class CommentsModel extends Model {
	const TBL_ARTICLE="article";
	const TBL_COMM="comments";
	
	/*总数*/
	public function commCount(){
		
	   
		$count=M(self::TBL_COMM)->count();
		//echo M(self::TBL_ADMIN)->getLastSql();exit;
		return $count;
	}
	/*列表*/
	public function commList($firstRow,$listRows){
		
	   
		$list=M(self::TBL_COMM)->limit($firstRow.','.$listRows)->select();
		foreach ($list as $key => $v) {
			$list[$key]['title']=$this->titleName($v['aid']);
			
		}
		return $list;
	}
	
	public function titleName($id){
		$cate=M(self::TBL_ARTICLE)->where(array('id'=>$id))->getField('title');
		return $cate;
	}

}
?>