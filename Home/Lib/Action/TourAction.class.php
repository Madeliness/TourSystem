<?php
	class TourAction extends Action{
		public function index(){
			$t=M('Tourist');	
			import('ORG.Util.Page');
			$count      = $t->count();// 查询满足要求的总记录数
			$Page       = new Page($count,9);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $t->field('tid,tname,tcity,ticket,tabstract,tbimg')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display();
			
		}
	}
?>