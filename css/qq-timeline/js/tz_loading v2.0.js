/* tanzhouedu v1.0 duke .@CopyRight2015 http://www.tanzhouedu.com/*/
$.tzLoading=function(opts){
	// 如果插件存在就删除
	$("#tz_loading").remove();
	// 创建一个插件的模板
	var $loading = $("<div id='tz_loading' class='tz_loading "+tz_animateIn()+"'>"+opts.content+"</div>");	
	// 追加模板
	$("body").append($loading);
	// 动态设置宽度和高度
	if(opts.width){$loading.width(opts.width);}
	if(opts.height){$loading.height(opts.height).css("lineHeight",opts.height+"px");}
	// 居中定位插件
	tz_center_loading($loading);
	// 浏览器窗口改变的时候居中定位
	initEvent($loading,opts);
};
		

// 设置动态居中的算法
function tz_center_loading($loading){
	var width = $loading.width(); //计算loading的宽度
	var height = $loading.height(); // loading的高度
	var ww = $(window).width(); // 浏览器的可见的宽度
	var wh = $(window).height(); // 浏览器的可见的高度
	var left = (ww - width) / 2;
	var top = (wh - height) / 2;
	$loading.css({top:top,left:left});  // 设置坐标位置
}
var timer = null;

// 浏览器窗口改变的时候居中定位
function initEvent($loading,opts){
	//当调整浏览器窗口的大小时，发生 resize 事件
	$(window).resize(function(){
		tz_center_loading($loading);
	});
		// 点击弹出层，消失掉
	$loading.click("click",function(){
		$(this).removeClass().addClass("tz_loading");
		$(this).toggleClass(tz_animateOut());
	});
	// 定时关闭
	if(opts.timeout){
		timer = setTimeout(function(){
			$loading.trigger("click");
		},opts.timeout*1000);
	}
}


// 动画出场秀（随机出现）
function tz_animateIn(index){
	var animateIn = [];
	animateIn.push("animated bounce");//0
	animateIn.push("animated tada");//1
	animateIn.push("animated swing");//2
	animateIn.push("animated wobble");//3
	animateIn.push("animated flip");//4
	animateIn.push("animated flipInX");//5
	animateIn.push("animated flipInY");//6
	animateIn.push("animated fadeIn");//7
	animateIn.push("animated fadeInUp");//8
	animateIn.push("animated fadeInDown");//9
	animateIn.push("animated fadeInLeft");//10
	animateIn.push("animated fadeInRight");//11
	animateIn.push("animated fadeInUpBig");//12
	animateIn.push("animated fadeInDownBig");//13
	animateIn.push("animated fadeInLeftBig");//14
	animateIn.push("animated fadeInRightBig");//15
	animateIn.push("animated bounceIn");//16
	animateIn.push("animated bounceInUp");//17
	animateIn.push("animated bounceInDown");//18
	animateIn.push("animated bounceInLeft");//19
	animateIn.push("animated bounceInRight");//20
	animateIn.push("animated rotateIn");//21
	animateIn.push("animated rotateInUpLeft");//22
	animateIn.push("animated rotateInDownLeft");//23
	animateIn.push("animated rotateInUpRight");//24
	animateIn.push("animated rotateInDownRight");//25
	animateIn.push("animated rollIn");//26
	if(!index){
		var len = animateIn.length;
		var random=Math.floor(Math.random()*len);
		return animateIn[random];
	}else{
		return animateIn[index];
	}
}

//动画消失的效果
function tz_animateOut(index){
	var animateOut = [];
	animateOut.push("animated fadeOut");//2
	animateOut.push("animated fadeOutUp");//3
	animateOut.push("animated fadeOutDown");//4
	animateOut.push("animated fadeOutLeft");//5
	animateOut.push("animated fadeOutRight");//6
	animateOut.push("animated fadeOutUpBig");//7
	animateOut.push("animated fadeOutDownBig");//8
	animateOut.push("animated fadeOutLeftBig");//9
	animateOut.push("animated fadeOutRightBig");//10
	animateOut.push("animated bounceOut");//11
	animateOut.push("animated bounceOutUp");//12
	animateOut.push("animated bounceOutDown");//13
	animateOut.push("animated bounceOutLeft");//14
	animateOut.push("animated bounceOutRight");//15
	animateOut.push("animated rotateOut");//16
	animateOut.push("animated rotateOutUpLeft");//17
	animateOut.push("animated rotateOutDownLeft");//18
	animateOut.push("animated rotateOutDownRight");//19
	animateOut.push("animated rollOut");//21
	if(!index){
		var len = animateOut.length;
		var r = Math.floor(Math.random()*len);
		return animateOut[r];
	}else{
		return animateOut[index];
	}
};




