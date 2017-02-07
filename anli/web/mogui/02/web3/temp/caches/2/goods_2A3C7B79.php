<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:56:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/goods.dwt";i:1;s:70:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/page_header.lbi";i:2;s:66:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/ur_here.lbi";i:3;s:72:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/goods_gallery.lbi";i:4;s:72:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/goods_related.lbi";i:5;s:67:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/comments.lbi";i:6;s:76:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/bought_note_guide.lbi";i:7;s:70:"D:/APMServ5.2.6/www/htdocs/web3/themes/default/library/page_footer.lbi";}s:7:"expires";i:1441634232;s:8:"maketime";i:1441630632;}<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Author" content="清心老师">
  <meta name="Keywords" content="ecshop商城开发">
  <meta name="Description" content="一个月打造商城-清心主讲">
  <title>Ecshop商城开发详情页--清心老师</title>
 
 <link type="text/css" rel="stylesheet"  href="themes/default/style.css">
 <link type="text/css" rel="stylesheet"  href="themes/default/css/web.css">
 
<script type="text/javascript" src="js/common.js"></script> <script type="text/javascript">
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
<script type="text/javascript" src="js/transport.js"></script><script type="text/javascript" src="js/utils.js"></script>
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
            alert("请输入搜索关键词！");
            return false;
        }
    }
    -->
    
    </script>
    
		<div class="search">
			<form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()" class="f_r"  style="_position:relative; top:5px;">
			 <select name="category" id="category" class="B_input" style="display:none">
			  <option value="0">所有分类</option>
			  <option value="2" >生日礼物</option><option value="17" >&nbsp;&nbsp;&nbsp;&nbsp;男朋友</option><option value="18" >&nbsp;&nbsp;&nbsp;&nbsp;女朋友</option><option value="19" >&nbsp;&nbsp;&nbsp;&nbsp;老公</option><option value="20" >&nbsp;&nbsp;&nbsp;&nbsp;老婆</option><option value="1" >节日礼物</option><option value="14" >&nbsp;&nbsp;&nbsp;&nbsp;中秋节</option><option value="15" >&nbsp;&nbsp;&nbsp;&nbsp;国庆节</option><option value="16" >&nbsp;&nbsp;&nbsp;&nbsp;感恩节</option><option value="13" >&nbsp;&nbsp;&nbsp;&nbsp;教室节</option><option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;七夕节</option><option value="5" >个性定制</option><option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;香水座</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;钥匙扣</option><option value="12" >&nbsp;&nbsp;&nbsp;&nbsp;台灯</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;照片定制</option><option value="10" >&nbsp;&nbsp;&nbsp;&nbsp;围巾、帽子</option><option value="6" >鲜花</option><option value="3" >蛋糕</option><option value="4" >商务礼物</option>			</select>
			
				<input type="text"  class="txt" name="keywords" id="keyword" value=""/>
				<input type="submit" class="but"  value="" name="imageField"/>
			</form>
		</div>
		
		
		
		
		
		
		<div class="user">
		
		    		 554fcae493e564ee0dc75bdf2ebf94camember_info|a:1:{s:4:"name";s:11:"member_info";}554fcae493e564ee0dc75bdf2ebf94ca
			<font><span class="iconfont">&#xe646;</span><a href="flow.php">查看物购车</a></font>
		</div>
	</div>
	
</div>
<div id="Logo" >
	<ul>
		<li class="first"><span class="iconfont">&#xe627;</span>全部商品分类</li>
		<li><a href="index.php">首页</a></li>
		 		<li><a href="category.php?id=2" target="_blank"  >生日礼物</a></li>
 				<li><a href="category.php?id=1"   class="cur">节日礼物</a></li>
 				<li><a href="category.php?id=3"  >蛋糕</a></li>
 				<li><a href="category.php?id=4"  >商务礼物</a></li>
 				<li><a href="category.php?id=5"  >个性定制</a></li>
 				<li><a href="category.php?id=6"  >鲜花</a></li>
 		
		<li class="last"></li>
	</ul>
</div>
<div class="block box">
 <div id="ur_here">
  当前位置: <a href=".">首页</a> <code>&gt;</code> <a href="category.php?id=1">节日礼物</a> <code>&gt;</code> <a href="category.php?id=7">七夕节</a> <code>&gt;</code> 为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物 </div>
</div>
<div id="webCon">
	
	<div class="web_ProductImg">
	
		<div id="box">
			
			<div class="simg">
			      		 <img src="images/201508/goods_img/4_G_1440422787080.jpg" alt="为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物" width="450" height="450"/>
         			 
				<span class="move"></span>
				<span class="shade"></span>
			</div>
			
			
			<div class="but">
				
             <img src="images/201508/thumb_img/4_thumb_P_1440422787068.jpg" alt="为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物" dataSrc="images/201508/goods_img/4_P_1440422787451.jpg" width="60" height="60"/>
            <img src="images/201508/thumb_img/4_thumb_P_1440423572871.jpg" alt="为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物" dataSrc="images/201508/goods_img/4_P_1440423572037.jpg" width="60" height="60"/>
            <img src="images/201508/thumb_img/4_thumb_P_1440423590038.jpg" alt="为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物" dataSrc="images/201508/goods_img/4_P_1440423590365.jpg" width="60" height="60"/>
                       
		  			</div>
			
			
			<div class="bimg">
								<img src="images/201508/goods_img/4_G_1440422787080.jpg" alt="为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物" />
				 
			</div>
			
		</div>
	
	</div>
	
	
	
	
	
	
	<div class="web_ProductXq">
	<form action="javascript:addToCart(4)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		<ul>
			<li class="title"> 为你闪亮 DIY创意定制小鸟随手灯 触碰感应灯 送女朋友 浪漫礼物</li>
						<li class="two">
								<p><strong>商品货号：</strong>ECS000004</p>
				 				                   <p><strong>商品库存：</strong>
          30 </p>
              			</li>
			<li class="two">
			 				<p><strong>商品品牌：</strong><a href="brand.php?id=1" >清心</a></p>
						       		<p><strong>商品重量：</strong>30克</p>
       			</li>
			<li  class="bor">
				<p>
				       <strong>市场价格：</strong><font class="market">￥58元</font>
              
       <strong>本店售价：</strong><font class="shop" id="ECS_SHOPPRICE" style="font-size:20px; color:#FF3366;">￥48元</font>
              <strong>注册用户：</strong><font class="shop" id="ECS_RANKPRICE_1">￥48元</font>
       				</p>
			</li>
			
						
			
			
			
			<li class="yh">
							<h3>购买商品达到以下数量区间时可享受的优惠价格：</h3>
				<p class="ti"> <span>数量</span> <span>优惠价格</span> </p>
						<p class="ti money"> <span>3</span> <span>￥40元</span> </p>
				 		<p class="ti money"> <span>5</span> <span>￥38元</span> </p>
				 				 				<p class="allmoney"> 
				<strong>商品总价：</strong><font id="ECS_GOODS_AMOUNT" class="shop"></font>
				</p>
			</li>
			 
			 
			 
	
	  
		
			<li class="two">
			
				<p>购买数量 <input name="number" type="text" id="number" value="1"  onblur="changePrice()" class="txt"/>
				 </p>
				        <p><strong>购买此商品赠送：</strong><font class="f4">100 积分</font></p>
         
			</li>
			
			   			
			
            <li class="padd loop">
	  <p class="sx">
      <strong>颜色:</strong><br />
        
                                                                                          <label for="spec_value_8">
                        <input type="radio" name="spec_213" value="8" id="spec_value_8" checked onClick="changePrice()" />
                        绿色 [ ￥0.00元] </label><br />
                                                <input type="hidden" name="spec_list" value="0" />
                                            		</p>
      </li>
            <li class="padd loop">
	  <p class="sx">
      <strong>材质:</strong><br />
        
                                                                                          <label for="spec_value_11">
                        <input type="radio" name="spec_211" value="11" id="spec_value_11" checked onClick="changePrice()" />
                        abs板 [ ￥0.00元] </label><br />
                                                <input type="hidden" name="spec_list" value="0" />
                                            		</p>
      </li>
            <li class="padd loop">
	  <p class="sx">
      <strong>原理:</strong><br />
        
                                                                                          <label for="spec_value_12">
                        <input type="radio" name="spec_212" value="12" id="spec_value_12" checked onClick="changePrice()" />
                        简单原理 [ ￥0.00元] </label><br />
                                                <input type="hidden" name="spec_list" value="0" />
                                            		</p>
      </li>
            <li class="padd loop">
	  <p class="sx">
      <strong>礼物款式:</strong><br />
        
                                                                                          <label for="spec_value_4">
                        <input type="radio" name="spec_214" value="4" id="spec_value_4" checked onClick="changePrice()" />
                        爱情魔法师 [ ￥0.00元] </label><br />
                                                <label for="spec_value_6">
                        <input type="radio" name="spec_214" value="6" id="spec_value_6"  onClick="changePrice()" />
                        天使娃娃 [加 ￥10.00元] </label><br />
                                                <label for="spec_value_5">
                        <input type="radio" name="spec_214" value="5" id="spec_value_5"  onClick="changePrice()" />
                        两小无猜定制 [加 ￥20.00元] </label><br />
                                                <input type="hidden" name="spec_list" value="2" />
                                            		</p>
      </li>
            
	  
			
			<li class="but">
				<a href="javascript:addToCart(4)"><img src="themes/default/images/Webcar.png" /></a>
				<a href="javascript:collect(4)"><img src="themes/default/images/Websc.png" /></a>
			</li>
		</ul>
	
	
	</form>
	</div>
	
<div style="clear:both"></div>	
</div>
<div id="IntroProduct">
	<p class="ti">相关商品</p>
	<ul>
	
	 		<li>
			<a href="goods.php?id=2"><img src="images/201508/thumb_img/2_thumb_G_1439989592585.jpg" alt="宠物情人灯 卧室床头布艺台灯 创意台灯 智能蓝牙Led台灯 台灯创意时尚 七夕情人节礼物" width="220" height="220"/></a>
			<p><a href="goods.php?id=2" title="宠物情人灯 卧室床头布艺台灯 创意台灯 智能蓝牙Led台灯 台灯创意时尚 七夕情人节礼物">宠物情人灯 卧...</a>
			</p>
			<P class="money">
			        本店售价：<font class="f1">￥228元</font>
        			</p>
		</li>  
			<li>
			<a href="goods.php?id=3"><img src="images/201508/thumb_img/3_thumb_G_1439989659869.jpg" alt="七夕缘 定制孔雀水晶摆件 七夕情人节礼物 送男女朋友 老公老婆 浪漫感动" width="220" height="220"/></a>
			<p><a href="goods.php?id=3" title="七夕缘 定制孔雀水晶摆件 七夕情人节礼物 送男女朋友 老公老婆 浪漫感动">七夕缘 定制孔...</a>
			</p>
			<P class="money">
			        本店售价：<font class="f1">￥229元</font>
        			</p>
		</li>  
		</ul>
</div>
<div id="ProductInfo">
	<ul class="sel">
		<li class="active">商品描述<span></span></li>
		<li>商品属性 <span></span></li>
		<li>用户评论<span></span></li>
		<li>商品购买记录<span></span></li>
	</ul>
	<div id="ProductSelect">
		<div class="selCon" style="display:block;">  <ul class="goods_property">
    <li>名称：为你闪亮</li>
    <li>内容：鸟笼灯一个</li>
    <li>材质：ABS+PC</li>
    <li>颜色：呆黄鸟  桔萌鸟 惠蓝鸟 爱心鸟</li>
    <li>产品尺寸：14*17cm</li>
    <li>产品重量：425g</li>
    <li>LED灯功率：0.5w</li>
    <li>电池使用时长：15小时</li>
    <li>包装：精美包装</li>
    <li><span style="color:#FF0000;">定制提示：文字不超过15个字，当天下午5点前确定的订单当天发货</span></li>
</ul>
<p><img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/%E5%BF%AB%E9%80%92%E6%B8%A9%E9%A6%A8%E6%8F%90%E7%A4%BA%20750%286179%29.jpg" alt="" /><br />
<img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/liwujianjie.gif" alt="" />&nbsp;</p>
<p><span style="color:#333333;">它是一个鸟笼，又是一盏灯。它别致可爱，可以作为</span><span style="white-space:normal;color:#333333;">最佳家居装饰品。鸟笼灯可以充电循环使用，光线较为柔和，还可以手触来控制灯光哦。</span></p>
<p><span style="white-space:normal;color:#333333;">那</span><span style="line-height:1.5;color:#333333;">梦幻的光晕，像床头灯一样，</span><span style="line-height:1.5;color:#333333;">营造出温馨、浪漫的格调。在</span><span style="line-height:1.5;color:#333333;">宁静惬意的夜里，助你安稳入睡。鸟笼可以</span><span style="line-height:1.5;color:#333333;">个性化定制，12种模板任你选，</span><span style="line-height:1.5;color:#333333;">打造</span></p>
<p><span style="line-height:1.5;color:#333333;">专属你我TA的最佳礼品。</span></p>
<p><img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/goodstitle5.gif" alt="" />&nbsp;</p>
<p><span style="color:#000000;">时尚小鸟随手灯，带着它和她一起走进爱的童话吧！</span></p>
<p><img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/%E6%9C%AA%E6%A0%87%E9%A2%98-1%286877%29.jpg" alt="" /></p>
<p><img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/goodstitle2.gif" alt="" />&nbsp;<img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/%E4%B8%BA%E4%BD%A0%E9%97%AA%E4%BA%AELWY003633.jpg" alt="" /><img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/%E9%B8%9F%E7%AC%BC-%E6%94%B9_03.jpg" alt="" /><img src="http://liwuyou.b0.upaiyun.com/images/upload/Image/%E9%B8%9F%E7%AC%BC-%E6%94%B9_04.jpg" alt="" /></p></div>
		<div class="selCon">
		
		
		 <table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#dddddd">
                <tr>
          <th colspan="2" bgcolor="#FFFFFF">商品属性</th>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[包装]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">没有包装</td>
        </tr>
                <tr>
          <td bgcolor="#FFFFFF" align="left" width="30%" class="f1">[规格]</td>
          <td bgcolor="#FFFFFF" align="left" width="70%">无规格</td>
        </tr>
                      </table>
	  
			 
		</div>
		<div class="selCon"><div id="ECS_COMMENT"> 554fcae493e564ee0dc75bdf2ebf94cacomments|a:3:{s:4:"name";s:8:"comments";s:4:"type";i:0;s:2:"id";i:4;}554fcae493e564ee0dc75bdf2ebf94ca</div>
</div>
		<div class="selCon">
			<div id="ECS_BOUGHT">554fcae493e564ee0dc75bdf2ebf94cabought_notes|a:2:{s:4:"name";s:12:"bought_notes";s:2:"id";i:4;}554fcae493e564ee0dc75bdf2ebf94ca</div>		</div>
	</div>
	
</div>
<img src="themes/default/images/f.jpg"  class="fbg"/>
<div id="Footer2">
	<dl class="first">
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌入驻</a></dd>
		<dd><a href="#">友情链接</a></dd>
	</dl>
	<dl>
		<dt><a href="#">关于我们</a></dt>
		<dd><a href="#">诚聘英才</a></dd>
		<dd><a href="#">品牌入驻</a></dd>
		<dd><a href="#">友情链接</a></dd>
	</dl>
	<dl>
		<dt>关于我们</dt>
		<dd>诚聘英才</dd>
		<dd>品牌入驻</dd>
		<dd>友情链接</dd>
	</dl>
	<dl>
		<dt>关于我们</dt>
		<dd>诚聘英才</dd>
		<dd>品牌入驻</dd>
		<dd>友情链接</dd>
	</dl>
	<dl>
		<dt>关于我们</dt>
		<dd>诚聘英才</dd>
		<dd>品牌入驻</dd>
		<dd>友情链接</dd>
	</dl>
	<dl>
		<dt>关于我们</dt>
		<dd>诚聘英才</dd>
		<dd>品牌入驻</dd>
		<dd>友情链接</dd>
	</dl>
	<dl class="last">
		<dt>客服在线</dt>
		<dd>4006-600-000</dd>
		<dd><img src="themes/default/images/QQ.jpg" /></dd>
	</dl>
	<div style="clear:both"></div>
</div>
<p class="Copy">Copyright © 2013-2015 www.tanzhouedu.com All Rights Reserved 版权所有：湖南潭州教育咨询有限公司 备案号：备13016338号</p>
<script type="text/javascript">
var goods_id = 4;
var goodsattr_style = 1;
var gmt_end_time = 0;
var day = "天";
var hour = "小时";
var minute = "分钟";
var second = "秒";
var end = "结束";
var goodsId = 4;
var now_time = 1441630632;
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
  <script type="text/javascript" src="js/jquery.js"></script>
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