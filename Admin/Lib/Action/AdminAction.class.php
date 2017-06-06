<?php
	class AdminAction extends Action{
		//角色管理
		public function arole(){
			$this->display();
		}
		//权限管理
		public function apower(){
			$this->display();
		}
		//管理员列表
		public function alist(){
			
			$a=M('Admin');
			$sum=$a->count();
			$arr=$a->field('apwd',true)->select(); 
			foreach($arr as $i){
				if($i['asex']=='0'){
					$i['sex']='男';
				}else{
					$i['sex']='女';
				}
			}
			$this->assign('count',$sum);
			$this->assign('result',$arr);
			$this->display();
		}
	}
?>