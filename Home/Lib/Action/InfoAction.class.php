<?php
	class InfoAction extends Action{
		public function index(){
			//展示6个热门资讯
				$f=M('Info');
				$fidmax=$f->max('fid');
				$where6['fid']=array('elt',$fidmax);
				$arr6 = $f->where($where6)->limit(6)->order('fid desc')->getField('fid,fname');
				
				$data['fid']=$fidmax;
				$result=$f->where($data)->find();
				
				$this->assign('info',$arr6);
				$this->assign('result',$result);
			//	var_dump($result);
				//var_dump($arr6);
				$this->display();
			
		}
	}
?>