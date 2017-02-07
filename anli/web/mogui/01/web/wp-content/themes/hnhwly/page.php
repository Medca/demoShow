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
	<div id="web_page">
		<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?> 
	<?php the_content(); ?> 
<?php endwhile; ?> 
<?php endif; ?>


	<div style="clear:both"></div></div>

</div>
<!--内页主体内容结束-->


<?php get_footer() ?>

</body>
</html>