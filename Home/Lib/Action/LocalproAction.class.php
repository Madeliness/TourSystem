<?php
	class LocalproAction extends Action{
		public function cases(){
			//展示所有美食
			$c=M('Cases');
			import('ORG.Util.Page');
			$count      = $c->count();// 查询满足要求的总记录数
			$Page       = new Page($count,6);// 实例化分页类 传入总记录数和每页显示的记录数
			$show       = $Page->show();// 分页显示输出
			// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
			$list = $c->field('cid,cname,ccity,cinfo')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
			$this->display();
			
		}
	}
?>