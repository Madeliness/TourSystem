<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Real Estate Builders Free Responsive Website Templates - icon">
	<meta name="author" content="">
	<title>Home</title>
	<link rel="favicon" href="__PUBLIC__/assets/images/favicon.png">
	<link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="__PUBLIC__/assets/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="__PUBLIC__/assets/css/bootstrap-theme.css" media="screen"> 
	<link rel="stylesheet" href="__PUBLIC__/assets/css/style.css">
    <link rel='stylesheet' id='camera-css'  href='__PUBLIC__/assets/css/camera.css' type='text/css' media='all'> 
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="__PUBLIC__/assets/js/html5shiv.js"></script>
	<script src="__PUBLIC__/assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				<a class="navbar-brand" href="index.html">
					<img src="__PUBLIC__/assets/images/logo.png" alt="Techro HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right mainNav">
					<li><a href="__APP__/Index/index">首页</a></li>
					<li><a href="__APP__/Tour/index">风景</a></li>
					<li><a href="__APP__/Hotel/index">住宿</a></li>
					<li><a href="__APP__/Line/index">线路</a></li>
					<li><a href="__APP__/Localpro/cases">美食</a></li>
					<li><a href="__APP__/Info/index">资讯</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
							<li><a href="#">Dummy Link1</a></li>
							<li><a href="#">Dummy Link2</a></li>
							<li><a href="#">Dummy Link3</a></li>
						</ul>
					</li>
					<li><a href="__ROOT__/admin.php/Index/index">admin</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>
	<!-- /.navbar -->
	<form action="__URL__/tour" method="post"><input value="" name="tid"/><input type="submit"value="dian" /></form>
	<!-- Header -->
	<header id="head">
		<div class="container">
					<div class="fluid_container">
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        <div data-thumb="__PUBLIC__/assets/images/slides/thumbs/slide1.png" data-src="__PUBLIC__/assets/images/slides/slide1.png">
                        </div> 
                        <div data-thumb="__PUBLIC__/assets/images/slides/thumbs/slide2.png" data-src="__PUBLIC__/assets/images/slides/slide2.png">
                        </div>
                        <div data-thumb="__PUBLIC__/assets/images/slides/thumbs/slide3.png" data-src="__PUBLIC__/assets/images/slides/slide3.png">
                        </div> 
                    </div><!-- #camera_wrap_3 -->
                </div><!-- .fluid_container -->
		</div>
	</header>
	<!-- /Header -->
      <section class="secpadding">
	  <div class="container">
      <div class="row">
      	<div class="col-md-12"><div class="title-box clearfix "><h3 class="title-box_primary">欢迎来到陕西旅游</h3></div> 
        <p style="text-indent:2em;font-size:16px;line-height:2;"> 陕西是中国旅游资源最富集的省份之一，资源品位高、存量大、种类多、文化积淀深厚，地上地下文物遗存极为丰富，被誉为“天然的历史博物馆”。全省现有各类文物点3.58万处、博物馆151座、馆藏各类文物90万件（组），文物点密度之大、数量之多、等级之高，均居全国首位。浏览这座“天然历史博物馆”，随处可看到古代城阙遗址、宫殿遗址、古寺庙、古陵墓、古建筑等，如“世界第八大奇迹”秦始皇兵马俑，中国历史上第一个女皇帝武则天及其丈夫唐高宗李治的合葬墓乾陵，佛教名刹法门寺，中国现存规模最大、保存最完整的古代城垣西安城墙，中国最大的石质书库西安碑林，仅古代帝王陵墓就有72座。全省各地的博物馆内陈列的西周青铜器、秦代铜车马、汉代石雕、唐代金银器、宋代瓷器及历代碑刻等稀世珍宝，闪烁着耀眼的历史光环，昔日的周秦风采、汉唐雄风从中可窥一斑。</p> </div>
        </div>
		</div>
		</section>
	 <section id="packages" class="secpadding">
        <div class="container">
             <h3><span>热门景点推荐<?php echo ($count); ?></span></h3>
            <div class="row">
			<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3 col-sm-6" data-tid="<?php echo ($vo["tid"]); ?>">
                            <div class="cuadro_intro_hover " style="background-color:#cccccc;">
                                <p style="text-align:center;">
                                    <img src="__PUBLIC__/assets/images/pic/pic-1.jpg" class="img-responsive" alt="">
                                </p>
                                <div class="caption">
                                    <div class="blur"></div>
                                    <div class="caption-text">
                                        <h3><?php echo ($vo["tname"]); ?>·<?php echo ($vo["tcity"]); ?></h3> 
                                        <a class=" btn btn-default" href="#">￥<?php echo ($vo["ticket"]); ?></i></a>
                                    </div>
                                </div>
                            </div>
                        
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>       
         </div>
    </section>
      <section class="news-box secpadding">
        <div class="container">
            <h3><span>星级酒店推荐</span></h3>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news1.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                                <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news2.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news3.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news4.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<section class="news-box secpadding">
        <div class="container">
            <h3><span>热门线路推荐</span></h3>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news1.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                                <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news2.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news3.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                            <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                    <div class="newsBox">
                        <div class="thumbnail">
                            <figure><img src="__PUBLIC__/assets/images/news4.jpg" alt=""></figure>
                            <div class="caption maxheight2">
                           <div class="box_inner">
                                        <div class="box">
                                            <p class="title"><strong>Lorem ipsum</strong></p>
                                            <p>Lorem ipsum dolor sit amet, conc tetu er adipi scing. </p>
                                        </div>
                                        <div>
                                            <a href="#" class="btn-inline">more</a>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
	
      <section class="btm-section secpadding">
	  <div class="container">
      <div class="row">
      	    <div class="col-md-4"><div class="title-box clearfix "><h4 class="title-box_primary">美食小吃</h4></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
            </ul>
            </div>
         </div>
        
        <div class="col-md-4"><div class="title-box clearfix "><h4 class="title-box_primary">土特产</h4></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
            </ul>
            </div>
         </div>
         <div class="col-md-4"><div class="title-box clearfix "><h4 class="title-box_primary">旅游资讯</h4></div> 
            <div class="list styled custom-list">
            <ul>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">Singapore Township</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">Mega luxury Villas</a></li>
            <li><a title="Penatibus et magnis dis parturient montes ascetur ridiculus mus." href="#">RNT Commercial Shopping Mall</a></li>
            <li><a title="Morbi nunc odio gravida at cursus nec luctus a lorem. Maecenas tristique orci." href="#">SVN Independent & Duplex Houses</a></li>
            <li><a title="Snatoque penatibus et magnis dis partu rient montes ascetur ridiculus mus." href="#">World wide IT park</a></li>
            <li><a title="Fusce feugiat malesuada odio. Morbi nunc odio gravida at cursus nec luctus." href="#">North Arena SNT Township</a></li>
            </ul>
            </div>
         </div>
         
      </div></div>
      </section>
       <footer id="footer">
		<div class="footer2">
			<div class="container">
				<div class="row">
					<div class="col-md-6 panel">
						<div class="panel-body">
							<a href="__APP__/Index/index">首页</a> | 
							<a href="__APP__/Tour/index">景点</a> |
							<a href="__APP__/Hotel/index">住宿</a> |
							<a href="__APP__/Line/index">线路</a> |
							<a href="__APP__/Localpro/cases">特产</a> |
							<a href="__APP__/Info/index">资讯</a>
						</div>
					</div>
					<div class="col-md-6 panel">
						<div class="panel-body">
							<p class="text-right">
								Copyright &copy;2017 the tourinfo management system devoloped on my own,zjj.
							</p>
						</div>
					</div>
				</div>
				<!-- /row of panels -->
			</div>
		</div>
	</footer>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<!--<script src="__PUBLIC__/assets/js/modernizr-latest.js"></script> -->
	<script type='text/javascript' src='__PUBLIC__/assets/js/jquery.min.js'></script>
    <script type='text/javascript' src='__PUBLIC__/assets/js/fancybox/jquery.fancybox.pack.js'></script>
    
    <script type='text/javascript' src='__PUBLIC__/assets/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='__PUBLIC__/assets/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='__PUBLIC__/assets/js/camera.min.js'></script> 
    <script src="__PUBLIC__/assets/js/bootstrap.min.js"></script> 
	<script src="__PUBLIC__/assets/js/custom.js"></script>
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: '460',
				loader: 'bar',
				pagination: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: '__PUBLIC__/assets/images/'
			});

		});
	</script>
    
</body>
</html>