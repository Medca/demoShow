<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<!--声明当前页面的编码集charset=gbk中文编码gb2312,charset=utf-8 国际编码-->
		<meta http-equiv="Content-Type" content="text/html; charset=gbk">
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
	<div id="web_Search">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>



		<dl>
			<dt><a href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a></dt>
			<dd class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dd>
			<dd class="info">[行程特色] <?php the_field('xcts'); ?></dd>
			<dd>参考报价：<font><?php the_field('ckbj'); ?>元</font></dd>
			<dd>优惠信息：<span><?php the_field('yhxx'); ?></span></dd>
			<dd>提前报名：<span><?php the_field('tqbm'); ?></span></dd>
			<dd>往返交通：<span><?php the_field('wfjt'); ?></span></dd>
			<dd class="more"><a href="<?php the_permalink() ?>">点击查看详情</a></dd>
		</dl>

<?php endwhile; ?>
<?php else : ?>
<!--此处显示未找到文章时的信息，比如404相关-->
<?php endif; ?>

	
	<div style="clear:both"></div></div>
<?php wp_pagenavi(); ?>

</div>
<!--内页主体内容结束-->


<?php get_footer() ?>

</body>
</html>