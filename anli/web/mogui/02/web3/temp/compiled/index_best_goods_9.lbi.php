
<div class="introComm" style="display:block">
	<ul>
<?php $_from = $this->_var['index_best_goods_9']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_57680200_1441467211');if (count($_from)):
    foreach ($_from AS $this->_var['goods_0_57680200_1441467211']):
?>
		<li>
			<a href="<?php echo $this->_var['goods_0_57680200_1441467211']['url']; ?>"><img src="<?php echo $this->_var['goods_0_57680200_1441467211']['thumb']; ?>" alt="<?php echo htmlspecialchars($this->_var['goods_0_57680200_1441467211']['name']); ?>"  width="200" height="200" /></a>
			<p><a href="<?php echo $this->_var['goods_0_57680200_1441467211']['url']; ?>" title="<?php echo htmlspecialchars($this->_var['goods_0_57680200_1441467211']['name']); ?>"><?php echo htmlspecialchars($this->_var['goods_0_57680200_1441467211']['short_name']); ?></a>
			 
				 <?php if ($this->_var['goods_0_57680200_1441467211']['promote_price'] != ""): ?>
	 
				<span><?php echo $this->_var['goods_0_57680200_1441467211']['promote_price']; ?></span>
				 
				<?php else: ?>
				 
				<span><?php echo $this->_var['goods_0_57680200_1441467211']['shop_price']; ?></span>
				 
				<?php endif; ?>
			</p>
		</li>
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
					
	</ul>
</div>


