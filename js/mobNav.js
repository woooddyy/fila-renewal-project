$(document).ready(function(){
	var category_mobile=$("#mobHeader #cate");
	category_mobile.mouseover(function(){
		$("#mobHeader #cate p span").css({"width":"100%"});
	}).mouseout(function(){
		$("#mobHeader #cate p span").css({"width":0});
	});
	var cateClick=0;
	category_mobile.click(function(){
		if(cateClick==0){
			$("#mobHeader #cate .cateFirst").css({"transform":"rotate(45deg)","top":"8px"});
			$("#mobHeader #cate .cateSec").css({"transform":"rotate(-45deg)","top":"8px"});
			$("#mobHeader #cate .cateThird").css({"opacity":0});
			/*mobNav 떨어지기*/
			$("#mobNav").stop().slideDown(600,"linear");
			cateClick=1;
		}
		else{
			$("#mobHeader #cate .cateFirst").css({"transform":"rotate(0deg)","top":"0px"});
			$("#mobHeader #cate .cateSec").css({"transform":"rotate(0deg)","top":"8px"});
			$("#mobHeader #cate .cateThird").css({"opacity":1});
			$("#mobNav").stop().slideUp(600,"linear");
			$("#mobNav .mobSubNav").stop().slideUp(300,"linear");
			cateClick=0;
		}
	});
	$("#mobNav li a.mobNavTitle").bind("click focus",function(){
		$("#mobNav li .mobSubNav").stop().slideUp(300,"linear");
		$(this).next(".mobSubNav").stop().slideDown(300,"linear");
	});
	//창 조금 떨어지면 메뉴바 나오기
	$(window).scroll(function(){
		var nowScroll=$(document).scrollTop();
		if($("body").width()<768){
			if(nowScroll>500){
				$("#mobHeader").css({"position":"fixed","left":0,"top":0});
				$("#container").css({"padding-top":"51px"});
			}
			else{
				$("#mobHeader").css({"position":"relative"});
				$("#container").css({"padding-top":0});
			}
		}
	});
});