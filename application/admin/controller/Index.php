<?php
namespace app\admin\controller;
use think\Controller;
class Index extends Common
{
   
	public function index()
    {
        return view();
    }
	
	public function home()
    {
        return view();
    }

	function update(){
		
		array_map('unlink', glob(TEMP_PATH . '/*.php'));
        rmdir(TEMP_PATH);
		return json(array('code'=>200,'msg'=>'更新缓存成功'));
	}
}
