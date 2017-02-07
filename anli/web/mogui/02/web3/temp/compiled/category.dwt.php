<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Author" content="清心老师">
  <meta name="Keywords" content="ecshop商城开发">
  <meta name="Description" content="一个月打造商城-清心主讲">
  <title>Ecshop商城开发产品页--清心老师</title>
 
 <link type="text/css" rel="stylesheet"  href="themes/default/style.css">
 <link type="text/css" rel="stylesheet"  href="themes/default/css/web.css">
 <?php echo $this->smarty_insert_scripts(array('files'=>'common.js,compare.js')); ?>

 </head>
 <body>
<?php echo $this->fetch('library/page_header.lbi'); ?>




<div id="webIntro">
	<div class="webIntroCon">
		
		<div class="hotIntro">
			<img src="themes/default/images/webintro.jpg"  class="hotimg"/>
			<div class="hotList">
			<?php echo $this->fetch('library/recommend_best.lbi'); ?>	
	
			</div>
		</div>
		

		
		<div class="newIntro">
			<img src="themes/default/images/commintro.jpg"  class="imgNew" />
			<ul>
				<li><a href="">·&nbsp;&nbsp;国际起泡酒节 每天9.9元秒</a></li>
				<li><a href="">·&nbsp;&nbsp;暑期狂欢游 美酒买一赠一</a></li>
				<li><a href="">·&nbsp;&nbsp;大牌红酒1元秒</a></li>
				<li><a href="">·&nbsp;&nbsp;酷爽7月 冰点价低至1折</a></li>
				<li><a href="">·&nbsp;&nbsp;买酒送酒柜 比39元更低</a></li>
			</ul>
		</div>
		
	</div>
</div>




<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>






<div id="searchType">
	<h3>礼物综合搜索</h3>

 
	  <?php if ($this->_var['brands']['1'] || $this->_var['price_grade']['1'] || $this->_var['filter_attr_list']): ?>

<?php if ($this->_var['brands']['1']): ?>
	<dl>
		<dt><?php echo $this->_var['lang']['brand']; ?>：</dt>
		<dd>
		<?php $_from = $this->_var['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brand');if (count($_from)):
    foreach ($_from AS $this->_var['brand']):
?>
			<?php if ($this->_var['brand']['selected']): ?>
				<span style="background:red;color:#fff; padding:5px;"><?php echo $this->_var['brand']['brand_name']; ?></span>
			<?php else: ?>
				<a href="<?php echo $this->_var['brand']['url']; ?>"><?php echo $this->_var['brand']['brand_name']; ?></a>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd>
		<div style="clear:both"></div>
	</dl>
	
<?php endif; ?>	



<?php if ($this->_var['price_grade']['1']): ?>
	<dl>
		<dt><?php echo $this->_var['lang']['price']; ?>：</dt>
		<dd>
			<?php $_from = $this->_var['price_grade']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'grade');if (count($_from)):
    foreach ($_from AS $this->_var['grade']):
?>
				<?php if ($this->_var['grade']['selected']): ?>
				<span style="background:red;color:#fff; padding:5px;"><?php echo $this->_var['grade']['price_range']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['grade']['url']; ?>"><?php echo $this->_var['grade']['price_range']; ?></a>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd><div style="clear:both"></div>
	</dl>
<?php endif; ?>	
	
	
	
<?php $_from = $this->_var['filter_attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'filter_attr_0_55159700_1441630545');if (count($_from)):
    foreach ($_from AS $this->_var['filter_attr_0_55159700_1441630545']):
?>	
	<dl>
		<dt><?php echo htmlspecialchars($this->_var['filter_attr_0_55159700_1441630545']['filter_attr_name']); ?> :</dt>
		<dd>
			<?php $_from = $this->_var['filter_attr_0_55159700_1441630545']['attr_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'attr');if (count($_from)):
    foreach ($_from AS $this->_var['attr']):
?>
				<?php if ($this->_var['attr']['selected']): ?>
				<span style="background:red;color:#fff; padding:5px;"><?php echo $this->_var['attr']['attr_value']; ?></span>
				<?php else: ?>
				<a href="<?php echo $this->_var['attr']['url']; ?>"><?php echo $this->_var['attr']['attr_value']; ?></a>&nbsp;
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		</dd>
		<div style="clear:both"></div>
	</dl>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>


	
	  <?php endif; ?>
	 	
</div>






 <?php echo $this->fetch('library/goods_list.lbi'); ?>
 <?php echo $this->fetch('library/pages.lbi'); ?>
  



<?php echo $this->fetch('library/page_footer.lbi'); ?>



<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js')); ?>

<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<script type="text/javascript" src="themes/default/js/index.js"></script>



<!--
	1、在News大盒子里面，构建两个一样大小的长方形，一个用来设背景透明，一个利用绝定位，盖在透明
	图层上面，用来放内容
	2、利用 h3标签来制作标题部分（颜色，大小，字体类型，竖直居中，首行缩进text-indent:20px;）
	3、利用 ul来制作新闻列表，文字竖直间距利用行高 line-height:30px;  给 ul添加对应的内边距，使文字与上右下左产生一定的间距。
	4、给文字加上了 a标签超链接，如何优化我们代码，代码的性能,如果把常用样式，统一初始化，我们选择的是用标签来表达，而不是用 *
-->




 </body>
</html>
