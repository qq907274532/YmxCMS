<?php
namespace Manager\Controller;
use Think\Controller;
class AdController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=D('ad');
	 	$this->modelPos=D('adpos');

       
    }
    public function index(){
        $this->order=array('sort','ad_id'=>'desc');
        $data=$this->page_com($this->model,$this->order);
        foreach ($data['list'] as $k => $v) {
            $data['list'][$k]['name']=$this->modelPos->where(array('id'=>$v['cate_id']))->getField('name');
        }
        $this->data=$data;
        $this->display();
    	
    }
    public function add(){
        if(IS_POST){
            $data=I('post.');
            $data['time']=time();
            if(!$this->model->create($data)){
                $this->error($this->model->getError());
            }else{
                 if($this->model->add()){
                    $this->success('添加成功',U('Ad/index'));
                }else{
                    $this->error('添加失败');
                }
            }
           
        }else{
            $this->info=$this->info_com($this->modelPos);
            $this->display();
        }
        
    }
    public function edit(){
        $id=I('id',0,'intval');
        $where['ad_id']=array('eq',$id);
        if(IS_POST){
          $data=I('post.');
          $data['time']=time();
          if(!$this->model->create($data)){
            $this->error($this->model->getError());
          }else{
            if($this->model->where($where)->save()){
                $this->success('修改成功',U('Ad/index'));
              }else{
                 $this->success('修改失败');
              }
          }
          
        }else{
          $this->modelPos=$this->info_com($this->modelPos);
          $this->info=$this->edit_com($this->model,$where);
          $this->display();  
        }
    }
   
    public function del(){
        $id=I('id',0,'intval');
        if($this->del_com($this->model,array('ad_id'=>$id))){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    } 
}