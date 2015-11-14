<?php
namespace Manager\Controller;
use Think\Controller;
use Think\Auth;
class BaseController extends Controller {
      private $Auth;
      private $name;
      public function _initialize(){
         $this->Auth  =   new \Classs\Auth();

    	//print_r($_SESSION);exit;
       if(!isset($_SESSION['id'])){
           $this->redirect('Login/index');
       }
      
       
       $this->name=MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME;
       $this->checkAuth($this->name,$_SESSION['id']);
       /*第三级菜单pid*/
       $openId=$this->Auth->getId($this->name);

       
       /*第二级菜单的pid*/
       $openFirstId=$this->Auth->getFirstId($openId);
       // print_r($this->name);exit;
       $this->assign('openFirstId',$openFirstId);
       $this->assign('open',$openId);
       $this->assign('menu',$this->ruleList($_SESSION['id']));
       
       // $info=D('Node')->getRbac($_SESSION['id']);
       
       // if(CONTROLLER_NAME !='Index'){
       //     $rbac=$this->authTF(node_merge($info));
       //     if(!$rbac){
       //        $this->error('您没有权限！！！');
       //     }
       // }
   
       //  // //查询当前用户权限
       //   $menu=$this->getWhere();

        
       //  $rbac=D('node');
       //  $open=$rbac->where(array('name'=>CONTROLLER_NAME))->getField('pid');
        

    
       //  // //所有菜单
       //  $node=D('node');
       //  $nodeInfo=$node->getMenu();
        
       //  $active=array('controller'=>CONTROLLER_NAME,'action'=>ACTION_NAME);
       //  $this->assign('open',$open);
       //  $this->assign('menu',$menu); 
       
    }
    /**
     * [checkAuth 判断是否有权限]
     * @return [type] [description]
     */
    public function checkAuth($auth,$id){
      
       if(!in_array($auth,C('NOT_AUTH'))){
          if(!$this->Auth->check($auth,$id)){            
              $this->error('没有权限访问本页面!',U ( 'Index/index' ));
            }  
       }
    }
    /**
     * [ruleList 获取权限列表]
     * @param  [type] $id [description]
     * @return [type]     [description]
     */
    public function ruleList($id){
       $rules=$this->Auth->getGroups($id);
       $rbac=$this->Auth->getRules($rules[0]['rules']);
       return node_merges($rbac);
    }
    
    //公共的分页 只适合单表查询
    /**进群
     * [公共分页]5
     * @param  [type] $model   [模型]
     * @param  [type] $where   [where条件]
     * @param  [type] $pageAll [每页多少条数]
     * @param  [type] $order   [排序]
     * @return [type]          [description]
     */
    public function page_com($model,$order,$where=array(),$pageAll="15"){
    	
		$count      = $model->where($where)->count();// 查询满足要求的总记录数
        $Page = new \Classs\Page($count,$pageAll);
		//$Page       = new \Think\Page($count,$pageAll);// true实例化分页类 传入总记录数和每页显示的记录数(25)
		$show       = $Page->show();// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $model->where($where)->order($order)->limit($Page->firstRow.','.$Page->listRows)->select();
		
		$data=array(
			'list'=>$list,
			'page'=>$show
			);
		return $data;
    }
     /**
     * [add_com 公共的添加方法]
     * @param [type] $model [模型]
     * @param [type] $data  [要添加的数据]
     */
    public function add_com($model,$data){
      
      $pos_result=$model->add($data);
      return $pos_result;
    }
    /**
     * [edit_com 公共的修改]
     * @param  [type] $model [模型]
     * @param  [type] $where [条件]
     * @return [type]        [description]
     */
    public function edit_com($model,$where){
       $edit_com=$model->where($where)->find();
       return $edit_com;
    }
    /**
     * [update_com 执行更新的方法]
     * @param  [type] $model [模型]
     * @param  [type] $where [条件]
     * @param  [type] $data  [数据]
     * @return [type]        [description]
     */
    public function update_com($model,$where,$data){
      //print_r($model);exit;
         $update_com=$model->where($where)->save($data);
        // echo $model->getLastSql();exit;
         return $update_com;
    }
    /**
     * [del_com 公共的删除]
     * @param  [type] $model [模型]
     * @param  [type] $where [条件]
     * @return [type]        [description]
     */
    public function del_com($model,$where){

        $del_com=$model->where($where)->delete();
     
        return $del_com;
    }
 
    /**
     * [cate_list 公共的无限级分类]
     * @param  [type] $model [description]
     * @return [type]        [description]
     */
    public function cate_list($model,$where=array(),$order=array()){
         $list=$model->where($where)->order($order)->select();
         $info =node_merge($list);
         return $info;
    }
    /**
     * [info_com 公共的查询方法]
     * @param  [type] $model [模型]
     * @param  array  $where [条件]
     * @return [status]        [默认是空 查询所有的，1是查询一条]
     */
    public function info_com($model,$where=array(),$order=array(),$status=''){

        if(empty($status)){
             $result=$model->where($where)->order($order)->select();
             
        }else{
             $result=$model->where($where)->find();
        }
       
        return $result;
    }
    /**
     * 上传公共方法
     */
    public function upload($savepath) {
        $upload = new \Think\Upload(); // 实例化上传类
        $upload->maxSize = 3145728; // 设置附件上传大小
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
        $upload->rootPath = './Uploads/'; // 设置附件上传根目录
        $upload->savePath = $savepath; // 设置附件上传（子）目录
        $upload->saveName = array('date', 'YmdHis');
        $upload->subName = array('date', 'Ymd'); //子目录创建方式，[0]-函数名，[1]-参数，多个参数使用数组
        // 上传文件
        $info = $upload->upload();

       // print_r($info);exit;
        if (!$info) {
// 上传错误提示错误信息
            $this->error($upload->getError());
        } else {
// 上传成功
            $path = $upload->rootPath . $info['imgPath']['savepath'] . $info['imgPath']['savename'];
            $path = ltrim($path, '.');
        }

        return $path;
    }

    /*获取用户权限*/
    public function getwhere(){
       $info=D('Node')->getRbac($_SESSION['id']);
        $list=node_merge($info);
        foreach ($list as $k => $v) {
            foreach ($v['child'] as $key => $va) {
               $list[$k]['child'][$key]['url']=U($va['name'].'/index');
            }
        }
        return $list;
        //$result=M('access')->alias('a')->join('')
    }
    public function authTF($auth_array){
        $auth=0;
        $arr=array('check_user','upload');
        foreach ($auth_array as $key=>$val){

            foreach ($val['child'] as $k => $v) {
               if($v['name']==CONTROLLER_NAME  ){
                
                 for ($i=0; $i <count($v['child']) ; $i++) { 
                     if($v['child'][$i]['name']==ACTION_NAME || in_array(ACTION_NAME,$arr) ){
                         $auth=1;
                     }
                 }
               }
            }
           
        }
        return $auth;
    }
}