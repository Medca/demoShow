<!doctype html>
<html>
	 <head>  
		  <meta http-equiv="Content-Type" content="Text/html;" charset="UTF-8">
		  <title>分享页</title>
		  <meta name="Keywords" content="关键词,关键词">
		  <meta name="Description" content="">
		  <style class="text/css">
				*{margin:0px;padding:0px;}
				img{border:0}
				.ck{width:300px;height:300px;background:#999933;padding:10px;}
				.ck h3{line-height:40px;color:#fff}
				.ck .title{width:290px;height:30px;border:1px solid #ddd;}
				.ck p{line-height:40px;color:#fff;font-weight:400;}
				.ck textarea{width:290px;height:100px;border:1px solid #ddd;}
				.ck .btn{width:80px;height:35px; background:#ff9966;color:#fff; font-size:14px;border:0px; border-radius:5px; float:right; margin:10px;}
		  </style>
	 </head>
 <body>
  <div class="ck">
	<form>
		<h3>分享标题<h3>
		<input type="text" name="title" class="title"/>
		<p>分享内容</p>
		<textarea>
			<?php echo $_GET['con']; ?>

			<?php echo $_GET['address']; ?>
		</textarea>
		<p><input type="button" value="提交" class="btn"></p>
	</form>
  </div>
 </body>
</html>
