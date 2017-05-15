<?php
	class LoginAction extends Action{
		function login(){
			//显示登录页面
			$this->display();
		}
		public function do_login(){
			//获取用户名和密码
			$aname=$_POST['aname'];
			$apwd=$_POST['apwd'];
			$code=$_POST['code'];
			if($_SESSION['code'] != md5($code)) {
			   $this->error('验证码错误！');
			   exit;
			}
			$m=M('Admin');
			$where['aname']=$aname;
			$where['apwd']=$apwd;
			$arr=$m->field('aid')->where($where)->find();
			if($arr){
				$_SESSION['aname']=$aname;
				$_SESSION['aid']=$arr['aid'];
				$this->success('用户登录成功',U('Index/index'));
			}else{
				$this->error('该用户不存在！');
			}
		}
		//退出
		public function do_logout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
			SESSION_destroy();
			$this->redirect('Index/index');
		}
		
		//注册前的准备工作
		//检查是否注册过
		public function Checkname(){
			$aaname=$_GET['aaname'];
			$m=D('Admin');
			$where['aname']=$aaname;
			$count=$m->where($where)->count();
			if($count){
				echo '1';
			}else{
				echo '0';
			}
		}
		//注册
		public function do_reg(){
			$aaname = $_POST['aaname'];
			$apwd1 = $_POST['aapwd1'];
			$apwd2 = $_POST['aapwd2'];
			$sex = $_POST['sex'];
			$ad = M('Admin');
			$data['aname'] = $aaname;
			$data['apwd'] = $apwd1;
			$data['asex'] = $sex;
			$lastid = $ad -> add($data);
			if($lastid){
				$this->redirect('Index/index');
			}else{
				$this->error('用户注册失败！');
			}
		}
		
	}
?>