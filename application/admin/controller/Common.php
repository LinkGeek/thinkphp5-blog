<?php
namespace app\admin\controller;
use think\Controller;
class Common extends Controller
{
    public function _initialize(){
        if(!session('usermail') || !session('userid')){
           $this->error('请登录',url('login/index')); 
        }
	
    }

}
