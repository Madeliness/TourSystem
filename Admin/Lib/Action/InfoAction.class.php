<?php
	class InfoAction extends Action{
		//获取资讯列表
		public function index(){
			$f=M('Info');  //$m模型的实例
			$arr=$f->select();
			$sum=$f->count();
			$this->assign('count',$sum);
			$this->assign('data',$arr);
			$this->display(); 
		}
		//发布资讯
		public function addinfo(){
			$this->display();
		}
		//发布信息存储
		public function do_addinfo(){
			$f=M('Info');
			$data['fname']=$_POST['fname'];
			$data['forigin']=$_POST['forigin'];		
			$data['aname']=$_POST['aname'];
			$data['fcontent']=$_POST['editorValue'];
			$data['fctime']=$_POST['fctime'];
			$fid=$f->add($data);
			if(isset($fid) && $fid>0){
				$this->ajaxReturn($fid,'发布成功！','ok');
			}else{
				$this->ajaxReturn('0','发布失败！','error');
			}
		}
		//更新资讯页面
		public function upinfo(){
			$f=M('Info');
			$fid=$_GET['fid'];
			$arr = $f -> find($fid);
			$this->assign('data',$arr);
			$this->display();
		}
		//更新信息存储
		public function do_upinfo(){
			$f=M('Info');
			//$data['fname']=$_POST['fname'];
			$data['forigin']=$_POST['forigin'];		
			$data['aname']=$_POST['aname'];
			$data['fcontent']=$_POST['editorValue'];
			$data['fctime']=$_POST['fctime'];
			$where['fid']=$_GET['fid'];
			//$fid=$f->add($data);
			$row = $f->where($where)->data($data)->save();
			if(isset($fid) && $fid>0){
				$this->ajaxReturn($fid,'资讯更新成功！','ok');
			}else{
				$this->ajaxReturn('0','资讯更新失败！','error');
			}
		}
		
		//删除操作
		public function del(){
			$m=M('Admin');
			//判断管理员表中是否有这个管理员,自己只能删除自己发布的景点
			$data['aname']=$_POST['aname'];
			$arr=$m->where($data)->find();
			//判断管理员表中是否有这个管理员
			if($arr && $arr != null){
				//判断得到的管理员是否为当前登录的用户
				if($data['aname'] == $_SESSION['aname']){
					$f=M('Info');
					$where['fid']=$_POST['fid'];
					$row=$f->where($where)->delete();
					$this->ajaxReturn($row,'JSON');
				}else{
					$this->ajaxReturn('您没有权限删除他人发布的资讯！');
				}
			}else{
				$this->ajaxReturn('不存在该管理员，删除失败！');
			}
		}
	}
?>