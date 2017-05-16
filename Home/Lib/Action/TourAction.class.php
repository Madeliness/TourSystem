<?php
	class TourAction extends Action{
		public function index(){
			$t=M('Tourist');
			
			$this->display();
			
		}
	}
?>