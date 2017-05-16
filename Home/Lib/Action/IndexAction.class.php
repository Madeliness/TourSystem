<?php
class IndexAction extends Action {
	//页面展示
    public function index(){
		//展示8个热门景点
		$t=M('Tourist');  //$m模型的实例
		$tidmax=$t->max('tid');
		$where['tid']=array('elt',$tidmax);
		$arr1 = $t->where($where)->limit(8)->order('tid desc')->getField('tid,tname,tcity,ticket');
		//var_dump($arr);
		$this->assign('tour',$arr1);
		
		//展示4个热门酒店
		$h=M('Hotel');
		$hidmax=$h-max('hid');
		$data['hid']=array('elt',$hidmax);
		$arr2 = $h->where($data)->limit(4)->order('hid desc')->getField('hid,hname,hcity,hlevel,hphone');
		$this->assign('hotel',$arr2);
	
	
	
	
	
	
		$this->display();
    }
	
	//public function tour(){
		
	//}
}