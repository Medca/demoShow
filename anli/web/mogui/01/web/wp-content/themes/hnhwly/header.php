
 <!--网站头部结束-->
  <div id="Top">
	<!--头部信息开始-->
	<div class="head">
			<img src="<?php bloginfo('template_url'); ?>/images/cart.png" align='absmiddle'/>&nbsp;全省免费服务热线：
			<span>96556</span> <span>0731-84635555</span>旅行社同行热线：<span>0731-84402588</span> <a href="#">登陆</a> <a href="#">注册</a>
	</div>
	<!--头部信息结束-->

	
	<!--banner开始-->
	<div id="header">
		<div class="banner"><a href=""><img src="<?php bloginfo('template_url'); ?>/images/logo.png" /></a></div>
		<div class="logo">
			<?php wp_nav_menu(array(
				'theme_location'=>'MainNav'
			)); ?>
		</div>
		<!--搜索开始-->
		<div class="search">
		<!--<?php get_search_form(); ?>-->
			<form>
				<input type="text" class='txt' placeholder="输入目的地" id="s" name="s"/>
				<input type="submit" class='but' value="" id="searchsubmit"/>
			</form>
		</div>
		<!--搜索结束-->
	</div>
	<!--banner结束-->
	<!--<?php wp_nav_menu( array( 'theme_location' => 'MainNav' ) ); ?>
	-->
	<!--导航开始-->
	<div class="Nav">
		<div class="mainNav">
			<ul>
				<li><a href="/web/?cat=2">出境跟团游</a>
					<div class="menu">
						<p><span>台湾港澳:</span> <a href="/web/?cat=10">台湾</a> | <a href="#">香港</a> | <a href="#">澳门</a></p>
						<p><span>东南亚:</span> <a href="/web/?cat=13">泰国</a> | <a href="#">新加坡</a> | <a href="#">马来西亚</a> | <a href="#">越南</a> | <a href="#">柬埔寨：</a> | <a href="#">老挝</a> | <a href="#">印度</a> | <a href="#">尼泊尔</a></p>
						<p><span>台湾港澳:</span> <a href="#">台湾</a> | <a href="#">香港</a> | <a href="#">澳门</a></p>
						<p><span>东南亚:</span> <a href="#">泰国</a> | <a href="#">新加坡</a> | <a href="#">马来西亚</a> | <a href="#">越南</a> | <a href="#">柬埔寨</a> | <a href="#">老挝</a> | <a href="#">印度</a> | <a href="#">尼泊尔</a></p>
					</div>
				</li>

				<li><a href="#">出境自由行</a>
					<div class="menu"></div>
				</li>

				<li><a href="#">国内跟团游</a>
					<div class="menu"></div>
				</li>

				<li><a href="#">国内自由行</a>
					<div class="menu"></div>
				</li>

				<li><a href="#">湖南周边游</a>
					<div class="menu"></div>
				</li>
			</ul>
		</div>

		<div class="smallNav"><a href="#">泰国</a> <a href="#">台湾</a> <a href="#">普吉</a></div>
	</div>
	<!--导航结束-->
  </div>
<!--网站头部结束-->


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/index.js"></script>