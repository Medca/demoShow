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

<?php echo $this->smarty_insert_scripts(array('files'=>'common.js')); ?>
</head>
<body>
<?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="block box">
 <div id="ur_here">
  <?php echo $this->fetch('library/ur_here.lbi'); ?>
 </div>
</div>

<div class="blank"></div>
<div class="block clearfix">

  
  <div class="AreaR">
    <div class="box">
     <div class="box_1">
      <div style="width:1200px; margin:30px auto;">
         <div class="tc" style="padding:8px;">
        <h1 style="text-align:center"><?php echo htmlspecialchars($this->_var['article']['title']); ?></h1>
		<p style="text-align:center">作者：<?php echo htmlspecialchars($this->_var['article']['author']); ?> &nbsp;&nbsp;&nbsp;&nbsp;s时间： <?php echo $this->_var['article']['add_time']; ?></p>
         </div>
		 
		 <div style="font-size:14px; line-height:35px; text-align:center">
         <?php if ($this->_var['article']['content']): ?>
          <?php echo $this->_var['article']['content']; ?>
         <?php endif; ?>
		 </div>
         <?php if ($this->_var['article']['open_type'] == 2 || $this->_var['article']['open_type'] == 1): ?><br />
         <div><a href="<?php echo $this->_var['article']['file_url']; ?>" target="_blank"><?php echo $this->_var['lang']['relative_file']; ?></a></div>
          <?php endif; ?>
		  
		  
         <div style="padding:8px; margin-top:15px; text-align:left; border-top:1px solid #ccc; font-size:12px; line-height:35px;">
         
          <?php if ($this->_var['next_article']): ?>
            <?php echo $this->_var['lang']['next_article']; ?>:&nbsp;&nbsp;<a href="<?php echo $this->_var['next_article']['url']; ?>" style="color:#666666" ><?php echo $this->_var['next_article']['title']; ?></a><br />
          <?php endif; ?>
          
          <?php if ($this->_var['prev_article']): ?>
            <?php echo $this->_var['lang']['prev_article']; ?>:&nbsp;&nbsp;<a href="<?php echo $this->_var['prev_article']['url']; ?>" style="color:#666666"><?php echo $this->_var['prev_article']['title']; ?></a>
          <?php endif; ?>
         </div>
      </div>
    </div>
  </div>
  <div class="blank"></div>
  
  
<?php echo $this->fetch('library/comments.lbi'); ?>

  </div>
  
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?>
</body>
</html>
