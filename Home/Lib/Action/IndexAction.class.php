<?php
class IndexAction extends Action {
	//页面展示
    public function index(){
		//展示8个热门景点
		$t=M('Tourist');  //$m模型的实例
		$tidmax=$t->max('tid');
		$where['tid']=array('elt',$tidmax);
		$arr = $t->where($where)->limit(8)->order('tid desc')->getField('tid,tname,tcity,ticket');
		//var_dump($arr);
		$this->assign('data',$arr);
		
	
	
	
	
	
	
	
	
	
		$this->display();
    }
	
	//public function tour(){
		
	//}
}