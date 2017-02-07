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
	<div id="Web_QzDeltail">
		<!--签证信息介绍开始-->
		<dl>
			<dt><?php the_post_thumbnail( array(251,116) ); ?></dt>
			<dd class="title"><?php the_title(); ?></dd>
			<dd><span>优 惠 价：<font><?php the_field('yhj'); ?></font></span><span>签证有效期：<font><?php the_field('qzyxq'); ?></font></span>
				<span>入境次数：<font><?php the_field('rjcs'); ?></font></span></dd>
			<dd><span>最长停留时间：<font><?php the_field('zctlsj'); ?></font></span><span>办理时长：<font><?php the_field('blsc'); ?></font></span><span>面试：<font><?php the_field('ms'); ?></font></span></dd>
			<dd><span><font>友情提示：</font></span> <?php the_field('yqts'); ?></dd>
			<dd class="but"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/xlxqljydan.jpg" /></a></dd>
		</dl><div style="clear:both"></div>
		<!--签证信息介绍结束-->

		<!--签证栏目开始-->
		<div class="Web_QzNav">
			<font>签证所需材料<i></i></font> 
			<span class="hover">在职人员</span><span>自由职业</span><span>在校学生</span><span>退休人员</span>
			<span>学龄前儿童</span>
			
		</div>
		<!--签证栏目结束-->
	

		<!--滚动区的内容开始-->
		<div class="Web_QzScroll">
			<div class="Web_QzScrollCon" > <?php the_field('zzry'); ?></div>
			<div class="Web_QzScrollCon" > <?php the_field('zyzy'); ?></div>
			<div class="Web_QzScrollCon" > <?php the_field('zxxs'); ?></div>
			<div class="Web_QzScrollCon" > <?php the_field('txry'); ?></div>
			<div class="Web_QzScrollCon" > <?php the_field('xlqet'); ?></div>
		</div>
		<!--滚动区的内容结束-->

		<!--信息提示开始-->
		<div class="web_QzDeltailInfo">
			<span>预定须知</span>
			<p>本人声明：本人已阅读签证须知并明白其中条款，保证所填写内容完全属实，如有虚假，本人将承担由此造成的一切损失及后果！</p>
			<span>温馨提示</span>
			<p>签证工作天数: 工作日从收齐资料后第二天计起，工作日受领事馆影响</p>
			<span>预订流程</span>
			<p>请根据您的出行时间，提前按照相关签证的使馆要求 准备相关签证资料；签证材料需要审核，请与相关客服人员联系。</p>
		</div>
		<!--信息提示结束-->
	</div>



</div>
<!--内页主体内容结束-->


<?php get_footer() ?>
</body>
</html>