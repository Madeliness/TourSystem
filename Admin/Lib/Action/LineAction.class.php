<?php
	class LineAction extends Action{
		public function index(){
			//获取路线信息
			$l=M('Line');
			$arr=$l->select();
			$c=$l->count();
			$this->assign('data',$arr);
			$this->assign('count',$c);
			$this->display();
		}
		//发布线路页面
		public function addline(){
			$this->display();
		}
		//图片上传
		 Public function FileUpload(){
			 import('ORG.Net.UploadFile');
			 $upload = new UploadFile();// 实例化上传类
			 $upload->maxSize  = 314005728 ;// 设置附件上传大小
			 $upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			 $upload->savePath =  './Public/IMGS/line/';// 设置附件上传目录
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
		//发布线路信息存储
		 public function do_addline(){
			$l=M('Line');
			$data['xname']=$_POST['linename'];
			$data['xtour']=$_POST['linetour'];
			$linecity=$_POST['linecity'];
			for($i=0;$i<count($linecity);$i++){
				if($i<(count($linecity) - 1)){
					$data['xcity'] .=$linecity[$i].',';
				}else{	
					$data['xcity'] .=$linecity[$i];
				}
			}
			$data['xbimg']=$_POST['imgfile'];
			$data['xtime']=$_POST['linetime'];
			$data['xprice']=$_POST['lineprice'];
			$data['xinfo']=$_POST['lineinfo'];
			$data['aname']=$_POST['author'];
			$data['xctime']=$_POST['commentdatemin'];
			$lid = $l -> add($data);
			if(isset($lid) && $lid>0){
				$this->ajaxReturn($lid,'线路发布成功！','ok');
			}else{
				$this->ajaxReturn('0','发布失败！','error');
			}
		 }
		
		//更新景点信息页面
		public function upline(){
			$l=M('Line');
			$xid=$_GET['xid'];
			$arr = $l -> find($xid);
			$this->assign('data',$arr);
			$this->display();
		}
		//更新景点存入数据库
		public function do_uptour(){
			if($_SESSION['aname'] == $_POST['author']){
				$t=M('Tourist');
				$data['tname']=$_POST['tourname'];
				$data['tcity']=$_POST['tourcolumn'];
				$data['tlevel']=$_POST['tourlevel'];
				$data['ttype']=$_POST['tourtype'];
				$data['taddress']=$_POST['tourad'];
				$data['tabstract']=$_POST['abstracts'];
				$data['ticket']=$_POST['ticket'];
				$data['tbimg']=$_POST['imgfile'];
				$data['tline']=$_POST['tourline'];
				$data['aname']=$_POST['author'];
				$data['tctime']=$_POST['commentdatemin'];
				$where['tid'] = $_POST['tid'];
				$row = $t->where($where)->data($data)->save();
				if(isset($row) && $row>0){
					$this->ajaxReturn($row,'景点更新成功！','ok');
				}else{
					$this->ajaxReturn('0','景点更新失败！','error');
				}
			}else{
				$this->ajaxReturn('0','您没有权限修改他人发布的景点！','error');
			}
		}
		
		//删除线路
		public function del(){
			$m=M('Admin');
			//判断管理员表中是否有这个管理员,自己只能删除自己发布的线路
			$data['aname']=$_POST['aname'];
			$arr=$m->where($data)->find();
			//判断管理员表中是否有这个管理员
			if(isset($arr) && $arr != null){
				//判断得到的管理员是否为当前登录的用户
				if($data['aname'] == $_SESSION['aname']){
					$l=M('Line');
					$where['xid']=$_POST['xid'];
					$row=$l->where($where)->delete();
					$this->ajaxReturn($row,'JSON');
				}else{
					$this->ajaxReturn('您没有权限删除他人发布的线路！');
				}
			}else{
				$this->ajaxReturn('不存在该管理员，删除失败！');
			}
		}
	}
?>