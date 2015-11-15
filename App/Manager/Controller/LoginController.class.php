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
          $data=array(
            'name'=>I('username'),
            'status'=>0,
            'ip'=>get_client_ip(),
              'mess'=>'验证码不正确',
              'time'=>time(),
            );
          $this->model->addLog($data);
          echo "<script>alert('验证码不正确');history.go(-1)</script>";
          exit;
      }else{
       
      $userInfoDetail=$this->model->userInfo();
      if(empty($userInfoDetail)){
          $data=array(
            'name'=>I('username'),
            'status'=>0,
            'ip'=>get_client_ip(),
              'mess'=>'用户名或密码不正确',
              'time'=>time(),
            );
          $this->model->addLog($data);
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

            $data=array(
            'name'=>I('username'),
            'status'=>1,
            'ip'=>get_client_ip(),
              'mess'=>'登陆成功',
              'time'=>time(),
            );
          $this->model->addLog($data);

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
    
    /**
     * [checkOnly 检测规则表示是否唯一]
     * @return [type] [description]
     */
     public function checkOnly(){
        if(!empty($this->model->checkRule())){
            exit('1');
        }else{
            exit('0');
        }


    }
  public function check_user(){
      if(empty($this->model->checkName())){
            exit('0');
        }else{
            exit('1');
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