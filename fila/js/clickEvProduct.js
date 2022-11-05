$(document).ready(function(){
	$("#productTitle .productCateArea div p").bind("click foucs",function(){
		$("#productTitle .productCateArea div p").removeClass("on");
		$(this).addClass("on");
	});
	$("#productMain ul li").hide();
	$("#productMain .page1").show();
	$("#page a").bind("click focus",function(){
		$("#productMain li").hide();
		$("#productMainWrap #page a").removeClass("on");
	});
	$("#page .page1").bind("click focus",function(){
		$("#productMain .page1").show();
		$(this).addClass("on");
		var category=$("#productTitle .productCateArea").offset().top;
		$("html, body").animate({scrollTop:category},500,"linear");
	});
	$("#page .page2").bind("click focus",function(){
		$("#productMain .page2").show();
		$(this).addClass("on");
		var category=$("#productTitle .productCateArea").offset().top;
		$("html, body").animate({scrollTop:category},500,"linear");
	});
	$("#page .page3").bind("click focus",function(){
		$("#productMain .page3").show();
		$(this).addClass("on");
		var category=$("#productTitle .productCateArea").offset().top;
		$("html, body").animate({scrollTop:category},500,"linear");
	});
});