<?php
namespace Manager\Controller;
use Think\Controller;
class AdminController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=D('Admin');
	 	$this->modelRole=D('AuthGroup');
        $this->modelRoleAcc=M('auth_group_access');
    }
    public function index(){

        $this->order=array('sort','id'=>'desc');

        $data=$this->page_com($this->model,$this->order);

        foreach ($data['list'] as $k => $v) {
            $group_id=$this->modelRoleAcc->where(array('uid'=>$v['id']))->getField('group_id');
            $data['list'][$k]['name']=$this->modelRole->where(array('id'=>$group_id))->getField('title');
        }
        $this->data=$data;
        $this->display();
    	
    }
    public function add(){
     
        if(IS_POST){
            $data=I('post.');
            $data['password']=md5($data['password']);
            $data['time']=time();
            if(!$this->model->create()){
                $this->error($this->model->getError());
            }else{
                $uid=$this->model->add($data);
                $gid=$this->modelRoleAcc->add(array('group_id'=>I('group_id'),'uid'=>$uid));
                if($uid&&$gid){
                    $this->success('添加成功',U('Admin/index'));
                }else{
                    $this->error('添加失败');
                }
            }
            
        }else{
            $this->info=$this->info_com($this->modelRole);
           
            $this->display();
        }
        
    }
    public function edit(){
        
        $id=I('id',0,'intval');
        $where['id']=array('eq',$id);
        if(IS_POST){
          $data=I('post.');
          $data['time']=time();
          if(!$this->model->create()){
            $this->error($this->model->getError());
          }else{
              $uid=$this->model->where($where)->save($data);
              $gid=$this->modelRoleAcc->where(array('uid'=>$id))->save(array('group_id'=>I('group_id')));
            if($uid || $gid){
             
                 $this->success('修改成功',U('Admin/index'));
              }else{
                 $this->success('修改失败',U('Admin/index'));
              }
          }
          
        }else{
          $this->infoRole=$this->info_com($this->modelRole);
          $this->info=$this->edit_com($this->model,$where);
          
          $this->display();  
        }
    }
  
    public function del(){
        $id=I('id',0,'intval');
        if($this->del_com($this->model,array('id'=>$id))){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    } 
}