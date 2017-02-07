<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<!--声明当前页面的编码集charset=gbk中文编码gb2312,charset=utf-8 国际编码-->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<!--当前页面的三要素-->
		<title>标题</title>
		<meta name="Keywords" content="关键词,关键词">
		<meta name="description" content="描述">		
		<!--css , js-->
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/public.css">

<style type="text/css">
*{margin:0px; padding:0px;}
#Ly{width:750px; height:430px; margin:50px auto 50px;
		box-shadow:0px 0px 10px #000; padding:25px;}
#Ly p{font-size:12px; line-height:20px; padding-top:20px;}

#Ly table tr td{ padding-top:10px;}
#Ly table tr td.t1{width:80px; font-size:12px; text-align:right;}
#Ly table tr td input{width:275px; height:35px; border:1px solid #ddd;}
#Ly table tr td select{width:200px; height:35px; border:1px solid #ddd;}
#Ly table tr td textarea{width:645px; height:88px;border:1px solid #ddd;}
#Ly table tr td input.but1{width:123px; height:37px; background:url("<?php bloginfo('template_url'); ?>/images/but_submit.jpg");border:0px;}
#Ly table tr td input.but2{width:123px; height:37px; background:url("<?php bloginfo('template_url'); ?>/images/but_reset.jpg");border:0px;}
</style>

	</head>

<body class="webBody">
<?php get_header(); ?> 
<div id="Ly">
	<img src="<?php bloginfo('template_url'); ?>/images/feedback.jpg" />
	<p>如何您有任何建议想对我们说，可以通过下面的方式发送信息给我们。我们将非常乐意跟你畅快的交流！ 请留下您准确的联系方式，我们承诺对您的个人信息保密。</p>

	<form enctype="multipart/form-data" class="fm-form" method="post" action="http://localhost/web/?page_id=173" name="fm-form-3" id="fm-form-3" autocomplete="on" >
		<table>
			<tr><td class="t1">姓名：</td>
			<td><input type="text" name="text-549c142d8ab7b" id="text-549c142d8ab7b"/></td>

			<td class="t1">性别：</td><td>
				<select name="custom_list-549c14e0a7d02" id="custom_list-549c14e0a7d02">
					<option selected="selected" value="1">男</option>
					<option value="2">女</option>
				</select><input type="hidden" id="custom_list-549c14e0a7d02-list-style" value="select" /><input type="hidden" id="custom_list-549c14e0a7d02-count" value="2" /></td>


			</tr>
			<tr><td class="t1">手机：</td>
				<td><input type="text" name="text-549c1517e7d35" id="text-549c1517e7d35"/></td>
				<td class="t1">年龄：</td><td>
				<input type="text" name="text-549c15304fe32" id="text-549c15304fe32"/></td>
			</tr>

			<tr><td class="t1">喜欢课程：</td><td><select name="custom_list-549c153ea49e7" id="custom_list-549c153ea49e7">
					<option value="1" selected="selected">动漫</option>
					<option value="2">网页制作</option>
					<option value="3">ps</option>
				</select><input type="hidden" id="custom_list-549c153ea49e7-list-style" value="select" /><input type="hidden" id="custom_list-549c153ea49e7-count" value="3" /></td>

				<td class="t1">QQ：</td>
				<td><input type="text" name="text-549c1576b6bd6" id="text-549c1576b6bd6"/></td>
			</tr>
			<tr><td class="t1">所在地：</td><td><input type="text" name="text-549c15c5c372c" id="text-549c15c5c372c"/></td><td class="t1"></td><td></td>
			</tr>
			<tr><td class="t1">补充的内容：</td><td colspan='3'><textarea name="textarea-549c15e810bd6" id="textarea-549c15e810bd6"></textarea></td>
			</tr>
			<tr><td class="t1"></td><td colspan='3'>
			<input type="submit" class="but1" value="" name="fm_form_submit" id="fm_form_submit"/>
			<input type="reset"  class="but2" value=""/></td></tr>
			<input type="hidden" name="fm_nonce" id="fm_nonce" value="902984ae82" />
<input type="hidden" name="fm_id" id="fm_id" value="3" />
<input type="hidden" name="fm_uniq_id" id="fm_uniq_id" value="fm-549c18f9e26f7" />
<input type="hidden" name="fm_parent_post_id" id="fm_parent_post_id" value="173" />
		</table>
	</form>
</div>	

<!--
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?> 
	<?php the_content(); ?> 
<?php endwhile; ?> 
<?php endif; ?>
-->

<?php get_footer() ?>
</body>
</html>