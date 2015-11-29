<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 个人信息控制器
 */
class UserInfoController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=D('admin');
        
    }
    /*修改用户名*/
    public function index(){
        $id=empty(I('id',0,'intval'))?$_SESSION['uid']:I('id',0,'intval');
        if(IS_POST){
            $data=I('post.');
            unset($data['id']);
       if($this->model->where(array('id'=>$id))->save($data)){
            session_unset();
            session_destroy();
            $this->success('修改成功',U('UserInfo/index',array('id'=>$id)));
          }else{
             $this->success('修改失败');
          }

        }else{
           
            $this->info=$this->info_com($this->model,'','',array('id'=>$id));
           
            $this->display(); 
        }
    }
   
  /*修改密码*/
    public function pass(){
        $id=empty(I('id',0,'intval'))?$_SESSION['uid']:I('id',0,'intval');
        if(IS_POST){
            $data['password']=md5(I('password'));
           
           if($this->model->where(array('id'=>$id))->save($data)){
                session_unset();
                session_destroy();
              $this->success('修改成功',U('UserInfo/index',array('id'=>$id)));
            }else{
                 $this->success('修改失败');
           }

          }else{
           
            $this->info=$this->info_com($this->model,'','',array('id'=>$id));
           
            $this->display(); 
        }
    }
    /*检测密码是否正确*/
    public function check_pass(){
        $pass=md5(I('password1'));
        //print_r($pass);exit;
        $info=$this->model->where(array('id'=>$_SESSION['id']))->getField('password');
        if($info==$pass){
           
            exit('0');
        }else{
            exit('1');
        }
    }
}