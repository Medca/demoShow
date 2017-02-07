<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Author" content="清心老师">
  <meta name="Keywords" content="ecshop商城开发">
  <meta name="Description" content="一个月打造商城-清心主讲">
  <title>Ecshop商城开发详情页--清心老师</title>
 
 <link type="text/css" rel="stylesheet"  href="themes/default/style.css">
 <link type="text/css" rel="stylesheet"  href="themes/default/css/web.css">

 
<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
 <script type="text/javascript">
function $id(element) {
  return document.getElementById(element);
}
//切屏--是按钮，_v是内容平台，_h是内容库
function reg(str){
  var bt=$id(str+"_b").getElementsByTagName("h2");
  for(var i=0;i<bt.length;i++){
    bt[i].subj=str;
    bt[i].pai=i;
    bt[i].style.cursor="pointer";
    bt[i].onclick=function(){
      $id(this.subj+"_v").innerHTML=$id(this.subj+"_h").getElementsByTagName("blockquote")[this.pai].innerHTML;
      for(var j=0;j<$id(this.subj+"_b").getElementsByTagName("h2").length;j++){
        var _bt=$id(this.subj+"_b").getElementsByTagName("h2")[j];
        var ison=j==this.pai;
        _bt.className=(ison?"":"h2bg");
      }
    }
  }
  $id(str+"_h").className="none";
  $id(str+"_v").innerHTML=$id(str+"_h").getElementsByTagName("blockquote")[0].innerHTML;
}

</script>
 </head>
 <body>



<?php echo $this->fetch('library/page_header.lbi'); ?>





<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>





<div id="webCon">

	
	<div class="web_ProductImg">
	
		<div id="box">

			
			<div class="simg">
			 <?php if ($this->_var['pictures']): ?>
     		 <img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="450" height="450"/>
         	<?php else: ?>
        	<img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="450" height="450"/>
         	<?php endif; ?>
		 
				<span class="move"></span>
				<span class="shade"></span>
			</div>
			

			
			<div class="but">
				<?php echo $this->fetch('library/goods_gallery.lbi'); ?>
			</div>
			

			
			<div class="bimg">
				<?php if ($this->_var['pictures']): ?>
				<img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" />
				<?php else: ?>
				<img src="<?php echo $this->_var['goods']['goods_img']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" />
				<?php endif; ?> 
			</div>
			

		</div>
	
	</div>
	
	
	
	
	
	


	<div class="web_ProductXq">
	<form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		<ul>
			<li class="title"> <?php echo $this->_var['goods']['goods_style_name']; ?></li>
			<?php if ($this->_var['promotion']): ?>
			<li>
				 <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
		  <?php echo $this->_var['lang']['activity']; ?>
		  <?php if ($this->_var['item']['type'] == "snatch"): ?>
		  <a href="snatch.php" title="<?php echo $this->_var['lang']['snatch']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['snatch']; ?>]</a>
		  <?php elseif ($this->_var['item']['type'] == "group_buy"): ?>
		  <a href="group_buy.php" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a>
		  <?php elseif ($this->_var['item']['type'] == "auction"): ?>
		  <a href="auction.php" title="<?php echo $this->_var['lang']['auction']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['auction']; ?>]</a>
		  <?php elseif ($this->_var['item']['type'] == "favourable"): ?>
		  <a href="activity.php" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a>
		  <?php endif; ?>
		  <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#006bcd;"><?php echo $this->_var['item']['act_name']; ?></a><br />
		  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</li>
			<?php endif; ?>
			<li class="two">
				<?php if ($this->_var['cfg']['show_goodssn']): ?>
				<p><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong><?php echo $this->_var['goods']['goods_sn']; ?></p>
				 <?php endif; ?>
				 <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['show_goodsnumber']): ?>
        <?php if ($this->_var['goods']['goods_number'] == 0): ?>
          <p><strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <font color='red' style="font-size:20px;"><?php echo $this->_var['lang']['stock_up']; ?></font></p>
        <?php else: ?>
          <p><strong><?php echo $this->_var['lang']['goods_number']; ?></strong>
          <?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?></p>
        <?php endif; ?>
      <?php endif; ?>
			</li>
			<li class="two">
			 <?php if ($this->_var['goods']['goods_brand'] != "" && $this->_var['cfg']['show_brand']): ?>
				<p><strong><?php echo $this->_var['lang']['goods_brand']; ?></strong><a href="<?php echo $this->_var['goods']['goods_brand_url']; ?>" ><?php echo $this->_var['goods']['goods_brand']; ?></a></p>
				<?php endif; ?>
		<?php if ($this->_var['cfg']['show_goodsweight']): ?>
       		<p><strong><?php echo $this->_var['lang']['goods_weight']; ?></strong><?php echo $this->_var['goods']['goods_weight']; ?></p>
       <?php endif; ?>
			</li>
			<li  class="bor">
				<p>
				<?php if ($this->_var['cfg']['show_marketprice']): ?>
       <strong><?php echo $this->_var['lang']['market_price']; ?></strong><font class="market"><?php echo $this->_var['goods']['market_price']; ?></font>
       <?php endif; ?>
       
       <strong><?php echo $this->_var['lang']['shop_price']; ?></strong><font class="shop" id="ECS_SHOPPRICE" style="font-size:20px; color:#FF3366;"><?php echo $this->_var['goods']['shop_price_formated']; ?></font>
       <?php $_from = $this->_var['rank_prices']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'rank_price');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['rank_price']):
?>
       <strong><?php echo $this->_var['rank_price']['rank_name']; ?>：</strong><font class="shop" id="ECS_RANKPRICE_<?php echo $this->_var['key']; ?>"><?php echo $this->_var['rank_price']['price']; ?></font>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</p>
			</li>
			
			<?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?>
			  <?php echo $this->smarty_insert_scripts(array('files'=>'lefttime.js')); ?>
			  <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
				  <strong><?php echo $this->_var['lang']['promote_price']; ?></strong><font class="shop"><?php echo $this->_var['goods']['promote_price']; ?></font>
				  <strong><?php echo $this->_var['lang']['residual_time']; ?></strong>
				  <font class="f4" id="leftTime" style="color:red;"><?php echo $this->_var['lang']['please_waiting']; ?></font>
			  </li>
			  <?php endif; ?>
			
			
			
			
			<li class="yh">
			<?php if ($this->_var['volume_price_list']): ?>
				<h3>购买商品达到以下数量区间时可享受的优惠价格：</h3>
				<p class="ti"> <span><?php echo $this->_var['lang']['number_to']; ?></span> <span><?php echo $this->_var['lang']['preferences_price']; ?></span> </p>
				<?php $_from = $this->_var['volume_price_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('price_key', 'price_list');if (count($_from)):
    foreach ($_from AS $this->_var['price_key'] => $this->_var['price_list']):
?>
		<p class="ti money"> <span><?php echo $this->_var['price_list']['number']; ?></span> <span><?php echo $this->_var['price_list']['format_price']; ?></span> </p>
				 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				 <?php endif; ?>
				<p class="allmoney"> 
				<strong><?php echo $this->_var['lang']['amount']; ?>：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font>
				</p>
			</li>
			 
			 
			 
	
	  
		
			<li class="two">
			
				<p>购买数量 <input name="number" type="text" id="number" value="1"  onblur="changePrice()" class="txt"/>
				 </p>
				<?php if ($this->_var['goods']['give_integral'] > 0): ?>
        <p><strong><?php echo $this->_var['lang']['goods_give_integral']; ?></strong><font class="f4"><?php echo $this->_var['goods']['give_integral']; ?> <?php echo $this->_var['points_name']; ?></font></p>
        <?php endif; ?> 
			</li>
			
			   <?php if ($this->_var['goods']['bonus_money']): ?>
			  <li class="padd loop" style="margin-bottom:5px; border-bottom:1px dashed #ccc;">
			  <strong><?php echo $this->_var['lang']['goods_bonus']; ?></strong><font class="shop"><?php echo $this->_var['goods']['bonus_money']; ?></font><br />
			  </li>
			  <?php endif; ?>
			
			
      <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
      <li class="padd loop">
	  <p class="sx">
      <strong><?php echo $this->_var['spec']['name']; ?>:</strong><br />
        
                    <?php if ($this->_var['spec']['attr_type'] == 1): ?>
                      <?php if ($this->_var['cfg']['goodsattr_style'] == 1): ?>
                        <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                        <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                        <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onClick="changePrice()" />
                        <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                        <?php else: ?>
                        <select name="spec_<?php echo $this->_var['spec_key']; ?>" onChange="changePrice()">
                          <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                          <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                        </select>
                        <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                      <?php endif; ?>
                    <?php else: ?>
                      <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                      <label for="spec_value_<?php echo $this->_var['value']['id']; ?>">
                      <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onClick="changePrice()" />
                      <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label><br />
                      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                      <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
                    <?php endif; ?>
		</p>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      
	  
			
			<li class="but">
				<a href="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/Webcar.png" /></a>
				<a href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><img src="themes/default/images/Websc.png" /></a>
			</li>

		</ul>
	
	
	</form>
	</div>
	
<div style="clear:both"></div>	
</div>





<?php echo $this->fetch('library/goods_related.lbi'); ?>




<div id="ProductInfo">

	<ul class="sel">
		<li class="active">商品描述<span></span></li>
		<li>商品属性 <span></span></li>
		<li>用户评论<span></span></li>
		<li>商品购买记录<span></span></li>
	</ul>

	<div id="ProductSelect">
		<div class="selCon" style="display:block;">  <?php echo $this->_var['goods']['goods_desc']; ?></div>
		<div class="selCon">
		
		
		 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
        <?php $_from = $this->_var['properties']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'property_group');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['property_group']):
?>
        <tr>
          <th colspan="2" bgcolor="#FFFFFF"><?php echo htmlspecialchars($this->_var['key']); ?></th>
        </tr>
        <?php $_from = $this->_var['property_group']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'property');if (count($_from)):
    foreach ($_from AS $this->_var['property']):
?>
        <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[<?php echo htmlspecialchars($this->_var['property']['name']); ?>]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%"><?php echo $this->_var['property']['value']; ?></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </table>
	  
			 
		</div>
		<div class="selCon"><?php echo $this->fetch('library/comments.lbi'); ?></div>
		<div class="selCon">
			<?php echo $this->fetch('library/bought_note_guide.lbi'); ?>
		</div>
	</div>
	

</div>







<?php echo $this->fetch('library/page_footer.lbi'); ?>






<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['goodsattr_style']) ? '1' : $this->_var['cfg']['goodsattr_style']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;




onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;

  Ajax.call('goods.php', 'act=price&id=' + goodsId + '&attr=' + attr + '&number=' + qty, changePriceResponse, 'GET', 'JSON');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}

</script>
   <script type="text/javascript">
    <!--
    reg("com");
    //-->
    </script>


 <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
 <?php echo $this->smarty_insert_scripts(array('files'=>'jquery.js')); ?>


<script type="text/javascript">
	$(".but img").mouseover(function(){
		//鼠标滑动到对图片按扭，图片加上红色边框，其它去掉边框
		$(this).addClass("active").siblings("img").removeClass("active"); 

		
		var bimg=$(this).attr("dataSrc");//获取小图片按扭对应的大图片地址
		$(".simg img,.bimg img").attr("src",bimg); //给小图片和大图展示赋值 
		

	});



	//鼠标滑动到遮罩层上.shade 时 ，的操作
	$("#box .simg .shade").hover(function(){
		$(".simg span.move,.bimg").show(); //小滑块和大图展示显示
	},function(){
		$(".simg span.move,.bimg").hide();//小滑块和大图展示隐藏
	});

	//当鼠标在遮罩层上.shade 移动时，动态来获取 小滑块的位置
	$("#box .simg .shade").mousemove(function(e){
		
		var x=e.clientX;  //鼠标与浏览器窗口左边距离
		var y=e.clientY+$(window).scrollTop(); //鼠标与浏览器窗口上面距离


		var l=$(this).offset().left;  //获取.shade与浏览器窗口左边距离
		var t=$(this).offset().top;  //获取 .shade 与浏览器窗口上边距离
		

		var w=$(".simg span.move").width()/2;  //获取小滑块宽度的一半
		var h=$(".simg span.move").height()/2; //获取小滑块高度的一半


		var _left=x-l-w;  //小滑块与 .shade 左边的距离
		var _top=y-t-h;  //小滑块与 .shade 上面的距离


		var bigW=$("#box .simg .shade").width()-w*2-2;  //滑块能滑动的最大宽度
		var bigH=$("#box .simg .shade").height()-h*2-2; //滑块能滑动的最大高度
		//document.title=_left+"="+_top;
		//通过_top判断，小滑块在竖直方向不能移出去 
		if(_top<0){
			_top=0; 
		}else if(_top>bigH){
			_top=bigH;
		}

		//通_left值判断 ，小滑块在水平方向不能移出去
		if(_left<0){
			_left=0;
		}else if(_left>bigW){
			_left=bigW;
		}

		//给小滑块赋值 top  left
		$(".simg span.move").css({"left":_left,"top":_top});


		//获以滑块滑动的宽度和高度的比例
		var wbl=_left/bigW;  //滑动宽度和最大滑动的宽度比例
		var hbl=_top/bigH;  //滑动高度和最大滑动的高度比例

		//document.title=wbl;

		var bigLeft=($(".bimg img").width()-$(".bimg").width())*wbl;  //大图向左移动距离
		var bigTop=($(".bimg img").height()-$(".bimg").height())*hbl;  //大图向上移动距离

		$(".bimg img").css({"left":-bigLeft,"top":-bigTop}); //动态给大图赋值

		
	});

</script>

<script type="text/javascript">
//选项卡效果
$("#ProductInfo ul.sel li").mouseover(function(){
	var _index=$(this).index();
	$(this).addClass("active").siblings("li").removeClass("active");
	$("#ProductSelect .selCon").eq(_index).show().siblings("div").hide();

});

</script>



<!--
	1、在News大盒子里面，构建两个一样大小的长方形，一个用来设背景透明，一个利用绝定位，盖在透明
	图层上面，用来放内容
	2、利用 h3标签来制作标题部分（颜色，大小，字体类型，竖直居中，首行缩进text-indent:20px;）
	3、利用 ul来制作新闻列表，文字竖直间距利用行高 line-height:30px;  给 ul添加对应的内边距，使文字与上右下左产生一定的间距。
	4、给文字加上了 a标签超链接，如何优化我们代码，代码的性能,如果把常用样式，统一初始化，我们选择的是用标签来表达，而不是用 *
-->




 </body>
</html>
