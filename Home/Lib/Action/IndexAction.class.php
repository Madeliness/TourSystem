<?php
class IndexAction extends Action {
	//页面展示
    public function index(){
		//展示8个热门景点
		$t=M('Tourist');  //$m模型的实例
		$tidmax=$t->max('tid');
		$where1['tid']=array('elt',$tidmax);
		$arr1 = $t->where($where1)->order('tid desc')->limit(8)->getField('tid,tname,tcity,ticket,tbimg');
		//var_dump($arr);
		$this->assign('tour',$arr1);
		
		//展示4个热门酒店
		$h=M('Hotel');
		$hidmax=$h->max('hid');
		$where2['hid']=array('elt',$hidmax);
		$arr2 = $h->where($where2)->limit(4)->order('hid desc')->getField('hid,hname,hcity,hlevel,hphone');
		$this->assign('hotel',$arr2);
		
		//展示4个热门路线
		
		
		
		
		
		//展示6个热门美食
		$c=M('Cases');
		$cidmax=$c->max('cid');
		$where4['cid']=array('elt',$cidmax);
		$arr4 = $c->where($where4)->limit(6)->order('cid desc')->getField('cid,cname,ccity');
		$this->assign('cases',$arr4);
		
		//展示6个热门特产
		$p=M('Produces');
		$pidmax=$p->max('pid');
		$where5['pid']=array('elt',$pidmax);
		$arr5 = $p->where($where5)->limit(6)->order('pid desc')->getField('pid,pname,pcity');
		$this->assign('produces',$arr5);
		
		//展示6个热门资讯
		$f=M('Info');
		$fidmax=$f->max('fid');
		$where6['fid']=array('elt',$fidmax);
		$arr6 = $f->where($where6)->limit(6)->order('fid desc')->getField('fid,fname');
		$this->assign('info',$arr6);
		//var_dump($arr6);
		
		$this->display();
    }
	
	//public function tour(){
		
	//}
}