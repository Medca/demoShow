

  
  <div id="ProductList">
	<div class="ti">
  <form method="GET" class="sort" name="listform">
  <?php echo $this->_var['lang']['btn_display']; ?>：
  <div style="display:none">
  <a href="javascript:;" onClick="javascript:display_mode('list')"><img src="themes/default/images/display_mode_list<?php if ($this->_var['pager']['display'] == 'list'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['list']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('grid')"><img src="themes/default/images/display_mode_grid<?php if ($this->_var['pager']['display'] == 'grid'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['grid']; ?>"></a>
  <a href="javascript:;" onClick="javascript:display_mode('text')"><img src="themes/default/images/display_mode_text<?php if ($this->_var['pager']['display'] == 'text'): ?>_act<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['display']['text']; ?>"></a>&nbsp;&nbsp;
  </div>
  
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=goods_id&order=<?php if ($this->_var['pager']['sort'] == 'goods_id' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/default/images/goods_id_<?php if ($this->_var['pager']['sort'] == 'goods_id'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['goods_id']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=shop_price&order=<?php if ($this->_var['pager']['sort'] == 'shop_price' && $this->_var['pager']['order'] == 'ASC'): ?>DESC<?php else: ?>ASC<?php endif; ?>#goods_list"><img src="themes/default/images/shop_price_<?php if ($this->_var['pager']['sort'] == 'shop_price'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['shop_price']; ?>"></a>
  <a href="<?php echo $this->_var['script_name']; ?>.php?category=<?php echo $this->_var['category']; ?>&display=<?php echo $this->_var['pager']['display']; ?>&brand=<?php echo $this->_var['brand_id']; ?>&price_min=<?php echo $this->_var['price_min']; ?>&price_max=<?php echo $this->_var['price_max']; ?>&filter_attr=<?php echo $this->_var['filter_attr']; ?>&page=<?php echo $this->_var['pager']['page']; ?>&sort=last_update&order=<?php if ($this->_var['pager']['sort'] == 'last_update' && $this->_var['pager']['order'] == 'DESC'): ?>ASC<?php else: ?>DESC<?php endif; ?>#goods_list"><img src="themes/default/images/last_update_<?php if ($this->_var['pager']['sort'] == 'last_update'): ?><?php echo $this->_var['pager']['order']; ?><?php else: ?>default<?php endif; ?>.gif" alt="<?php echo $this->_var['lang']['sort']['last_update']; ?>"></a>

  <input type="hidden" name="category" value="<?php echo $this->_var['category']; ?>" />
  <input type="hidden" name="display" value="<?php echo $this->_var['pager']['display']; ?>" id="display" />
  <input type="hidden" name="brand" value="<?php echo $this->_var['brand_id']; ?>" />
  <input type="hidden" name="price_min" value="<?php echo $this->_var['price_min']; ?>" />
  <input type="hidden" name="price_max" value="<?php echo $this->_var['price_max']; ?>" />
  <input type="hidden" name="filter_attr" value="<?php echo $this->_var['filter_attr']; ?>" />
  <input type="hidden" name="page" value="<?php echo $this->_var['pager']['page']; ?>" />
  <input type="hidden" name="sort" value="<?php echo $this->_var['pager']['sort']; ?>" />
  <input type="hidden" name="order" value="<?php echo $this->_var['pager']['order']; ?>" />
  </form>
  </div>
  
  
  
  
  
  

    <?php if ($this->_var['category'] > 0): ?>
  <form name="compareForm" action="compare.php" method="post" onSubmit="return compareGoods(this);">
    <?php endif; ?>
	
	
	
    <?php if ($this->_var['pager']['display'] == 'list'): ?>
	<ul>
	 <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_03386800_1441467253');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_03386800_1441467253']):
?>
    <?php if ($this->_var['goods_0_03386800_1441467253']['goods_id']): ?>
	
		<li>
			 <a href="<?php echo $this->_var['goods_0_03386800_1441467253']['url']; ?>"><img src="<?php echo $this->_var['goods_0_03386800_1441467253']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_03386800_1441467253']['goods_name']; ?>" class="goodsimg" width="200" height="200"/></a>
			<h3><a href="<?php echo $this->_var['goods_0_03386800_1441467253']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_03386800_1441467253']['name']); ?>"><?php echo sub_str($this->_var['goods_0_03386800_1441467253']['goods_name'],12); ?></a></h3>
			<p>
				 <?php if ($this->_var['show_marketprice']): ?>
       
            <?php endif; ?>
            <?php if ($this->_var['goods_0_03386800_1441467253']['promote_price'] != ""): ?>
            <span><?php echo $this->_var['goods_0_03386800_1441467253']['promote_price']; ?></span>
            <?php else: ?>
           <span><?php echo $this->_var['goods_0_03386800_1441467253']['shop_price']; ?></span><?php endif; ?><a href="javascript:addToCart(<?php echo $this->_var['goods_0_03386800_1441467253']['goods_id']; ?>)">立即购买</a></p>
			
		</li>
 <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</ul>
	
	
	
   
	
	
	
	
 <?php elseif ($this->_var['pager']['display'] == 'grid'): ?>	
	
	
	<ul>
	 <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_03451100_1441467253');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_03451100_1441467253']):
?>
    <?php if ($this->_var['goods_0_03451100_1441467253']['goods_id']): ?>
	
		<li>
			 <a href="<?php echo $this->_var['goods_0_03451100_1441467253']['url']; ?>"><img src="<?php echo $this->_var['goods_0_03451100_1441467253']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_03451100_1441467253']['goods_name']; ?>" class="goodsimg" width="200" height="200"/></a>
			<h3><a href="<?php echo $this->_var['goods_0_03451100_1441467253']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_03451100_1441467253']['name']); ?>"><?php echo sub_str($this->_var['goods_0_03451100_1441467253']['goods_name'],10); ?></a></h3>
			<p>
				 <?php if ($this->_var['show_marketprice']): ?>
       
            <?php endif; ?>
            <?php if ($this->_var['goods_0_03451100_1441467253']['promote_price'] != ""): ?>
            <span><?php echo $this->_var['goods_0_03451100_1441467253']['promote_price']; ?></span>
            <?php else: ?>
           <span><?php echo $this->_var['goods_0_03451100_1441467253']['shop_price']; ?></span><?php endif; ?><a href="javascript:addToCart(<?php echo $this->_var['goods_0_03451100_1441467253']['goods_id']; ?>)">立即购买</a></p>
			
		</li>
 <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</ul>



	
	
	
	
    <?php elseif ($this->_var['pager']['display'] == 'text'): ?>
	
			<ul>
	 <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_03495900_1441467253');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_03495900_1441467253']):
?>
    <?php if ($this->_var['goods_0_03495900_1441467253']['goods_id']): ?>
	
		<li>
			 <a href="<?php echo $this->_var['goods_0_03495900_1441467253']['url']; ?>"><img src="<?php echo $this->_var['goods_0_03495900_1441467253']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods_0_03495900_1441467253']['goods_name']; ?>" class="goodsimg" width="200" height="200"/></a>
			<h3><a href="<?php echo $this->_var['goods_0_03495900_1441467253']['url']; ?>" title="<?php echo $this->_var['goods_0_03495900_1441467253']['name']; ?>"><?php echo sub_str(htmlspecialchars($this->_var['goods_0_03495900_1441467253']['goods_name']),10); ?></a></h3>
			<p>
				 <?php if ($this->_var['show_marketprice']): ?>
       
            <?php endif; ?>
            <?php if ($this->_var['goods_0_03495900_1441467253']['promote_price'] != ""): ?>
            <span><?php echo $this->_var['goods_0_03495900_1441467253']['promote_price']; ?></span>
            <?php else: ?>
           <span><?php echo $this->_var['goods_0_03495900_1441467253']['shop_price']; ?></span><?php endif; ?><a href="javascript:addToCart(<?php echo $this->_var['goods_0_03495900_1441467253']['goods_id']; ?>)">立即购买</a></p>
			
		</li>
 <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

	</ul>
  </form>
  <?php endif; ?>

<div style="clear:both;"></div>
</div>




<script type="Text/Javascript" language="JavaScript">
<!--

function selectPage(sel)
{
  sel.form.submit();
}

//-->
</script>
<script type="text/javascript">
window.onload = function()
{
  Compare.init();
  fixpng();
}
<?php $_from = $this->_var['lang']['compare_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
<?php if ($this->_var['key'] != 'button_compare'): ?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php else: ?>
var button_compare = '';
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>