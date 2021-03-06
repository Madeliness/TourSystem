<?php
	class HotelAction extends Action{
		//获取酒店列表
		public function index(){
			$h=M('Hotel');  //$m模型的实例
			$arr=$h->select();
			$c=$h->count();
			$this->assign('count',$c);
			$this->assign('data',$arr);
			$this->display(); 
		}
		//搜索酒店
		public function search(){
			$h=M('Hotel');
			$hmin=$_POST['logmin'];
			$hmax=$_POST['logmax'];
			$hcity=$_POST['cityname'];
			if($hmin !='' && $hmax !='' ){
				$where['hctime']=array(array('egt',$hmin),array('elt',$hmax));
			}else if($tmin !=''){
				$where['hctime']=array('egt',$hmin);
			}else{
				$where['hctime']=array('elt',$hmin);
			}
			if($hcity !=''){
				$where['hcity']=$hcity;
			}
			$arr=$h->where($where)->select();
			$c=$h->count();
			$this->assign('count',$c);
			$this->assign('data',$arr);
			$this->display('index');
		}
		//发布酒店页面
		public function addhotel(){
			$this->display();
		}
		 Public function FileUpload(){
			 import('ORG.Net.UploadFile');
			 $upload = new UploadFile();// 实例化上传类
			 $upload->maxSize  = 314005728 ;// 设置附件上传大小
			 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			 $upload->savePath =  './Public/IMGS/hotel/';// 设置附件上传目录
			 if(!$upload->upload()) {// 上传错误提示错误信息
				$info=$upload->getErrorMsg();
				$this->ajaxReturn($info,'json');
			 }else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				$save_url = '';
				foreach($info as $val){
					$save_url .= $val['savepath'].$val['savename'];
				}
				$this->ajaxReturn($save_url,'JSON');
			 }
			 
			$this->ajaxReturn('不存在','JSON'); 
		 }
		 //发布酒店信息存储
		 public function do_addhotel(){
			$h=M('Hotel');
			$data['hname']=$_POST['hotelname'];
			$data['hcity']=$_POST['hotelcolumn'];
			$data['hphone']=$_POST['hotelphone'];
			$data['hlevel']=$_POST['hotellevel'];
			$data['haddress']=$_POST['hoteladr'];
			$data['hinfo']=$_POST['hotelinfo'];
			$data['hbimg']=$_POST['imgfile'];
			$data['aname']=$_POST['author'];
			$data['hctime']=$_POST['commentdatemin'];
			$hid = $h -> add($data);
			if(isset($hid) && $hid>0){
				$this->ajaxReturn($hid,'酒店发布成功！','ok');
			}else{
				$this->ajaxReturn('0','酒店发布失败！','error');
			}
		 }
		//更新酒店信息页面
		public function uphotel(){
			$h=M('Hotel');
			$hid=$_GET['hid'];
			$arr = $h -> find($hid);
			$this->assign('data',$arr);
			$this->display('uphotel');
		}
		//更新景点存入数据库
		public function do_uphotel(){
			$h=M('Hotel');
			$data['hname']=$_POST['hotelname'];
			$data['hcity']=$_POST['hotelcolumn'];
			$data['hphone']=$_POST['hotelphone'];
			$data['hlevel']=$_POST['hotellevel'];
			$data['haddress']=$_POST['hoteladr'];
			$data['hinfo']=$_POST['hotelinfo'];
			$data['hbimg']=$_POST['imgfile'];
			$data['aname']=$_POST['author'];
			$data['hctime']=$_POST['commentdatemin'];
			$where['hid']=$_POST['hid'];
			//var_dump($data);
			$row = $h -> where($where) -> data($data) -> save();
			if(isset($row) && $row>0){
				$this->ajaxReturn($row,'酒店更新成功！','ok');
			}else{
				$this->ajaxReturn('0','酒店更新失败！','error');
			}
		}
		//删除酒店
		public function del(){
			$m=M('Admin');
			//判断管理员表中是否有这个管理员,自己只能删除自己发布的酒店
			$data['aname']=$_POST['aname'];
			$arr=$m->where($data)->find();
			//判断管理员表中是否有这个管理员
			if($arr && $arr != null){
				//判断得到的管理员是否为当前登录的用户
				if($data['aname'] == $_SESSION['aname']){
					$h=M('Hotel');
					$where['hid']=$_POST['hid'];
					$row=$h->where($where)->delete();
					$this->ajaxReturn($row,'JSON');
				}else{
					$this->ajaxReturn('您没有权限删除他人发布的酒店！');
				}
			}else{
				$this->ajaxReturn('不存在该管理员，删除失败！');
			}
		}
		//酒店房间信息展示页面
		public function hroomshow(){
			$this->display();
		}
	}
?>