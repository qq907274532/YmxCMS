<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 角色控制器
 */
class RoleController extends BaseController {
	private $model;
	private $pageAll;
	private $where;
	private $order;
	public function _initialize(){
       parent::_initialize();
        $this->model=D('AuthGroup');
        $this->modelNode=D('AuthRule');
        $this->modelAccess=M('auth_group_access');
    }
    public function index(){
    	
    	$this->order=array('sort','id'=>'desc');
    	$this->data=$this->page_com($this->model,$this->order);
    	$this->display();  
    }
    public function add(){
    	
    	if(IS_POST){
    		$data=I('post.');
    		$data['time']=time();
            if(!$this->model->create()){
                $this->error($this->model->getError($data));
            }else{
                if($this->model->add()){
                    $this->success('添加成功',U('Role/index'));
                }else{
                    $this->error('删除失败');
                }
            }
    		
    	}else{
    		$this->display();
    	}
    	
    }
    public function rbac(){
        $id=I('id',0,'intval');
        if(IS_POST){
           
           $data['rules']=implode(',',I('node'));
            
           if($this->model->where(array('id'=>$id))->save($data)){
              $this->success('授权成功',U('Role/index'));
           }else{
              $this->error('授权失败');
           }
        }else{
           
            

             /*查询权限组id*/
            $infoRule= $this->model->where(array('id'=>$id))->getField('rules');   

           
            $infoRule=explode(',',$infoRule);
               
            $this->order=array('sort','id'=>'desc');
            $node=$this->info_com($this->modelNode,'',$this->order);

            $this->list=node_merges($node,$infoRule);
          
            $this->id=$id;
            $this->display();
        }
        
       
    }
    public function edit(){
      
        $id=I('id',0,'intval');
        $this->where=array('id'=>$id);
        if(IS_POST){
            $data=I('post.');
            $data['create_time']=time();
            if(!$this->model->create($data)){
                $this->error($this->model->getError());
            }else{
                if($this->model->where($this->where)->save()){
                    $this->success('修改成功',U('Role/index'));
                }else{
                     $this->error('修改失败');
                }
            }
            
        }else{

            $this->info=$this->edit_com($this->model,$this->where);

            $this->display();
        }
    }
    public function del(){
    	$id=I('id',0,'intval');
    	if($this->del_com($this->model,array('id'=>$id))){
    		$this->success('删除成功',U('Role/index'));
    	}else{
    		$this->error('删除失败');
    	}
    }
}