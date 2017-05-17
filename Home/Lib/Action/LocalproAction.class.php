<?php
	class LocalproAction extends Action{
		public function cases(){
			//展示6个热门资讯
			$c=M('Cases');
			$cidmax=$c->max('cid');
			$where['cid']=array('elt',$cidmax);
			$arr = $c->where($where)->limit(6)->order('cid desc')->getField('cid,cname,ccity,cinfo');
			//$data['cid']=$cidmax;
			//$result=$c->where($data)->find();
			$this->assign('cases',$arr);
			//$this->assign('result',$result);
			$this->display();
			
		}
	}
?>