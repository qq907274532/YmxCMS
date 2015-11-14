<?php
namespace Manager\Controller;
use Think\Controller;
class LoginController extends Controller {
    private $model;
    public function _initialize(){
      $this->model=D('Admin');
    }
    public function index(){
         $this->display();
       }
        /**
     * 处理登录
     */
    public function reLogin(){
      
      $verify=I('verify');
      if(!$this->model->check_verify($verify)){
          echo "<script>alert('验证码不正确');history.go(-1)</script>";
          exit;
      }else{
       
      $userInfoDetail=$this->model->userInfo();
      if(empty($userInfoDetail)){
         echo "<script>alert('用户名或密码不正确');history.go(-1)</script>";
         exit;

         //$this->error('用户名或密码不正确',U('Login/index'));
       }else{
        //判断用户是否被锁定
       
            $data=array(
                'logintime'=>time(),
                'loginip'=>get_client_ip(),
                );
            
            $this->model->infoUpdate($userInfoDetail['id'], $data);

            session('id',$userInfoDetail['id']);
            session('name',$userInfoDetail['username']);
            session('ip',$data['loginip']);
      
            redirect(U('Index/index'));
       }
      }

    
    }
    public function checkName(){
      
      if($this->model->user()){
         exit('0');
      }else{
         if($userInfo['lock'] !=0){
            exit('2');
          }else{
            exit('1');
          }
      }
    }
    
    
    public function verify(){
     $config =    array(
        'fontSize'    =>    30,    // 验证码字体大小
        'length'      =>    4,     // 验证码位数
        'useNoise'    =>    false, // 关闭验证码杂点
      );
      $Verify =     new \Think\Verify($config);
      $Verify->entry();
    }
    /**
     * 退出
     */
    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Login/index');
    }
}