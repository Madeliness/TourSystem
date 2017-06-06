<?php
	class UserAction extends Action{
		public function index(){
			$u=M('User');
			$arr=$u->select();
			$c=$u->count();
			$this->assign('count',$c);
			$this->assign('data',$arr);
			$this->display();
		}
		public function del(){
				if(isset($_SESSION['aname'])){
					$u=M('User');
					$where['uid']=$_POST['uid'];
					$row=$u->where($where)->delete();
					$this->ajaxReturn($row,'JSON');
				}else{
					$this->ajaxReturn('您没有权限！');
				}
		}
		
	}
?>