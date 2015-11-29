<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 回收站控制器
 */
class RecycleController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=D('Article');
        $this->modelCate=D('cate');
    }
    public function index(){
        $title=empty(I('title'))?'':I('title');//标题
        $pid=empty(I('pid'))?'':I('pid');//分类
        $start=empty(I('starTime'))?'':strtotime(I('starTime'));//开始时间
        $end=empty(I('endTime'))?'':strtotime(I('endTime'));//结束时间
        $where['del']=array('eq',1);
        if($title){
            $where['title']=array('like',"%$title%");
          
        }
         if($pid){
            $where['cate_id']=array('eq',$pid);
          
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
        $count      = $this->model->articleCount($where);// 查询满足要求的总记录数
        $Page       = new \Think\Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
     
        $this->list =$this->model->articleList($Page->firstRow,$Page->listRows,$where);
        $this->info=$this->cate_list($this->modelCate,'',array('sort','id'=>'desc'));
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    	
    }
   
    public function restore(){
        
       $id=I('id',0,'intval');
       
        if($this->model->where(array('id'=>$id))->save(array('del'=>'0'))){
            $this->success('恢复成功');
        }else{
            $this->error('恢复失败');
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