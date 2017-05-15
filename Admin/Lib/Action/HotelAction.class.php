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
			//$tsort=$_POST['toursort'];
			$hmin=$_POST['logmin'];
			$hmax=$_POST['logmax'];
			$hcity=$_POST['cityname'];
			if($hmin !='' && $hmax !='' ){
				$where['tctime']=array(array('egt',$tmin),array('elt',$tmax));
			}else if($tmin !=''){
				$where['tctime']=array('egt',$tmin);
			}else{
				$where['tctime']=array('elt',$tmin);
			}
			if($hcity !=''){
				$where['tcity']=$hcity;
			}
			$arr=$h->where($where)->select();
			$c=$t->count();
			$this->assign('count',$c);
			$this->assign('data',$arr);
			$this->display('index');
		}
		//发布景点页面
		public function addhotel(){
			$this->display();
		}
		//图片上传
		 Public function FileUpload(){
			 import('ORG.Net.UploadFile');
			 $upload = new UploadFile();// 实例化上传类
			 $upload->maxSize  = 314005728 ;// 设置附件上传大小
			 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			 $upload->savePath =  './Public/IMGS/tour/';// 设置附件上传目录
			 if(!$upload->upload()) {// 上传错误提示错误信息
				// $this->error($upload->getErrorMsg());
				$info=$upload->getErrorMsg();
				$this->ajaxReturn($info,'json');
			 }else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
				var_dump($info);
				$save_url = '';
				foreach($info as $val){
					$save_url .= $val['savepath'].$val['savename'];
				// $save_url .= $save_url.','.$save_url_1;
				}
				$data['url']=$save_url;
				$data['status']=0;
				$this->ajaxReturn($data,'json');
			 }
			 
			// var_dump($info);
			
			// $this->assign('img_url',$save_url);
			//$this->display('addtour'); 
			$this->ajaxReturn('不存在','JSON');
		 }
		 //发布景点信息存储
		 public function do_addhotel(){
			$t=M('Tourist');
			$data['tname']=$_POST['tourname'];
			$data['tcity']=$_POST['tourcolumn'];
			$data['tlevel']=$_POST['tourlevel'];
			$data['ttype']=$_POST['tourtype'];
			$data['taddress']=$_POST['tourad'];
			$data['tabstract']=$_POST['abstracts'];
			$data['ticket']=$_POST['ticket'];
			$data['tinfo']=$_POST['editorValue'];
			$data['tbimg']=$_POST['file'];
			$data['tline']=$_POST['tourline'];
			$data['aname']=$_POST['author'];
			$data['tctime']=$_POST['commentdatemin'];
			$tid = $t -> add($data);
			if($tid && $tid>0){
				$this->ajaxReturn($tid,'景点发布成功！','ok');
			}else{
				$this->ajaxReturn(0,'景点发布失败！','error');
			}
		 }
		//更新景点信息页面
		public function uptour(){
			$t=M('Tourist');
			$tid=$_GET['tid'];
			$arr = $t -> find($tid);
			var_dump($arr);
			$this->assign('data',$arr);
			$this->display('uptour');
		}
		//更新景点存入数据库
		public function do_uptour(){
			$t=M('Tourist');
			//$data['tid']=$_POST['tid'];
			$data['tname']=$_POST['tourname'];
			$data['tcity']=$_POST['tourcolumn'];
			$data['tlevel']=$_POST['tourlevel'];
			$data['ttype']=$_POST['tourtype'];
			$data['taddress']=$_POST['tourad'];
			$data['tabstract']=$_POST['abstracts'];
			$data['ticket']=$_POST['ticket'];
			$data['tinfo']=$_POST['editorValue'];
			$data['tbimg']=$_POST['file'];
			$data['tline']=$_POST['tourline'];
			$data['aname']=$_POST['author'];
			$data['tctime']=$_POST['commentdatemin'];
			var_dump($data);
			$row = $t -> where('tid = $_POST["tid"]') -> save($data);
			var_dump('-----------------------------');
			var_dump($row);
			if($rrow && $row>0){
				$this->ajaxReturn($row,'景点更新成功！','ok');
			}else{
				$this->ajaxReturn(0,'景点更新失败！','error');
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