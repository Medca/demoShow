<!doctype html>
<html>
	 <head>
		  <!--声明当前页面的编码级：charset=gbk,gb2312(中文编码)，utf-8国际编码-->   
		  <meta http-equiv="Content-Type" content="Text/html;" charset="UTF-8">
		  <!--当前页面的三要素-->
		  <title></title>
		  <meta name="Keywords" content="关键词,关键词">
		  <meta name="Description" content="">
		  <style>
			#Part3
		  </style>
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
	<div class="web_Qz">

	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<dl>
			<dt><a href="<?php the_permalink() ?>"><?php the_post_thumbnail( array(171,113) ); ?></a></dt>
			<dd class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></dd>
			<dd><span>优 惠 价：<font><?php the_field('yhj'); ?></font></span><span>签证有效期：<font><?php the_field('qzyxq'); ?></font></span></dd>
			<dd><span>入境次数：<font><?php the_field('rjcs'); ?></dd><dd></font></span><span>最长停留时间：<font><?php the_field('zctlsj'); ?></font></span></dd>
			<dd><span>办理时长：<font><?php the_field('blsc'); ?></font></span><span>面试：<font><?php the_field('ms'); ?></font></span></dd>
		</dl>
<?php endwhile; ?>
<?php else : ?>
<!--此处显示未找到文章时的信息，比如404相关-->
<?php endif; ?>
		<div style="clear:both"></div>
<?php wp_pagenavi(); ?>
	</div>

</div>
<!--内页主体内容结束-->






<?php get_footer() ?> 

 </body>

</html>
