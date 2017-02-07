//jQuery封装插件要解决几个问题，重构性，参数的覆盖，格式
//弹出层的组件代码
//组件开发的几个步骤
//初始化init
//模板template
//参数defaults
//事件events
//回调函数
//延伸
(function($){
	//弹出组件
	$.tzDialog = {
		zindex:100,
		alert:function(options){
			var $dialog = this.init(options);
			$dialog.find(".cancle").remove();
		},
		sure:function(options){
			var $dialog = this.init(options);
			$dialog.find(".sure").remove();
			$dialog.find(".cancle").remove();
		},

		confirm:function(options){
			this.init(options);
		},
		//初始化
		init:function(options){
			this.zindex++;
			//对象的继承和覆盖，后面的对象覆盖相同属性的值，取并集，并且相同覆盖
			var opts = $.extend({},$.tzDialog.defaults,options);
			//弹出初始化
			var $dialog = this.template(opts);
			//更改大小，颜色，位置
			$dialog.css({
				width:opts.width,
				height:opts.height,
				zIndex:this.zindex,
				border:opts.border,
				background:opts.background
			}).next().css({
				zIndex:(this.zindex-1),
			});
			
			if(opts.autoHeight)$dialog.height("auto");
			//位置定位
			this._position($dialog,opts);
			//窗口改变
			this._resize($dialog,opts);
			//拖拽
			if(opts.drag)this._drag($dialog);
			//事件初始化
			this.events($dialog,opts);

			return $dialog;
		},
		//触发按钮事件和回调函数
		events:function($dialog,opts){
			//确定按钮
			$dialog.find(".sure").on("click",function(){
				if(opts.callback)opts.callback.call($dialog,true);
				//关闭阴影层
				$dialog.next().remove();
				//关闭弹出
				$dialog.remove();
			});
			//取消按钮
			$dialog.find(".cancle,.close").on("click",function(){
				if(opts.callback)opts.callback.call($dialog,false);
				//关闭阴影层
				$dialog.next().remove();
				//关闭弹出
				$dialog.remove();
			});

			if(opts.overlayClose){
				//点击阴影关闭弹出层
				$dialog.next().click(function(){
					$dialog.remove();
					$(this).remove();
				});
			}
		},
		//定位居中
		_position:function($dialog,opts){
			var left = (window.innerWidth - $dialog.width())/2;
			var top = (window.innerHeight - $dialog.height())/2;
			$dialog.css({left:left,top:top});
			//绑定一个窗口的改变事件
		},
		//窗口改变事件实时改变位置
		_resize:function($dialog,opts){
			var $this = this;
			$(window).resize(function(){
				$this._position($dialog,opts);
			});
		},
		//拖拽
		_drag:function($dialog,opts){
			$dialog.find(".tzdialog-title").mousedown(function(e){
				var ev = e || window.event;
				var x = ev.clientX - $dialog.offset().left;
				var y = ev.clientY - $dialog.offset().top;
				var w = $dialog.width();
				var h = $dialog.height();
				var maxl = window.innerWidth - w;
				var maxt = window.innerHeight - h;
				$(document).mousemove(function(e){
					var ev = e || window.event;
					var l = ev.clientX - x;
					var y = ev.clientY - y;
					if(l<=0)l=0;
					if(t<=0)t=1;
					if(l>=maxl)l=maxl;
					if(t>=maxt)t=maxt;
					$dialog.css({left:l,top:t});
				}).mouseup(function(){
					$(document).off("mousemove");
					$(document).off("mouseup");
				});
			});
		},
		//模板，换皮肤
		template:function(opts){
			var $dialog = $("<div class='tzdialog'>"+
			"	<div class='tzdialog-title'>"+opts.title+"</div>"+
			"   <a href='javascript:void(0);' class='close'>×</a> "+
			"	<div class='tzdialog-content'>"+
			"	<div class='tzdialog-body'>"+opts.content+"</div></div>"+
			"	<div class='tzdialog-buttons'>"+
			"			<button class='btn tzdialog-btn sure'>确定</button>"+
			"			<button class='btn tzdialog-btn cancle'>取消</button>"+
			"	</div>"+
			" </div>");
			//追加到body中
			$("body").append($dialog).append("<div class='tzui-overlay'></div>");
			return $dialog;
		}
	};

	//默认参数
	$.tzDialog.defaults = {
		width:360,//宽度和高度
		height:240,//支持固定又想支持自动
		autoHeight:false,//为true就是自动高度
		title:"提示",//标题提示
		drag:true,//是否禁止拖拽 true 是false否
		background:"#1F53A0",//背景色
		overlayClose:false,//是否点击阴影层关闭
		border:"1px solid #111",
		content:"您确定删除吗?您确定删除吗?",
		callback:function(ok){//回调函数
		
		}
	};

})(jQuery);