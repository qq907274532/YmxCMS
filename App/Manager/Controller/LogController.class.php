<?php
namespace Manager\Controller;
use Think\Controller;
class LogController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    //private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=M('Log');
	 	$this->modelAdmin=M('admin');

       
    }
    public function index(){
        $group_id=empty(I('group_id'))?'':I('group_id');
        $start=empty(I('starTime'))?'':strtotime(I('starTime'));
        $end=empty(I('endTime'))?'':strtotime(I('endTime'));
        if($group_id){
            $where['uid']=array('eq',$group_id);
           
          
        }
         if($start){
            $where['time']=array('EGT',$start);
        }
        if($end){
            $where['time']=array('ELT',$end);
           
        }
        if($start && $end){
            $where['time']=array('BETWEEN',array($start,$end));
        }
        $this->order=array('id'=>'desc');

        $data=$this->page_com($this->model,$this->order,$where);

        foreach ($data['list'] as $k => $v) {
            $data['list'][$k]['username']=$this->modelAdmin->where(array('id'=>$v['uid']))->getField('username');
        }
        $this->list=$this->modelAdmin->select();
        $this->data=$data;
        $this->display();
    	
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