<?php
namespace Manager\Controller;
use Think\Controller;
/**
 * 文章控制器
 */
class ArticleController extends BaseController {
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
        $where['del']=array('eq',0);
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
        $Page       = new \Classs\Page($count,15);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        $show       = $Page->show();// 分页显示输出
        // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
     
        $this->list =$this->model->articleList($Page->firstRow,$Page->listRows, $where);
        $this->info=$this->cate_list($this->modelCate,'',array('sort','id'=>'desc'));
       
        $this->assign('page',$show);// 赋值分页输出
        $this->display();
    	
    }
    public function add(){
       
        if(IS_POST){
            $data=I('post.');
            $data['userid']=$_SESSION['id'];
            $data['time']=time();
            $data['content']=$_POST['content'];
            if(!$this->model->create($data)){
                $this->error($this->model->getError());
            }else{
                 if($this->model->add()){
                    $this->success('添加成功',U('Article/index'));
                }else{
                    $this->error('添加失败');
                }
            }
           
        }else{
            $this->list=$this->cate_list($this->modelCate,'',array('sort','id'=>'desc'));

            $this->display();
        }
        
    }
    public function edit(){
        
        $id=I('id',0,'intval');
        $this->where=array('id'=>$id);
        if(IS_POST){

            $data=I('post.');
           
            $data['userid']=$_SESSION['id'];
            $data['time']=time();
            $data['content']=$_POST['content'];
          if(!$this->model->create($data)){
            $this->error($this->model->getError());
          }else{
            if($this->model->where($this->where)->save()){
                $this->success('修改成功',U('Article/index'));
              }else{
                 $this->success('修改失败');
              }
          }
          
        }else{
          $this->list=$this->cate_list($this->modelCate,'',$this->order);

          $this->info=$this->edit_com($this->model,$this->where);
          
          $this->display();  
        }
    }
  
   public function del(){
        $id=I('id',0,'intval');
       
        if($this->update_com($this->model,array('id'=>$id),array('del'=>'1'))){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
        
    } 
}