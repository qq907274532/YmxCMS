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
	const TBL_RULE="auth_rule";
	const TBL_Log="lolog";
	/*总数*/
	public function articleCount($where){
		$count=M(self::TBL_ARTICLE)->where($where)->count();
		return $count;
	}

	/*查询用户名*/
	public function user($id){
		$username=M(self::TBL_ADMIN)->where(array('username'=>I('username')))->getField('username');
		return $username;
	}
	public function addLog($data){
		$log=M(self::TBL_Log)->add($data);
		return $log;
	}
	/**
	 * [userInfo 查询用户是否存在]
	 * @return [type] [description]
	 */
	public function userInfo(){
		$userInfo=M(self::TBL_ADMIN)->where(array('username'=>I('username'),'password'=>md5(I('password'))))->find();
		return $userInfo;
	}
	public function infoUpdate($id,$data){
		M(self::TBL_ADMIN)->where(array('id'=>$id))->save($data);
	}
	/*查询规则标示*/
	public function checkRule(){
		 $name=M(self::TBL_RULE)->where(array('name'=>I('name')))->find();
		 return $name;
	}
	public function checkName(){
		$info=M(self::TBL_ADMIN)->where(array('username'=>I('username')))->find();
		return $info;
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