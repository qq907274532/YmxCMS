<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 广告位控制器
 */
class AdPosController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=M('adpos');

       
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
            if($this->add_com($this->model,$data)){
                $this->success('添加成功',U('AdPos/index'));
            }else{
                $this->error('添加失败');
            }
        }else{
            
            $this->display();
        }
        
    }
    public function edit(){
         
        $id=I('id',0,'intval');
        $where['id']=array('eq',$id);
        if(IS_POST){
          $data=I('post.');
          $data['time']=time();
          if($this->update_com($this->model,$where,$data)){
            $this->success('修改成功',U('AdPos/index'));
          }else{
             $this->success('修改失败');
          }
        }else{
        
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