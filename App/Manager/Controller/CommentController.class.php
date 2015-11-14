<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 评论控制器
 */
class CommentController extends BaseController {
	private $model;
    private $pageAll;
    private $order;
    private $where;
	public function _initialize(){
	 	parent::_initialize();
	 	$this->model=D('Comments');
        
    }
    public function index(){
        
        $count      = $this->model->commCount();// 查询满足要求的总记录数
        $Page       = new \Classs\Page($count,'15');// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
     
        $list =$this->model->commList($Page->firstRow,$Page->listRows);

        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
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