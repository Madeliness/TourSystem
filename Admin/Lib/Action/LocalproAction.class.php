<?php
	class LocalproAction extends Action{
		//获取美食信息
		public function cases(){
			$c=M('Cases');  //$m模型的实例
			$arr=$c->select();
			$sum=$c->count();
			$this->assign('count',$sum);
			$this->assign('data1',$arr);
			$this->display(); 
		}
		//获取特产信息
		public function produces(){
			$p=M('produces');  //$m模型的实例
			$arr=$p->select();
			$sum=$p->count();
			$this->assign('count',$sum);
			$this->assign('data2',$arr);
		//	var_dump($arr);
			$this->display();
		}
		//新增页面
		public function add(){
			$type=$_GET['idtype'];
			$this->assign('idtype',$type);
			$this->display();
		}
		//新增信息存储
		public function do_add(){
			$type=$_POST['idtype'];	
			if($type=='c'){
				$l=M('Cases');
			}else{
				$l=M('produces');
			}
			$id=$type.'id';
			$data[$type.'name']=$_POST['name'];
			$data[$type.'city']=$_POST['column'];
			$data[$type.'info']=$_POST['info'];
			$data[$type.'bimg']=$_POST['file'];
			$data['aname']=$_POST['author'];
			$data[$type.'time']=$_POST['commentdatemin'];
			$id = $l -> add($data);
			if($id && $id>0){
				$this->ajaxReturn($id,'发布成功！','ok');
			}else{
				$this->ajaxReturn('0','发布失败！','error');
			}
		}
		//更新信息
		public function update(){
			$type=$_GET['idtype'];
			if($type=='c'){
				$l=M('Cases');
			}else{
				$l=M('Produces');
			}
			$id=$type.'id';
			$lid=$_GET[$id];
			$arr = $l -> find($lid);
			$data['idtype']=$type;
			$data['id']=$arr[$type.'id'];
			$data['name']=$arr[$type.'name'];
			$data['city']=$arr[$type.'city'];
			$data['info']=$arr[$type.'info'];
			$data['bimg']=$arr[$type.'bimg'];
			$data['aname']=$arr['aname'];
			$data['time']=$arr[$type.'time'];
			$this->assign('data',$data);
			$this->display();
		}
		//存储更新信息
		public function do_update(){
			if($_SESSION['aname'] == $_POST['author']){
				$type=$_POST['idtype'];
				if($type=='c'){
					$l=M('Cases');
				}else{
					$l=M('Produces');
				}
				$data[$type.'name']=$_POST['name'];
				$data[$type.'city']=$_POST['column'];
				$data[$type.'info']=$_POST['info'];
				$data[$type.'bimg']=$_POST['imgfile'];
				$data['aname']=$_POST['author'];
				$data[$type.'time']=$_POST['time'];
				$where[$type.'id']=$_POST['id'];
				$row = $l->where($where)->data($data)->save();
				if(isset($row) && $row>0){
					$this->ajaxReturn($row,'更新成功！','ok');
				}else{
					$this->ajaxReturn('0','更新失败！','error');
				}
			}else{
				$this->ajaxReturn('0','您没有权限修改他人发布的特产！','error');
			}
		}
		//删除美食
		public function del(){
			$type=$_POST['idtype'];
			$m=M('Admin');
			//判断管理员表中是否有这个管理员,自己只能删除自己发布的美食
			$data['aname']=$_POST['aname'];
			$arr=$m->where($data)->find();
			//判断管理员表中是否有这个管理员
			if($arr && $arr != null){
				//判断得到的管理员是否为当前登录的用户
				if($data['aname'] == $_SESSION['aname']){
					
					if($type=='c'){
						$l=M('Cases');
					}else{
						$l=M('produces');
					}
					$where[$type.'id']=$_POST[$type.'id'];
					$row=$l->where($where)->delete();
					$this->ajaxReturn($row,'JSON');
				}else{
					$this->ajaxReturn('您没有权限删除他人发布的美食！');
				}
			}else{
				$this->ajaxReturn('不存在该管理员，删除失败！');
			}
		}
	}
?>