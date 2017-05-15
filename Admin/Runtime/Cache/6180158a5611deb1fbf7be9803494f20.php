<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="__PUBLIC__/lib/html5shiv.js"></script>
<script type="text/javascript" src="__PUBLIC__/lib/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/lib/Hui-iconfont/1.0.8/iconfont.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/skin/default/skin.css" id="skin" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/static/h-ui.admin/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="__PUBLIC__/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>酒店列表</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 酒店管理 <span class="c-gray en">&gt;</span> 酒店列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
	<div class="text-c">
		<button onclick="removeIframe()" class="btn btn-primary radius">关闭选项卡</button>
		<form action="__URL__/search" method="post" name="h_search" style="display:inline-block;">
			日期范围：
			<input type="text" onfocus="WdatePicker({ maxDate:'#F{$dp.$D(\'logmax\')||\'%y-%M-%d\'}' })" id="logmin" class="input-text Wdate" style="width:120px;">
			-
			<input type="text" onfocus="WdatePicker({ minDate:'#F{$dp.$D(\'logmin\')}',maxDate:'%y-%M-%d' })" id="logmax" class="input-text Wdate" style="width:120px;">
			<input type="text" name="cityname" id="" placeholder=" 城市名称" style="width:250px" class="input-text">
			<button name="" id="" class="btn btn-success" type="button" onClick="search_hotel()"><i class="Hui-iconfont">&#xe665;</i> 搜酒店</button>
		</form>
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> <a class="btn btn-primary radius" onclick="picture_add('添加酒店','__URL__/addhotel')" href="javascript:;"><i class="Hui-iconfont">&#xe600;</i> 发布酒店</a></span> <span class="r">共有数据：<strong><?php echo ($count); ?></strong> 条</span> </div>
	<div class="mt-20 nicescroll">
		<table class="table table-border table-bordered table-bg table-hover table-sort">
			<thead>
				<tr class="text-c">
					<th><input name="" type="checkbox" value=""></th>
					<th>酒店ID</th>
					<th>酒店名称</th>
					<th>所在城市</th>
					<th>预定电话</th>
					<th>酒店等级</th>
					<th>房间信息</th>
					<th>酒店地址</th>
					<th>酒店简介</th>
					<th>发布人</th>
					<th>更新时间</th>
					<th>发布状态</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="text-c">
					<td><input name="" type="checkbox" value=""></td>
					<td><?php echo ($vo["hid"]); ?></td>
					<td><?php echo ($vo["hname"]); ?></td>
					<td><?php echo ($vo["hcity"]); ?></td>
					<td><?php echo ($vo["hphone"]); ?></td>
					<td><?php echo ($vo["hlevel"]); ?></td>
					<td class="text-l"><a class="maincolor" href="javascript:;" onClick="picture_edit('查看房间信息','__URL__/hroomshow','<?php echo ($vo["hid"]); ?>')"><?php echo ($vo["hroom"]); ?></a></td>
					<td><?php echo ($vo["haddress"]); ?></td>
					<td><?php echo ($vo["hinfo"]); ?></td>
					<td><?php echo ($vo["aname"]); ?></td>
					<td><?php echo ($vo["hctime"]); ?></td>
					<td class="td-status"><span class="label label-success radius">已发布</span></td>
					<td class="td-manage"><a style="text-decoration:none" onClick="picture_stop(this,'10001')" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_edit('图库编辑','picture-add.html','10001')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="picture_del(this,'<?php echo ($vo["hid"]); ?>','<?php echo ($vo["aname"]); ?>')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</div>

<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="__PUBLIC__/static/h-ui/js/H-ui.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/static/h-ui.admin/js/H-ui.admin.js"></script>
<!--/_footer 作为公共模版分离出去-->

<!--请在下方写此页面业务相关的脚本-->
<script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/4.8/WdatePicker.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/datatables/1.10.0/jquery.dataTables.min.js"></script> 
<script type="text/javascript" src="__PUBLIC__/lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript">
//搜索酒店
function search_hotel(){
//	var tsort=document.t_search.toursort;
	var hmin=document.h_search.logmin;
	var hmax=document.h_search.logmax;
	var hcity=document.h_search.cityname;
	if(hmin.value=='' && hmax.value=='' && hcity.value==''){
		alert('您还没有输入任何内容！');
	}else{
		document.h_search.submit();
	}
}

//排序
$('.table-sort').dataTable({
	"aaSorting": [[ 1, "desc" ]],//默认第几个排序
	"bStateSave": true,//状态保存
	"aoColumnDefs": [
	  //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
	  {"orderable":false,"aTargets":[0,8]}// 制定列不参与排序
	]
});

/*酒店-添加*/
function picture_add(title,url){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-查看*/
function picture_show(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*图片-审核*/
function picture_shenhe(obj,id){
	layer.confirm('审核文章？', {
		btn: ['通过','不通过'], 
		shade: false
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_start(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布', {icon:6,time:1000});
	},
	function(){
		$(obj).parents("tr").find(".td-manage").prepend('<a class="c-primary" onClick="picture_shenqing(this,id)" href="javascript:;" title="申请上线">申请上线</a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-danger radius">未通过</span>');
		$(obj).remove();
    	layer.msg('未通过', {icon:5,time:1000});
	});	
}

/*图片-下架*/
function picture_stop(obj,id){
	layer.confirm('确认要下架吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_start(this,id)" href="javascript:;" title="发布"><i class="Hui-iconfont">&#xe603;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-defaunt radius">已下架</span>');
		$(obj).remove();
		layer.msg('已下架!',{icon: 5,time:1000});
	});
}

/*图片-发布*/
function picture_start(obj,id){
	layer.confirm('确认要发布吗？',function(index){
		$(obj).parents("tr").find(".td-manage").prepend('<a style="text-decoration:none" onClick="picture_stop(this,id)" href="javascript:;" title="下架"><i class="Hui-iconfont">&#xe6de;</i></a>');
		$(obj).parents("tr").find(".td-status").html('<span class="label label-success radius">已发布</span>');
		$(obj).remove();
		layer.msg('已发布!',{icon: 6,time:1000});
	});
}

/*图片-申请上线*/
function picture_shenqing(obj,id){
	$(obj).parents("tr").find(".td-status").html('<span class="label label-default radius">待审核</span>');
	$(obj).parents("tr").find(".td-manage").html("");
	layer.msg('已提交申请，耐心等待审核!', {icon: 1,time:2000});
}

/*图片-编辑*/
function picture_edit(title,url,id){
	var index = layer.open({
		type: 2,
		title: title,
		content: url
	});
	layer.full(index);
}

/*酒店-删除*/
function picture_del(obj,hid,aname){
	layer.confirm('确认要删除吗？',function(index){
		$.ajax({
			data:{
				hid:hid,
				aname:aname
			},
			type: 'POST',
			url: '__URL__/del',
			async:false,
			dataType: 'json',
			success: function(data){
				//$(obj).parents("tr").remove();
				//layer.msg('已删除!',{icon:1,time:1000});
				if(data && parseInt(data)>0){
					$(obj).parents("tr").remove();
					layer.msg('已删除!',{icon:1,time:1000});
				}else{
					layer.msg(data,{icon:1,time:3000});
				}
			}
		});		
	});
}
</script>
</body>
</html>