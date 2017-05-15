<?php
//公共文件验证码
	class PublicAction extends Action{
		function code(){
			import('ORG.Util.Image');
			Image::buildImageVerify(4,1,'png',65,36,'code');
		}
	}
?>