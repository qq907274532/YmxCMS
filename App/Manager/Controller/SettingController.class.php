<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 网站设置控制器
 */
class SettingController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=M('system');
        
    }
    /*修改用户名*/
    public function index(){
       
        if(IS_POST){
            $id=I('id',0,'intval');
            $data=I('post.');
           
            unset($data['id']);
           if($this->model->where(array('id'=>$id))->save($data)){
               
                $this->success('修改成功',U('Setting/index'));
              }else{
                 $this->success('修改失败');
              }

        }else{
           
            $this->info=$this->model->find();
            $this->display(); 
        }
    }
   
 
}