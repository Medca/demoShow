<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<!--声明当前页面的编码集charset=gbk中文编码gb2312,charset=utf-8 国际编码-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--当前页面的三要素-->
		<title>魔鬼训练班_静态网站首页开发二</title>
		<meta name="Keywords" content="关键词,关键词">
		<meta name="description" content="">	
		<!--css , js-->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/public.css">

	</head>
<body class="webBody">
<?php get_header(); ?> 

<!--内页主体内容开始-->
<!--面包屑导航开始-->
<div class="webLogo">您现在所在的位置：<?php if (function_exists('dimox_breadcrumbs')) dimox_breadcrumbs(); ?></div>
<!--面包屑导航结束-->
<div id="WebCon">
	<!--第一部分开始-->
	<div id="Deltail_part1">
		<!--left start-->
		<div class="Deltail_part1_L">
			<div class="Deltail_img">
				<?php 
		if( function_exists( 'easy_image_gallery' ) ) {  
			echo easy_image_gallery(); } 
	?>

			</div>

			<div class="Deltail_but">
				<?php 
		if( function_exists( 'easy_image_gallery' ) ) {  
			echo easy_image_gallery(); } 
	?>
			</div>
		</div>
		<!--left end-->

		<!--right start-->
		<div class="Deltail_part1_R">
			<h1><?php the_title(); ?></h1>
			<p class="info bor"><span>[行程特色]</span> <?php the_field('xcts'); ?></p>
			<p class="common paddTop"><font>参考报价：</font><span><?php the_field('ckbj'); ?>元</span></p>
			<p class="common"><font>优惠信息：</font><?php the_field('yhxx'); ?></p>
			<p class="common"><font>提前报名：</font><?php the_field('tqbm'); ?></p>
			<p class="common bor"><font>往返交通：</font><?php the_field('wfjt'); ?></p>
			<p  class="common"><font>付款方式：</font> 
				<img src="<?php bloginfo('template_url'); ?>/images/xlxqzftb1.png" align="absmiddle" />支付宝
				<img src="<?php bloginfo('template_url'); ?>/images/xlxqzftb2.png" align="absmiddle" />信用卡   
				<img src="<?php bloginfo('template_url'); ?>/images/xlxqzftb3.png" align="absmiddle" />网银支付
			</p>
			<p class="common"><font>价格类型：</font><span class="priceType"><?php the_field('jgnx'); ?></span></p>
			<p class="common bor">预定前请先咨询客服！点击咨询 
									<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/kfQQ.png" /></a>
			</p>

			<p class="but"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/xlxqljydan.jpg" /></a>
				<a href=""><img src="<?php bloginfo('template_url'); ?>/images/xlxqjrscan.jpg" /></a>
			</p>
			
		</div>
		<!--right end-->
	</div>
	<!--第一部分结束-->

	<!--内容详情开始-->
	<div id="Deltail_Con">
		<!--栏目导航开始-->
		<ul class="Deltail_Menu">
			<li><a href="#Deltail_con1" class="hover">线路特色</a></li>
			<li><a href="#Deltail_con2">参考行程</a></li>
			<li><a href="#Deltail_con3">途经景点</a></li>
			<li><a href="#Deltail_con4">费用说明</a></li>
			<li><a href="#Deltail_con5">温馨提醒</a></li>
		</ul>
		<!--栏目导航结束-->

		<div class="Deltail_Common" id="Deltail_con1">
			<h2 class="Deltail_title">线路特色</h2>
			<div class="Deltail_Common_con">
				<?php the_field('xlts'); ?>
			</div>
		</div>

		<div class="Deltail_Common" id="Deltail_con2">
			<h2 class="Deltail_title">参考行程</h2>
			<div class="Deltail_Common_con">
			<?php the_field('ckxc'); ?>
			</div>
		</div>

		<div class="Deltail_Common" id="Deltail_con3">
			<h2 class="Deltail_title">途经景点</h2>
			<div class="Deltail_Common_con">
				<?php the_field('tjjd'); ?>
			</div>
		</div>

		<div class="Deltail_Common" id="Deltail_con4">
			<h2 class="Deltail_title">费用说明</h2>
			<div class="Deltail_Common_con">
				<?php the_field('fysm'); ?>
			</div>
		</div>

		<div class="Deltail_Common" id="Deltail_con5">
			<h2 class="Deltail_title">温馨提醒</h2>
			<div class="Deltail_Common_con">
				<?php the_field('wxtx'); ?>
			</div>
		</div>


	</div>
	<!--内容详情结束-->






</div>
<!--内页主体内容结束-->

<?php get_footer() ?>
</body>
</html>