	//�����˵���ʵ��
	$(".Nav .mainNav ul li").hover(function(){
		$(this).find(".menu").show();
		$(this).addClass("hover");
	},function(){
		$(this).find(".menu").hide();
		$(this).removeClass("hover");
	});

	//=======����ֲ�ͼ��ʵ��=======
	var _index=0;//��ʼ������
	var timePlay=null;
	$("#Adv .ImgList").eq(0).show().siblings("div").hide();
	$("ul.button li").hover(function(){/*���������*/ 
		clearInterval(timePlay);//�崦��ʱ������
		_index=$(this).index();//��ȡ��ǰli���к�
		$(this).addClass("hover").siblings().removeClass("hover");
		//fadeIn  ����  fadeOut ����  
		$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();
	},function(){/*����ƿ�*/
		autoPlay();//���ö�ʱ������
	});

	//�Զ��ֲ�
	//�����Զ��ֲ��ĺ���
	function autoPlay(){
		//���ö�ʱ��
		timePlay=setInterval(function(){
			_index++;
			if(_index<4){
				if(_index==3){_index=-1; }//���-1 
				$("ul.button li").eq(_index).addClass("hover").siblings().removeClass("hover");//��ʾ��Ť
				$("#Adv .ImgList").eq(_index).fadeIn().siblings("div").fadeOut();//��ʾͼƬ
				 
			}else{_index=-1;/*�������к�Ϊ-1,�������ŵ�һ��ͼƬ*/}
		},2000);	
	};
	autoPlay();


	//·���Ƽ� ͼƬ���ֻ���Ч��
	$("ul.sel_imgList li").hover(function(){
			$(this).find("p").stop().animate({height:"41px"},200)
	},function(){
			$(this).find("p").stop().animate({height:"0px"},200)
			});

	//�������� Part3ѡ���ʽ   
function partComm(selBut,imgCon,Con){
		var _index3=0;
		$(selBut).mouseover(function(){
		_index3=$(this).index();
		$(this).addClass("hover").siblings().removeClass("hover");
		$(imgCon).eq(_index3).show().siblings().hide();
		$(Con).eq(_index3).show().siblings().hide();
});

};

//��ͨ�õĴ��룬��װ�ں�����ͨ���εķ�ʽ��������
partComm("#Part3 p.title a.sel_a","#Part3 .part3Con .Part3ConL img","#Part3 .Part3ConR .Part3ConR_comm");
partComm("#Part4 p.title a.sel_a","#Part4 .part3Con .Part3ConL img","#Part4 .Part3ConR .Part3ConR_comm");


/*���岿��*/
function partComm2(selBut,Con){
		var _index3=0;
		$(selBut).mouseover(function(){
		_index3=$(this).index();
		$(this).addClass("hover").siblings().removeClass("hover");
		$(Con).eq(_index3).show().siblings().hide();
});

};

partComm2("#part5 ul.part5_selbut li","#part5 .part5_Con .part5_content");
//·���Ƽ����Ч��
partComm2("ul.select_but li",".select_con .select_content");

$(".part5_content .part5Comm").hover(function(){
	//$(this).find("p").stop().slideUp();//������������
		$(this).find("p").stop(true,true).slideDown();//������������չ��
},function(){
		$(this).find("p").stop(true,true).slideUp();//������������
		//$(this).find("p").stop().slideDown();//������������չ��
});


//΢�Ŷ�ά����ʾ
$("#fixedBox_Con ul li.li4 a.wxrelative").hover(function(){
		$(this).find("img.erm").show();
},function(){
		$(this).find("img.erm").hide();
});


//�ḡ�����ʾ

$(window).scroll(function(){
	var Top=$(window).scrollTop();//�����ĸ߶�
	if(Top>1000){
		$("#fixedBox").addClass("scrollDisplay");	//���������߶ȴ���1000 �ͼ�����ʽ class="scrollDisplay"
	}else{
			$("#fixedBox").removeClass("scrollDisplay");
	}
});


//���߿ͷ��رչ���
$("#Kf img.but_close").click(function(){
	$("#Kf").hide();//����	
});


//��ҳͼƬ�����л�Ч��
	//��Ť�л�Ч��
	var click_num=0;//�������
	var setTime3=null;//����ʱ��
	var setTime4=null;//���Ҷ�ʱ��
	var len=$("#webPart2_Scroll .webPart2_ScrollCon dl").length;//��ȡ�ж��ٸ� dl(ͼƬ�б�)
	$("#webPart2_r img.dirl").click(function(){
		clearInterval(setTime3);
		click_num++;
		if(click_num<len-2){
		$("#webPart2_Scroll .webPart2_ScrollCon").animate({left:-168*click_num+"px"},1000);
		}else{alert("��ͷ��"); click_num=len-3;}
	});

	//���л���ŤЧ��
	var click_num=0;//�������
	var setTime3=null;//����ʱ��
	var setTime4=null;//���Ҷ�ʱ��
	var len=$("#webPart2_Scroll .webPart2_ScrollCon dl").length;//��ȡ�ж��ٸ� dl(ͼƬ�б�)
	$("#webPart2_r img.dirl").click(function(){
		clearInterval(setTime3);
		click_num++;
		if(click_num>=0){
		$("#webPart2_Scroll .webPart2_ScrollCon").animate({left:-168*click_num+"px"},1000);
		}else{alert("�ұߵ�ͷ��!!"); click_num=0;}
	});


	//�Զ��ֲ�
	function autoPlay3(){
		setTime3=setInterval(function(){
			//alert("ss");
			click_num++;// ���������1
			if(click_num<len-2){
				$("#webPart2_Scroll .webPart2_ScrollCon").animate({left:-168*click_num+"px"},1000);
			}else{click_num=len-3; autoPlay4();clearInterval(setTime3);//�����ʱ�� 
				}
		},1000);
	}
	autoPlay3();

	function autoPlay4(){
		setTime4=setInterval(function(){

			click_num--;//���������1 
		if(click_num>=0){
			$("#webPart2_Scroll .webPart2_ScrollCon").animate({left:-168*click_num+"px"},1000);
		}else{ click_num=0;autoPlay3();clearInterval(setTime4);//�����ʱ��
			}

		},1000);
		
}


//��ҳ����ֲ�����ʽ
var web_index=0;
var up_click=0;
var sjs=0;
var arrylist=null;
$("ul.webAdvbutton li").click(function(){
	web_index=$(this).index();//��ȡ��ǰ���li�����кţ��������� web_index;
	$(this).addClass("hover").siblings().removeClass("hover");
	$(".webAdvcon img").eq(up_click).css("z-index","3");//�����ߵ�����ͼƬ����������
	$(".webAdvcon img").eq(web_index).css("z-index","2")
	//���ֶ���Ч��
	$(".text dd").eq(web_index).show().siblings().hide();
	sjs=getRandom(4)-1;
	arrylist=[{"top":"-270px"},{"right":"-361px"},{"bottom":"-270px"},{"left":"-361px"}];
	if(up_click==web_index){}else{//��ǰ���������кź����ڵ�������кŲ����ʱ����ִ��
		$(".webAdvcon img").eq(up_click).stop(true,true).animate(arrylist[sjs],500,function(){
			$(".webAdvcon img").eq(up_click).removeAttr("style");
			up_click=web_index;//���淢ǰ��Ť�����Ӧ�����к�
		});
	}
});


//����������񵽵� 0-n֮�������
function getRandom(n){
 return Math.floor(Math.random()*n+1)    
}




 //�羰��ϸҳ��ͼƬ�л�Ч��
partComm2(".Deltail_but img",".Deltail_img img");



/*ǩ֤ҳ��ϸ���ݵĹ���Ч��*/
var web_index=0;
var h1 = 0;
var h2 = h1 + $(".Web_QzScrollCon").eq(0).height();//�ڶ�����Ť�����ĸ߶�
var h3 = h2 + $(".Web_QzScrollCon").eq(1).height();
var h4 = h3 + $(".Web_QzScrollCon").eq(2).height();
var h5 = h4 + $(".Web_QzScrollCon").eq(3).height();
var arr = [h1,h2,h3,h4,h5];
$(".Web_QzNav span").hover(function(){
	 web_index = $(this).index();
	 $(this).addClass("hover").siblings("span").removeClass("hover");
	 $(".Web_QzScroll").stop(true,true).animate({scrollTop:arr[web_index-1]+"px"},500);
});