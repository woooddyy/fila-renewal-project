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
	$("#productTitle .productCateArea .online").bind("click focus",function(){
		$("#productMain .total span").text(6);
		$("#productMain .productList li").hide();
		$("#productMain .productList .online").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .jacket").bind("click focus",function(){
		$("#productMain .total span").text(14);
		$("#productMain .productList li").hide();
		$("#productMain .productList .jacket").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .fleece").bind("click focus",function(){
		$("#productMain .total span").text(10);
		$("#productMain .productList li").hide();
		$("#productMain .productList .fleece").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .sweat").bind("click focus",function(){
		$("#productMain .total span").text(10);
		$("#productMain .productList li").hide();
		$("#productMain .productList .sweat").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .hoodie").bind("click focus",function(){
		$("#productMain .total span").text(6);
		$("#productMain .productList li").hide();
		$("#productMain .productList .hoodie").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .ts").bind("click focus",function(){
		$("#productMain .total span").text(3);
		$("#productMain .productList li").hide();
		$("#productMain .productList .ts").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .pants").bind("click focus",function(){
		$("#productMain .total span").text(2);
		$("#productMain .productList li").hide();
		$("#productMain .productList .pants").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
});