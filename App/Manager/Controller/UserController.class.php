<?php
namespace Manager\Controller;
use Think\Controller;
class UserController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $wheres;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=M('users');
	 	
       
    }
    public function index(){
        $name=empty(I('name'))?'':I('name');
        $email=empty(I('email'))?'':I('email');
        $start=empty(I('starTime'))?'':strtotime(I('starTime'));
        $end=empty(I('endTime'))?'':strtotime(I('endTime'));
        if($name){
            $where['user_login']=array('like',"%$name%");
          
        }
         if($email){
            $where['user_email']=array('eq',$email);
          
        }
         if($start){
            $where['create_time']=array('EGT',$start);
        }
        if($end){
            $where['create_time']=array('ELT',$end);
           
        }
        if($start && $end){
            $where['create_time']=array('BETWEEN',array($start,$end));
        }
        $this->order=array('id'=>'desc');

        $this->data=$this->page_com($this->model,$this->order,$where);

        $this->display();
    	
    }
    public function add(){
        
        if(IS_POST){
            $data=I('post.');
            $data['password']=md5($data['password']);
            $data['time']=time();
            if($this->add_com($this->model,$data)){
                $this->success('添加成功',U('Admin/index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            $this->info=$this->info_com($this->modelRole);
            $this->display();
        }
        
    }
    public function enable(){
       
        $id=I('id',0,'intval');
        $where['id']=array('eq',$id);
        $data['user_status']='1';
        if($this->model->where($where)->save($data)){
            $this->success('启用成功',U('User/index'));
          }else{
             $this->success('启用失败');
          }
    }
  
    public function shield(){
        $id=I('id',0,'intval');
        $where['id']=array('eq',$id);
        $data['user_status']='0';
        if($this->model->where($where)->save($data)){
            $this->success('禁用成功',U('User/index'));
          }else{
             $this->success('禁用失败');
        }
    } 
}