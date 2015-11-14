<?php
namespace Manager\Controller;
use Think\Controller;
class IndexController extends BaseController {
	public function _initialize(){
       parent::_initialize();
    }
    public function index(){
    	
    	$this->display();  
    }
}