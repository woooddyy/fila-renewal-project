$(document).ready(function(){	
	$("#productTitle .productCateArea div p").bind("click foucs",function(){
		$("#productTitle .productCateArea div p").removeClass("on");
		$(this).addClass("on");
	});
	/*카테고리 클릭하면 제품 리스트 바뀌기*/
	$("#productTitle .productCateArea .all").bind("click focus",function(){
		$("#productMain .total span").text(36);
		$("#productMain .productList li").hide();
		$("#productMain .productList li.page1").show();
		$("#productMain .productList li.nobig").removeClass("nobig").addClass("big");
		$("#page a").css({"display":"block"}).removeClass("on");
		$("#page .page1").addClass("on");
	});
	$("#productTitle .productCateArea .new").bind("click focus",function(){
		$("#productMain .total span").text(2);
		$("#productMain .productList li").hide();
		$("#productMain .productList .new").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .backpack").bind("click focus",function(){
		$("#productMain .total span").text(11);
		$("#productMain .productList li").hide();
		$("#productMain .productList .backpack").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .tote").bind("click focus",function(){
		$("#productMain .total span").text(4);
		$("#productMain .productList li").hide();
		$("#productMain .productList .tote").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .eco").bind("click focus",function(){
		$("#productMain .total span").text(8);
		$("#productMain .productList li").hide();
		$("#productMain .productList .eco").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .shoulder").bind("click focus",function(){
		$("#productMain .total span").text(10);
		$("#productMain .productList li").hide();
		$("#productMain .productList .shoulder").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .etc").bind("click focus",function(){
		$("#productMain .total span").text(10);
		$("#productMain .productList li").hide();
		$("#productMain .productList .etc").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
});