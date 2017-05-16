<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		//判断用户是否登录过
		if(isset($_SESSION['aname']) && $_SESSION['aname']!=''){
			$this->display();
		}else{
			$this->redirect('Login/login');
		}
    }
	//获取个人信息
	public function info(){
		$m=M('Admin');
		$where['aid']=$_POST['aid'];
		$arr=$m->where($where)->select(); 
		if($arr){
			$this->ajaxReturn($arr,'JSON');
		}else{
			 $this->ajaxReturn(0,"查询失败！",0);
		}
	}
}