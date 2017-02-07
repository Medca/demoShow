<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="<?php echo $this->_var['keywords']; ?>" />
<meta name="Description" content="<?php echo $this->_var['description']; ?>" />

<title><?php echo $this->_var['page_title']; ?></title>

<link rel="shortcut icon" href="favicon.ico" />
<link rel="icon" href="animated_favicon.gif" type="image/gif" />
<link href="<?php echo $this->_var['ecs_css_path']; ?>" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js,user.js,transport.js')); ?>
  <style type="text/css">
*{margin:0px;}
body{background:#fbe1d3 url("themes/default/images/login_bg.jpg") center top no-repeat;}
#Lg_Main{width:1000px; height:634px; margin:100px auto;}
#Lg_Main .Login{width:325px; height:460px; background:#fff; border-radius:10px;								box-shadow:0px 0px 5px #666; float:right; padding:20px 50px;}
#Lg_Main .Login h2{line-height:45px;font-size:26px; font-family:"微软雅黑"; font-weight:100; padding-bottom:20px;}
#Lg_Main .Login h2 a{color:#02b1cb; font-size:14px; float:right; text-decoration:none;}
#Lg_Main .Login h3{font-size:14px;  font-family:"微软雅黑";  line-height:35px;font-weight:100; padding-top:15px;}
#Lg_Main .Login h3 a{color:#02b1cb; font-size:14px; float:right; text-decoration:none;}
#Lg_Main .Login h3 a.fl{float:left;}
#Lg_Main .Login h3 a.fr{float:right;}
#Lg_Main .Login h3.ck{font-size:12px;height:30px; color:#666; position:relative;}
#Lg_Main .Login h3.ck label{position:absolute; right:0px; top:10px;}
#Lg_Main .Login h3.ck input#remember{position:absolute; right:140px;top:23px; border:1px solid red;}
#Lg_Main .Login p input{width:300px; height:35px; border:1px solid #ddd; text-indent:10px; color:#ccc;}
#Lg_Main .Login p input.tj{width:300px; height:45px; background:#ed145b; color:#fff; font-size:16px; border-radius:5px; text-align:center; line-height:45px; margin-top:20px; border:0px;}



.Lg_Main{width:1000px;  margin:100px auto;}
.Lg_Main .Login{width:325px;  background:#fff; border-radius:10px;								box-shadow:0px 0px 5px #666; float:right; padding:20px 50px;}
.Lg_Main .Login h2{line-height:45px;font-size:26px; font-family:"微软雅黑"; font-weight:100; padding-bottom:20px;}
.Lg_Main .Login h2 a{color:#02b1cb; font-size:14px; float:right; text-decoration:none;}
.Lg_Main .Login h3{font-size:14px;  font-family:"微软雅黑";  line-height:35px;font-weight:100; padding-top:10px;}
.Lg_Main .Login h3 a{color:#02b1cb; font-size:14px; float:right; text-decoration:none;}
.Lg_Main .Login h3 a.fl{float:left;}
.Lg_Main .Login h3 a.fr{float:right;}
.Lg_Main .Login h3.ck{font-size:12px;height:30px; color:#666; position:relative;}
.Lg_Main .Login h3.ck label{position:absolute; right:0px; top:10px;}
.Lg_Main .Login p.agreement{position:relative; text-align:right;}
.Lg_Main .Login p.agreement input#ck{position:absolute; left:95px;top:5px;width:16px;height:16px;}
.Lg_Main .Login p input{width:300px; height:35px; border:1px solid #ddd; text-indent:10px; color:#ccc;}
.Lg_Main .Login p input.tj{width:300px; height:45px; background:#ed145b; color:#fff; font-size:16px; border-radius:5px; text-align:center; line-height:45px; margin-top:20px; border:0px;}
  </style>
<body>





<?php if ($this->_var['action'] == 'login'): ?>
<div id="Lg_Main">
	<div class="Login">
<form name="formLogin" action="user.php" method="post" onSubmit="return userLogin()">
		<h2> <a href="user.php?act=register">免费注册</a>登录 </h2>

		<h3><?php echo $this->_var['lang']['label_username']; ?></h3>
		<p><input name="username" type="text"  /></p>
		<h3><?php echo $this->_var['lang']['label_password']; ?></h3>
		<p><input name="password" type="password" /></p>
		
		 <?php if ($this->_var['enabled_captcha']): ?>
		<h3></h3>
		<p><?php echo $this->_var['lang']['comment_captcha']; ?>&nbsp;&nbsp;<input type="text" name="captcha" class="inputBg" style="width:100px;"/>&nbsp;&nbsp;<img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /></p>
		 <?php endif; ?>
		 
		 
		<h3 class="ck"><input type="checkbox" value="1" name="remember" id="remember" />
						<label for="remember"><?php echo $this->_var['lang']['remember']; ?></label>
		</h3>

		<p>
			<input type="hidden" name="act" value="act_login" />
            <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
            <input type="submit" name="submit" class="us_Submit tj"  value="登  录"/></p>
		<h3>
		<a href="user.php?act=qpassword_name" class="f3 fl"><?php echo $this->_var['lang']['get_password_by_question']; ?></a>&nbsp;&nbsp;&nbsp;<a href="user.php?act=get_password" class="f3 fr"><?php echo $this->_var['lang']['get_password_by_mail']; ?></a>
		</h3>
		
</form>	
	</div>
</div>

<?php endif; ?>












 <?php if ($this->_var['action'] == 'register'): ?>
    <?php if ($this->_var['shop_reg_closed'] == 1): ?>
   
    目前已关闭注册，不允许再注册会员！！
    <?php else: ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
	
<form action="user.php" method="post" name="formUser" onsubmit="return register();">	
	
<div class="Lg_Main">
	<div class="Login">

		<h2><a href="user.php?act=login">登录</a>注册</h2>

		<h3><?php echo $this->_var['lang']['label_username']; ?></h3>
		<p>
			<input name="username" type="text"  id="username" onblur="is_registered(this.value);" 
			class="inputBg"/>
            <span id="username_notice" style="color:#FF0000"> *</span>
		</p>
		<h3><?php echo $this->_var['lang']['label_email']; ?></h3>
		<p>
			<input name="email" type="text" size="25" id="email" onblur="checkEmail(this.value);"  
			class="inputBg"/>
            <span id="email_notice" style="color:#FF0000"> *</span>
		</p>
		<h3>密码</h3>
		<p>
			<input name="password" type="password" id="password1" onblur="check_password(this.value);" onkeyup="checkIntensity(this.value)" class="inputBg" style="width:179px;" />
            <span style="color:#FF0000" id="password_notice"> *</span>
		</p>
		<p> 
			<span id="pwd_lower"><?php echo $this->_var['lang']['pwd_lower']; ?></span>
            <span id="pwd_middle"><?php echo $this->_var['lang']['pwd_middle']; ?></span>
            <span id="pwd_high"><?php echo $this->_var['lang']['pwd_high']; ?></span>
		</p>
		
		<h3>确认密码</h3>
		<p>
			 <input name="confirm_password" type="password" id="conform_password" onblur="check_conform_password(this.value);"  class="inputBg" />
            <span style="color:#FF0000" id="conform_password_notice"> *</span>
		</p>
		
		
		  <?php $_from = $this->_var['extend_info_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'field');if (count($_from)):
    foreach ($_from AS $this->_var['field']):
?>
	<?php if ($this->_var['field']['id'] == 6): ?>
       <h3><?php echo $this->_var['lang']['passwd_question']; ?></h3>
       <p>
          <select name='sel_question'>
	  <option value='0'><?php echo $this->_var['lang']['sel_question']; ?></option>
	  <?php echo $this->html_options(array('options'=>$this->_var['passwd_questions'])); ?>
	  </select>
         </p>
		 <p <?php if ($this->_var['field']['is_need']): ?> id="passwd_quesetion" <?php endif; ?> ><?php echo $this->_var['lang']['passwd_answer']; ?></p>
		
		<p><input name="passwd_answer" type="text" size="25" class="inputBg" maxlengt='20'/><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?></p>
		<?php else: ?>
        <p <?php if ($this->_var['field']['is_need']): ?>id="extend_field<?php echo $this->_var['field']['id']; ?>i"<?php endif; ?>><?php echo $this->_var['field']['reg_field_name']; ?>
          
          <input name="extend_field<?php echo $this->_var['field']['id']; ?>" type="text" size="25" class="inputBg" /><?php if ($this->_var['field']['is_need']): ?><span style="color:#FF0000"> *</span><?php endif; ?>
		  </p>
        
	<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
		
		
 <?php if ($this->_var['enabled_captcha']): ?>
     <p style="padding-top:10px;"><?php echo $this->_var['lang']['comment_captcha']; ?>
      <input type="text"  name="captcha" class="inputBg" style="width:100px;" />
      <img src="captcha.php?<?php echo $this->_var['rand']; ?>" alt="captcha"  onClick="this.src='captcha.php?'+Math.random()" /> 
      </p>
      <?php endif; ?>
	  
	 <p class="agreement"> <input name="agreement" type="checkbox" value="1" checked="checked"  id="ck"/>
            <?php echo $this->_var['lang']['agreement']; ?></label></p> 

		<p>
		 <input name="act" type="hidden" value="act_register" >
          <input type="hidden" name="back_act" value="<?php echo $this->_var['back_act']; ?>" />
          <input name="Submit" type="submit" value="同意协议并注册" class="us_Submit_reg tj">
		</p>
		<h3>
		 <a href="user.php?act=login" class="fl"><?php echo $this->_var['lang']['want_login']; ?></a>
          <a href="user.php?act=get_password" class="fr"><?php echo $this->_var['lang']['forgot_password']; ?></a>
		  
		
		
	</div>
</div>
</form>
<?php endif; ?>
<?php endif; ?>













    <?php if ($this->_var['action'] == 'get_password'): ?>
    <?php echo $this->smarty_insert_scripts(array('files'=>'utils.js')); ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword" onsubmit="return submitPwdInfo();">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['username_and_email']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['email']; ?></td>
            <td><input name="email" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="send_pwd_email" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'qpassword_name'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['get_question_username']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['username']; ?></td>
            <td width="61%"><input name="user_name" type="text" size="30" class="inputBg" /></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="get_passwd_question" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>


    <?php if ($this->_var['action'] == 'get_passwd_question'): ?>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post">
        <br />
        <table width="70%" border="0" align="center">
          <tr>
            <td colspan="2" align="center"><strong><?php echo $this->_var['lang']['input_answer']; ?></strong></td>
          </tr>
          <tr>
            <td width="29%" align="right"><?php echo $this->_var['lang']['passwd_question']; ?>：</td>
            <td width="61%"><?php echo $this->_var['passwd_question']; ?></td>
          </tr>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['passwd_answer']; ?>：</td>
            <td><input name="passwd_answer" type="text" size="20" class="inputBg" /></td>
          </tr>
          <?php if ($this->_var['enabled_captcha']): ?>
          <tr>
            <td align="right"><?php echo $this->_var['lang']['comment_captcha']; ?></td>
            <td><input type="text" size="8" name="captcha" class="inputBg" />
            <img src="captcha.php?is_login=1&<?php echo $this->_var['rand']; ?>" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?is_login=1&'+Math.random()" /> </td>
          </tr>
          <?php endif; ?>
          <tr>
            <td></td>
            <td><input type="hidden" name="act" value="check_answer" />
              <input type="submit" name="submit" value="<?php echo $this->_var['lang']['submit']; ?>" class="bnt_blue" style="border:none;" />
              <input name="button" type="button" onclick="history.back()" value="<?php echo $this->_var['lang']['back_page_up']; ?>" style="border:none;" class="bnt_blue_1" />
	    </td>
          </tr>
        </table>
        <br />
      </form>
  </div>
</div>
<?php endif; ?>

<?php if ($this->_var['action'] == 'reset_password'): ?>
    <script type="text/javascript">
    <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
      var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </script>
<div class="usBox">
  <div class="usBox_2 clearfix">
    <form action="user.php" method="post" name="getPassword2" onSubmit="return submitPwd()">
      <br />
      <table width="80%" border="0" align="center">
        <tr>
          <td><?php echo $this->_var['lang']['new_password']; ?></td>
          <td><input name="new_password" type="password" size="25" class="inputBg" /></td>
        </tr>
        <tr>
          <td><?php echo $this->_var['lang']['confirm_password']; ?>:</td>
          <td><input name="confirm_password" type="password" size="25"  class="inputBg"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="hidden" name="act" value="act_edit_password" />
            <input type="hidden" name="uid" value="<?php echo $this->_var['uid']; ?>" />
            <input type="hidden" name="code" value="<?php echo $this->_var['code']; ?>" />
            <input type="submit" name="submit" value="<?php echo $this->_var['lang']['confirm_submit']; ?>" />
          </td>
        </tr>
      </table>
      <br />
    </form>
  </div>
</div>
<?php endif; ?>




</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
</script>
</html>
