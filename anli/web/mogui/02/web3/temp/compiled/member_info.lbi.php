<div id="append_parent"></div>


<?php if ($this->_var['user_info']): ?>
<?php echo $this->_var['lang']['hello']; ?>，<?php echo $this->_var['user_info']['username']; ?>欢迎你回来！！
<a href="user.php" class="usertxt"><?php echo $this->_var['lang']['user_center']; ?></a>|
<a href="user.php?act=logout" class="usertxt"><?php echo $this->_var['lang']['user_logout']; ?></a> 
<?php else: ?>

<font><span class="iconfont">&#xe60b;</span><a href="user.php">登录</a></font>
<font><span class="iconfont">&#xe60e;</span><a href="user.php?act=register">注册</a></font>

<?php endif; ?>

