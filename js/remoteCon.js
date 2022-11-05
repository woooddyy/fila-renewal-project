$(document).ready(function(){
	//remoteCon 영역
		$(window).scroll(function(){
			var nowScroll=$(document).scrollTop();
			if(nowScroll>200){
				$("#remoteCon").stop().fadeIn(300,"linear");
			}
			else{
				$("#remoteCon").stop().fadeOut(200,"linear");
			}
		});
		$("#remoteCon ul li:eq(0) a").bind("click focus",function(){
			$("html, body").animate({scrollTop:$("#bestSectionWrap").offset().top},500,"linear");
		});
		$("#remoteCon ul li:eq(1) a").bind("click focus",function(){
			$("html, body").animate({scrollTop:$("#underwearSectionWrap").offset().top},500,"linear");
		});
		$("#remoteCon ul li:eq(2) a").bind("click focus",function(){
			$("html, body").animate({scrollTop:$("#kidsSectionWrap").offset().top},500,"linear");
		});
		$("#remoteCon ul li:eq(3) a").bind("click focus",function(){
			$("html, body").animate({scrollTop:$("#editorialWrap").offset().top},500,"linear");
		});
});