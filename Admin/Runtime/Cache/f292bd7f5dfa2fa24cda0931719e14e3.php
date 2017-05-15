<?php if (!defined('THINK_PATH')) exit();?><!--_meta 作为公共模版分离出去-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<link rel="Bookmark" href="__PUBLIC__/favicon.ico" >
<link rel="Shortcut Icon" href="__PUBLIC__/favicon.ico" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/lib/html5shiv.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/CSS/webuploader.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__PUBLIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<!--/meta 作为公共模版分离出去-->

<title>景点管理->发布景点</title>
<meta name="keywords" content="H-ui.admin v3.0,H-ui网站后台模版,后台模版下载,后台管理系统模版,HTML后台模版下载">
</head>
<body>
<article class="page-container">
	<form class="form form-horizontal" id="form-article-add" name="form-article-add" method="post" action="__URL__/do_addtour">
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>景点名称：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="<?php echo ($data["tname"]); ?>" placeholder="大唐芙蓉园" id="tourname" name="tourname">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>选择地区：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<span class="select-box">
					<select name="tourcolumn" class="select">
						<option value="西安" select="selected">西安</option>
						<option value="宝鸡">宝鸡</option>
						<option value="铜川">铜川</option>
						<option value="咸阳">咸阳</option>
						<option value="渭南">渭南</option>
						<option value="延安">延安</option>
						<option value="汉中">汉中</option>
						<option value="榆林">榆林</option>
						<option value="安康">安康</option>
						<option value="商洛">商洛</option>
					</select>
				</span> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">景点等级：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="AAAA" id="tourlevel" name="tourlevel">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>景点类型：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="园林,公园,亭台楼阁,游乐场,森林,山脉,红色旅游,陵墓,古镇" id="tourtype" name="tourtype">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>景点地址：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="陕西省西安市芙蓉西路99号" id="tourad" name="tourad">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>景点简介：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<textarea name="abstracts" cols="" rows="" class="textarea"  placeholder="一句话介绍该景点...最少输入10个字符" datatype="*10-100" dragonfly="true" nullmsg="备注不能为空！" onKeyUp="$.Huitextarealength(this,200)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/200</p>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">门票信息：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="通票150元" id="ticket" name="ticket">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">景点详细介绍：</label>
			<div class="formControls col-xs-8 col-sm-9"> 
				<script id="editor" type="text/plain" style="width:100%;height:400px;"></script> 
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">景点图片：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="hidden" value="" name="imgfile"/>
				<div class="uploader-thum-container">
					<div id="fileList" class="uploader-list"></div>
					<div id="filePicker">选择图片</div>
					<button id="btn-star" class="btn btn-default btn-uploadstar radius ml-10">开始上传</button>
				</div>
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2">公交线路：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" class="input-text" value="" placeholder="40路" id="tourline" name="tourline">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>发布人：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" readonly="readonly" class="input-text" value="<?php echo (session('aname')); ?>" placeholder="zhang" id="author" name="author">
			</div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-4 col-sm-2"><span class="c-red">*</span>发布日期：</label>
			<div class="formControls col-xs-8 col-sm-9">
				<input type="text" onfocus="WdatePicker({startDate:'%y',dateFmt:'yyyy-MM-dd',maxDate:'%y-%M-%d',minDate:'%y-%M-%d'})" id="commentdatemin" name="commentdatemin" class="input-text Wdate">
			</div>
		</div>
		<div class="row cl">
			<div class="col-xs-8 col-sm-9 col-xs-offset-4 col-sm-offset-2">
				<button class="btn btn-primary radius" type="submit"><i class="Hui-iconfont">&#xe632;</i> 保存并提交审核</button>
				<button onClick="article_save();" class="btn btn-secondary radius" type="button"><i class="Hui-iconfont">&#xe632;</i> 保存草稿</button>
				<button onClick="removeIframe();" class="btn btn-default radius" type="button">&nbsp;&nbsp;取消&nbsp;&nbsp;</button>
			</div>
		</div>
	</form>
</article>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/static/h-ui.admin/js/H-ui.admin.js"></script> 
<!--/_footer /作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/jquery.validation/1.14.0/jquery.validate.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/jquery.validation/1.14.0/validate-methods.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/jquery.validation/1.14.0/messages_zh.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/webuploader/0.1.5/webuploader.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/ueditor/1.4.3/ueditor.config.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/ueditor/1.4.3/ueditor.all.min.js"> </script> 
<script type="text/javascript" src="__PUBLIC__/lib/ueditor/1.4.3/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript">
$(function(){
	/* $('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	}); */
	//var url;
	//图片上传
	$list = $("#fileList"),  //
	$btn = $("#btn-star"),
	state = "pending",
	uploader;
	var thumbnailWidth = 100; 
	var thumbnailHeight = 100; 
	//选择图片前的准备工作
	var uploader = WebUploader.create({
		auto: false,//选完文件后是否自动上传
		swf: '__PUBLIC__/lib/webuploader/0.1.5/Uploader.swf',// swf文件路径  
		// 文件接收服务端。
		server: '__URL__/FileUpload',
		// 选择文件的按钮。可选。
		// 内部根据当前运行是创建，可能是input元素，也可能是flash.
		pick: '#filePicker',
		// 不压缩image, 默认如果是jpeg，文件上传前会压缩一把再上传！
	//	resize: false,
		// 只允许选择图片文件。
		accept: {
			title: 'Images',
			extensions: 'gif,jpg,jpeg,bmp,png',
			mimeTypes: 'image/*'
		},
		method:'post'
	});
	uploader.on( 'fileQueued', function( file ) {//webuploader事件.当选择文件后，文件被加载到文件队列中，触发该事件  
		var $li = $(
			'<div id="' + file.id + '" class="item">' +
				'<div class="pic-box"><img/></div>'+
				'<div class="info">' + file.name + '</div>' +
				'<p class="state">等待上传...</p>'+
			'</div>'
		),
		$img = $li.find('img');
		$list.append( $li );
	
		// 创建缩略图
		// 如果为非图片文件，可以不用调用此方法。
		// thumbnailWidth x thumbnailHeight 为 100 x 100
		uploader.makeThumb( file, function( error, src ) { //webuploader方法
			if ( error ) {
				$img.replaceWith('<span>不能预览</span>');
				return;
			}
	
			$img.attr( 'src', src );
		}, thumbnailWidth, thumbnailHeight );
		
		
	});
	// 文件上传过程中创建进度条实时显示。
	uploader.on( 'uploadProgress', function( file, percentage ) {
		var $li = $( '#'+file.id ),
			$percent = $li.find('.progress-box .sr-only');
	
		// 避免重复创建
		if ( !$percent.length ) {
			$percent = $('<div class="progress-box"><span class="progress-bar radius"><span class="sr-only" style="width:0%"></span></span></div>').appendTo( $li ).find('.sr-only');
		}
		$li.find(".state").text("上传中");
		$percent.css( 'width', percentage * 100 + '%' );
	});
	
	// 文件上传成功，给item添加成功class, 用样式标记上传成功。
	uploader.on( 'uploadSuccess', function(file,json) {
		var url=json.url;
		//console.log(url);
		$( '#'+file.id ).addClass('upload-state-success').find(".state").text("已上传");
		$('input[name="imgfile"]').val(url);
	});
	
	// 文件上传失败，显示上传出错。
	uploader.on( 'uploadError', function( file ) {
		$( '#'+file.id ).addClass('upload-state-error').find(".state").text("上传出错");
	});
	
	// 完成上传完了，成功或者失败，先删除进度条。
	uploader.on( 'uploadComplete', function( file ) {
		$( '#'+file.id ).find('.progress-box').fadeOut();
	});
	uploader.on('all', function (type) {
        if (type === 'startUpload') {
            state = 'uploading';
        } else if (type === 'stopUpload') {
            state = 'paused';
        } else if (type === 'uploadFinished') {
            state = 'done';
        }

        if (state === 'uploading') {
            $btn.text('暂停上传');
        } else {
            $btn.text('开始上传');
        }
    });
	
    $btn.on('click', function () {
        if (state === 'uploading') {
            uploader.stop();
        } else {
            uploader.upload();
        }
    });
	var ue = UE.getEditor('editor');
	//表单验证
	$("#form-article-add").validate({
		rules:{
			tourname:{
				required:true,
			},
			tourcolumn:{
				required:true,
			},
			tourtype:{
				required:true,
			},
			tourad:{
				required:true,
			},
			abstracts:{
				required:true,
			},
			commentdatemin:{
				required:true,
			},
			author:{
				required:true,
			}
		},
		onkeyup:false,   //指定是否在敲击键盘时验证，默认为true
		focusCleanup:true,   //当未通过验证的元素获得焦点时，移除错误提示，默认为false
		success:"valid",
		submitHandler:function(form){   //通过验证后运行的函数，里面要加上表单提交的函数，否则表单不会提交
			$(form).ajaxSubmit({   //ajax方式提交
				dataType:"json",
				success:function(msg){
					if(msg.status=='ok'){
						var index = parent.layer.getFrameIndex(window.name);
						parent.$('.btn-refresh').click();
						parent.layer.close(index);
					//	removeIframe();//关闭当前页面
					}
					//console.log(msg);
				},
				error:function(msg){
					//console.log(msg+'0');
					alert('新增失败了');
				}
			});   
		}
	});
});
</script>
<!--/请在上方写此页面业务相关的脚本-->
</body>
</html>