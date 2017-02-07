<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>ecshop商城开发首页-清心老师</title>

<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
 </head>
 <body>
 

<?php echo $this->fetch('library/page_header.lbi'); ?>




<div id="Foucs">
	<div class="FoucsCon">
		
		<div class="Menu">
		
		
	<?php echo $this->fetch('library/category_tree.lbi'); ?>
	

			
		</div>
		

		
		<div class="flash">
			
			<a href="javascript:void(0)" class="prev"></a>
			<a href="javascript:void(0)" class="next"></a>

			
			<div class="scroll">
				<img src="themes/default/images/flash1.jpg"  style="left:0px;"/>
				<img src="themes/default/images/flash2.jpg" />
				<img src="themes/default/images/flash3.jpg" />
				<img src="themes/default/images/flash4.jpg" />
				<img src="themes/default/images/flash5.png" />
				<img src="themes/default/images/flash6.jpg" />
			</div>

			
			<div class="But">
				<span class="hover"></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		
		
		
		<div class="news">
			<div class="newsOpacity"></div>
			<div class="newsCon">
				
				<div class="newsKx">
					<h3>潭州快讯</h3>
					<ul>
					
					<?php $_from = $this->_var['flwenz']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
					<li><a href="<?php echo $this->_var['art']['url']; ?>" title="<?php echo $this->_var['art']['title']; ?>"><?php echo sub_str($this->_var['art']['title'],15); ?></a></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			

					</ul>
				</div>
				


				<div class="newsKx Datatx">
					<h3>节日提醒</h3>
					<ul>
					<?php $_from = $this->_var['flwenz2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'art');if (count($_from)):
    foreach ($_from AS $this->_var['art']):
?>
					<li><a href="<?php echo $this->_var['art']['url']; ?>" title="<?php echo $this->_var['art']['title']; ?>"><?php echo sub_str($this->_var['art']['title'],15); ?></a></li>
					<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>

					</ul>
				</div>




			</div>		
		</div>
		
	<div style="clear:both"></div></div>
</div>




<div id="HotIntro">
	<div class="HotIntroCon">
		
		<div class="hotIntro">
			<img src="themes/default/images/webintro.jpg"  class="hotimg"/>
			<div class="hotList">
				<dl>
					<dt><img src="themes/default/images/webpic1.jpg" /></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥190.0</font></dd>
					<dd class="buy"><a href="">立即抢购</a></dd>
				</dl>
				<dl>
					<dt><img src="themes/default/images/webpic2.jpg" /></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥190.0</font></dd>
					<dd class="buy"><a href="">立即抢购</a></dd>
				</dl>
				<dl>
					<dt><img src="themes/default/images/webpic3.jpg" /></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥190.0</font></dd>
					<dd class="buy"><a href="">立即抢购</a></dd>
				</dl>
				<dl>
					<dt><img src="themes/default/images/webpic1.jpg" /></dt>
					<dd class="ti">味多美 生日聚会送礼 水果蛋糕 缤纷盛果</dd>
					<dd class="money">特价：<font>￥190.0</font></dd>
					<dd class="buy"><a href="">立即抢购</a></dd>
				</dl>
			</div>
		</div>
		
	</div>
</div>




<div id="TopEvent">
	
	<div class="TopEventL">
		<P class="ti">
			<span class="hover">天天低价</span>
			<span>商城推荐</span>
			<span>新品速递</span>
			<span>猜你喜欢</span>
		</p>

		<ul>
			<li>
				<img src="themes/default/images/dg_img1.jpg" width="200"/>
				<h3>个性定制水晶音乐盒摆件</h3>
				<p>￥300.0元</p>
			</li>
			<li>
				<img src="themes/default/images/dg_img2.jpg" width="200"/>
				<h3>个性定制水晶音乐盒摆件</h3>
				<p>￥300.0元</p>
			</li>
			<li>
				<img src="themes/default/images/dg_img3.jpg" width="200"/>
				<h3>个性定制水晶音乐盒摆件</h3>
				<p>￥300.0元</p>
			</li>
			<li>
				<img src="themes/default/images/dg_img6.jpg" width="200"/>
				<h3>个性定制水晶音乐盒摆件</h3>
				<p>￥300.0元</p>
			</li>
		</ul>
	</div>
	

	
	<div class="TopEventR">
		<p class="ti"><span class="hover">热门活动</span><span>频道精选</span></p>
		<div class="Intro">
			<div class="box">
				<?php echo $this->fetch('library/daojishi.lbi'); ?> 
			</div>
			
		</div>
	</div>
	
</div>








<div id="Specific" class="commCss">
	<p class="ti">个性定制</p>
	<div class="PartCon">
		
		<div class="PartL">

			
			<img src="themes/default/images/prev.png" class="prev" />
			<img src="themes/default/images/next.png" class="next" />

			
			<div class="imgList">
				<ul>
					<li>
						<img src="themes/default/images/jr_img1.jpg" width="280" height="280"/>
						<h3>瞌睡兔音乐枕 午休音乐枕头 可连接手机、MP3听音乐的玩偶公</h3>
						<span>特价：<font>116.0元</font></span>
					</li>
					<li>
						<img src="themes/default/images/jr_img2.jpg" width="280" height="280"/>
						<h3>瞌睡兔音乐枕 午休音乐枕头 可连接手机、MP3听音乐的玩偶公</h3>
						<span>特价：<font>116.0元</font></span>
					</li>
					<li>
						<img src="themes/default/images/jr_img3.jpg" width="280" height="280"/>
						<h3>瞌睡兔音乐枕 午休音乐枕头 可连接手机、MP3听音乐的玩偶公</h3>
						<span>特价：<font>116.0元</font></span>
					</li>
					<li>
						<img src="themes/default/images/jr_img4.jpg" width="280" height="280"/>
						<h3>瞌睡兔音乐枕 午休音乐枕头 可连接手机、MP3听音乐的玩偶公</h3>
						<span>特价：<font>116.0元</font></span>
					</li>
				</ul>
			</div>
		</div>
		

		
		<div class="PartM">
			<ul>
				<li class="active">照片定制<img src="themes/default/images/ico.png"  /></li>
				<li>钥匙扣 <img src="themes/default/images/ico.png"  /></li>
				<li>围巾、帽子 <img src="themes/default/images/ico.png"  /></li>
				<li>香水座 <img src="themes/default/images/ico.png"  /></li>
				<li>台灯 <img src="themes/default/images/ico.png"  /></li>
			</ul>
			<img src="themes/default/images/zp4.jpg" width='175' height='150'/>
			<p>宠爱一生 925纯银紫水晶项链 </p>
			<span class="hot">热销产品</span>
		</div>
		
		
		
		<div class="PartR">
		
			<?php echo $this->fetch('library/index_best_goods_9.lbi'); ?>
			<?php echo $this->fetch('library/index_best_goods_8.lbi'); ?>
			
			<div class="introComm">围巾、帽子</div>
			<div class="introComm">香水座</div>
			<div class="introComm">台灯</div>
			

			
		</div>
		
	</div>
<div style="clear:both"></div></div>




	<div id="Flower" class="part2">
		<ul class="FlowerNav">
			<li class="first"><span>白玫瑰</span></li>
			<li><span>红玫瑰</span></li>
			<li><span>郁金香</span></li>
			<li><span>牡丹花</span></li>
			<li><span>法国玫瑰</span></li>
			<li class="last hover"><span>香槟玫</span></li>
			<li class="xh_nav"><span>鲜花</span></li>
		</ul>


		<div class="FlowerCon">
			
			<div class="FlowerLeft">

				
				<div class="xianFlash"><img src="themes/default/images/dg_flash2.jpg" width="480" height="350"/></div>
				

				
				<div class="xianType">
					<ul>
						<li class="active">
							<h3 class="hover">白玫瑰</h3>
							<div>白玫瑰，玫瑰中的一种。<br/>
						玫瑰花有紫、白两种，形似蔷薇和月季。玫瑰在植物分类学上是
						指蔷薇科蔷薇属灌木，在日常生活中是蔷薇属一系列花大艳丽的
						栽培品种的统称，这些栽培品种在植物分类学上应称做月季或蔷
						薇。</div>
						</li>
						<li>
							<h3>白玫瑰</h3>
							<div></div>
						</li>
						<li>
							<h3>白玫瑰</h3>
							<div></div>
						</li>
						<li>
							<h3>白玫瑰</h3>
							<div></div>
						</li>
						<li class="last">
							<h3>白玫瑰</h3>
							<div></div>
						</li>
					</ul>
				</div>
				
				
			</div>
			
			
			
			<div class="FlowerRight">
				<div class="FlowerComm">
					<ul>
						<li><a href=""><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/></a>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
					</ul>
				</div>
				<div class="FlowerComm">
					<ul>
						<li><a href=""><img src="themes/default/images/dg_img8.jpg"  width="182" height="170"/></a>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
						<li><img src="themes/default/images/xhimg.jpg"  width="182" height="170"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
						</li>
					</ul>
				</div>
				<div class="FlowerComm">郁金香</div>
				<div class="FlowerComm">牡丹花</div>
				<div class="FlowerComm">法国玫瑰</div>
				<div class="FlowerComm" style="display:block;">
					<ul>
						<li><a href=""><img src="themes/default/images/xh_img9.png"  width="180" height="180"/></a>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
							<p class="money">￥300.0元</p>
						</li>
						<li><img src="themes/default/images/xh_img10.png"  width="180" height="180"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
							<p class="money">￥300.0元</p>
						</li>
						<li><img src="themes/default/images/xh_img9.png"  width="180" height="180"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
							<p class="money">￥300.0元</p>
						</li>
						<li><img src="themes/default/images/xh_img10.png"  width="180" height="180"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
							<p class="money">￥300.0元</p>
						</li>
						<li><img src="themes/default/images/xh_img9.png"  width="180" height="180"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
							<p class="money">￥300.0元</p>
						</li>
						<li><img src="themes/default/images/xh_img10.png"  width="180" height="180"/>
							<p><a href="">爱诺啦鲜花速递红玫瑰花百合花</a></p>
							<p class="money">￥300.0元</p>
						</li>
					
						
					</ul>
				</div>
			</div>
			
		<div style="clear:both;"></div>
		</div>
	</div>




<div id="Birthday" class="commCss">
	<p class="ti">生日礼物</p>
	<div class="PartCon">
		
		<div class="PartL">
			<img src="themes/default/images/prev.png" class="prev" /> 
			<img src="themes/default/images/next.png" class="next"/>
			<div>
				<img src="themes/default/images/introsr.jpg" width='320'/>
				<p class="title">瞌睡兔音乐枕 午休音乐枕头 可连接手机、MP3听音乐的玩偶公仔</p>
				<span class="money">特价：<font>116.0元</font></span>
			</div>
		</div>
		

		
		<div class="PartM">
			<ul>
				<li class="active">送女朋友<img src="themes/default/images/ico.png"  /></li>
				<li>送男朋友</li>
				<li>送父亲</li>
				<li>送员工</li>
				<li>同事</li>
			</ul>
			<img src="themes/default/images/hot.jpg" width='175' height='150'/>
			<p>宠爱一生 925纯银紫水晶项链 </p>
			<span class="hot">热销产品</span>
		</div>
		
		<div class="PartR">
			<ul>
				<li>
					<img src="themes/default/images/srpic1.jpg" width='200' />
					<p>瞌睡兔音乐枕  <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic2.jpg" width='200' />
					<p>瞌睡兔音乐枕 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic3.jpg" width='200' />
					<p>午休音乐枕头 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic4.jpg" width='200' />
					<p>午休音乐枕头 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic5.jpg" width='200' />
					<p>瞌睡兔音乐枕头 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic6.jpg" width='200' />
					<p>瞌睡乐枕头 <span>￥30.0</span></p>
				</li>
			</ul>
		</div>
	</div>
	<div style="clear:both"></div>
</div>




<div id="Cake"  class="Part4">
	<p class="ti">生日蛋糕</p>
	<div class="Con">
		<div class="ConL">
			<ul>
				<li class="first">
					<dl>
						<dt><img src="themes/default/images/bimg.png"  width="268" height='268'/></dt>
						<dd class="ti">巧克力水果奶油蛋糕双层</dd>
						<dd class="info">简单介绍：</dd>
						<dd class="infos">我为您搭建的，是光彩缤纷的世界，是畅想甜蜜的世界，是欢乐的爱心世界！蛋糕在哪里，你的爱心就散播在哪里</dd>
						<dd class="but"><img src="themes/default/images/buy.png" /><img src="themes/default/images/join.png" /></dd>
					</dl>

				</li>
				<li>
					<h3>个性定制水晶音乐盒摆件</h3>
					<p>￥300.0元</p>
					<img src="themes/default/images/dg_img1.jpg" width="190" height="190" /></li>
				<li>
					<div class="box">
						<div class="box1">
							<h3>个性定制水晶音乐盒摆件</h3>
							<p>￥300.0元</p>
						</div>
						<div class="box2">
							<img src="themes/default/images/dg_img3.jpg" width="100" height="100"/>
						</div>
					</div>
					
					<div class="box">
						<div class="box1">
							<h3>个性定制水晶音乐盒摆件</h3>
							<p>￥300.0元</p>
						</div>
						<div class="box2">
							<img src="themes/default/images/dg_img2.jpg" width="100" height="100"/>
						</div>
					</div>
				</li>
				<li>
					<h3>个性定制水晶音乐盒摆件</h3>
					<p>￥300.0元</p>
					<img src="themes/default/images/dg_img1.jpg" width="190" height="190" />
				</li>
				<li>
					<h3>个性定制水晶音乐盒摆件</h3>
					<p>￥300.0元</p>
					<img src="themes/default/images/dg_img6.jpg" width="190" height="190" />
				</li>

			
			</ul>
		</div>

		<div class="ConR">
			
			<dl>
				<dt><img src="themes/default/images/dg_img6.jpg" width="80" height="80"/></dt>
				<dd>个性定制水晶音乐盒摆件</dd>
				<dd class="money">￥300.0元</dd>
			</dl>

			<dl>
				<dt><img src="themes/default/images/dg_img2.jpg" width="80" height="80"/></dt>
				<dd>个性定制水晶音乐盒摆件</dd>
				<dd class="money">￥300.0元</dd>
			</dl>

			<dl>
				<dt><img src="themes/default/images/dg_img3.jpg" width="80" height="80"/></dt>
				<dd>个性定制水晶音乐盒摆件</dd>
				<dd class="money">￥300.0元</dd>
			</dl>

			<dl>
				<dt><img src="themes/default/images/dg_img1.jpg" width="80" height="80"/></dt>
				<dd>个性定制水晶音乐盒摆件</dd>
				<dd class="money">￥300.0元</dd>
			</dl>
			<dl>
				<dt><img src="themes/default/images/dg_img6.jpg" width="80" height="80"/></dt>
				<dd>个性定制水晶音乐盒摆件</dd>
				<dd class="money">￥300.0元</dd>
			</dl>
			

		</div>
		
	<div style="clear:both"></div></div>
</div>




<div id="Holiday" class="Part5">

	
	<div class="CommNav">
		<img src="themes/default/images/ti.png" />
		<div class="bor">
			<span class="prev"><img src="themes/default/images/prev.png" /> </span>
			<span class="next"><img src="themes/default/images/next.png" />  </span>
			<div style="padding-top:20px;">
				<img src="themes/default/images/introsr.jpg" width='190'/>
				<p class="title">瞌睡兔音乐枕 午休音乐枕头 可连接手机、MP3听音乐的玩偶公仔</p>
				<span class="money">特价：<font>116.0元</font></span>
			</div>

		</div>
	</div>
	
	
	
	<div class="CommFlash L">
		<div class="comFlash">

			<ul class="scroll">
				<li><img src="themes/default/images/dg_flash3.jpg" width="325" height="320"/></li>
				<li><img src="themes/default/images/dg_flash2.jpg" width="325" height="320"/></li>
				<li><img src="themes/default/images/dg_flash1.jpg" width="325" height="320"/></li>
				<li><img src="themes/default/images/dg_img2.jpg"  width="325" height="320"/></li>
			</ul>

			<img src="themes/default/images/fprev.png" class="prev"/>
			<img src="themes/default/images/fnext.png" class="next"/>

			<ul class="But">
				<li class="hover"></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>	

		</div>
	</div>
	

	
	<div class="CommList R">
			<ul>
				<li>
					<img src="themes/default/images/srpic1.jpg" width='200' />
					<p>瞌睡兔音乐枕  <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic2.jpg" width='200' />
					<p>瞌睡兔音乐枕 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic3.jpg" width='200' />
					<p>午休音乐枕头 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic4.jpg" width='200' />
					<p>午休音乐枕头 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic5.jpg" width='200' />
					<p>瞌睡兔音乐枕头 <span>￥30.0</span></p>
				</li>
				<li>
					<img src="themes/default/images/srpic6.jpg" width='200' />
					<p>瞌睡乐枕头 <span>￥30.0</span></p>
				</li>
			</ul>
	</div>
	
	<div style="clear:both"></div>
</div>




<?php echo $this->fetch('library/page_footer.lbi'); ?>


<script type="text/javascript" src="js/jquery.js" ></script>
<script type="text/javascript" src="js/index.js" ></script>


	<script type="text/javascript">

		$("img.prev").click(function(){

			$(".imgList ul").animate({"left":-280},500,function(){
				$(this).append($(this).find("li:first"));
				$(this).css("left",0);
			});

		});

		$("img.next").click(function(){

			autoPlay();

		});

		var cleartime=setInterval(autoPlay,2000);
		//鼠标放上去，停止播入
		$("img.next,img.prev").hover(function(){
			clearInterval(cleartime);
		},function(){
			cleartime=setInterval(autoPlay,3000);
		});

		function autoPlay(){

			$(".imgList ul").prepend($(".imgList ul li:last"));
			$(".imgList ul").css("left",-280);
			$(".imgList ul").animate({"left":0},500);
		}
		
		
		
		//选项卡效果
		$(".PartM ul li").mouseover(function(){
			$(".PartM ul li").removeClass("active");
			$(this).addClass("active");
			
			var _index=$(this).index();
			$(".PartR .introComm").eq(_index).show().siblings().hide();
		});
	</script>
	
	
	
	

 </body>
</html>
