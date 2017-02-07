<?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>

<div id="TopMain">
	
	 <div id="topAdv"> 
		<a href="#"> <img src="themes/default/images/adv.jpg" /> </a> 
		<img src="themes/default/images/close.png"  class="close"/>
	 </div>
	  

	
	<div id="Top">
		<div class="banner"><a href="#"><img src="themes/default/images/logo.png" /></a></div>
		
		
		
		


   <script type="text/javascript">
    
    <!--
    function checkSearchForm()
    {
        if(document.getElementById('keyword').value)
        {
            return true;
        }
        else
        {
            alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
            return false;
        }
    }
    -->
    
    </script>
    <?php if ($this->_var['searchkeywords']): ?>
   <?php echo $this->_var['lang']['hot_search']; ?> ：
   <?php $_from = $this->_var['searchkeywords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
   <a href="search.php?keywords=<?php echo urlencode($this->_var['val']); ?>"><?php echo $this->_var['val']; ?></a>
   <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
   <?php endif; ?>

		<div class="search">
			<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r"  style="_position:relative; top:5px;">
			 <select name="category" id="category" class="B_input" style="display:none">
			  <option value="0"><?php echo $this->_var['lang']['all_category']; ?></option>
			  <?php echo $this->_var['category_list']; ?>
			</select>
			
				<input type="text"  class="txt" name="keywords" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"/>
				<input type="submit" class="but"  value="" name="imageField"/>
			</form>
		</div>
		
		
		
		
		
		
		<div class="user">
		
		 <?php echo $this->smarty_insert_scripts(array('files'=>'transport.js,utils.js')); ?>
   		 <?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>

			<font><span class="iconfont">&#xe646;</span><a href="flow.php">查看物购车</a></font>
		</div>
	</div>
	
</div>




<div id="Logo" >
	<ul>
		<li class="first"><span class="iconfont">&#xe627;</span>全部商品分类</li>
		<li><a href="index.php"<?php if ($this->_var['navigator_list']['config']['index'] == 1): ?> class="cur" <?php endif; ?>><?php echo $this->_var['lang']['home']; ?></a></li>
		 <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?>
		<li><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?> <?php if ($this->_var['nav']['active'] == 1): ?> class="cur"<?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>
 		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

		<li class="last"></li>
	</ul>
</div>
