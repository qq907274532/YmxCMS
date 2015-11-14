<?php
namespace Manager\Model;
use Think\Model;
/*****
 *		文章模型
 *		editor	zhangxin
 *		date		2015-5-6 13:34:57
 *****/
class AdminModel extends Model {
	
	const TBL_ADMIN="admin";
	/*总数*/
	public function articleCount($where){
		$count=M(self::TBL_ARTICLE)->where($where)->count();
		return $count;
	}

	/*查询用户名*/
	public function user($id){
		$username=M(self::TBL_ADMIN)->where(array('username'=>I('name')))->getField('username');
		return $username;
	}
	/**
	 * [userInfo 查询用户是否存在]
	 * @return [type] [description]
	 */
	public function userInfo(){
		$userInfo=M(self::TBL_ADMIN)->where(array('username'=>I('name'),'password'=>md5(I('password'))))->find();
		return $userInfo;
	}
	public function infoUpdate($id,$data){
		M(self::TBL_ADMIN)->where(array('id'=>$id))->save($data);
	}
	
	/**
	 * [check_verify 验证验证码是否正确]
	 * @param  [type] $code [验证码]
	 * @param  string $id   [description]
	 * @return [type]       [description]
	 */
	public function check_verify($code, $id = ''){
      $verify = new \Think\Verify();
      return $verify->check($code, $id);
    }
	public function cate($id){
		$cate=M(self::TBL_CATE)->where(array('id'=>$id))->getField('cate');
		return $cate;
	}

}
?>