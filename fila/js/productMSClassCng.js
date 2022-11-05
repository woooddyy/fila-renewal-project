$(document).ready(function(){	
	$("#productTitle .productCateArea div p").bind("click foucs",function(){
		$("#productTitle .productCateArea div p").removeClass("on");
		$(this).addClass("on");
	});
	/*카테고리 클릭하면 제품 리스트 바뀌기*/
	$("#productTitle .productCateArea .all").bind("click focus",function(){
		$("#productMain .total span").text(44);
		$("#productMain .productList li").hide();
		$("#productMain .productList li").show();
		$("#productMain .productList li.nobig").removeClass("nobig").addClass("big");
		$("#page a").css({"display":"block"}).removeClass("on");
		$("#page .page1").addClass("on");
	});
	$("#productTitle .productCateArea .ugly").bind("click focus",function(){
		$("#productMain .total span").text(24);
		$("#productMain .productList li").hide();
		$("#productMain .productList .ugly").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .hert").bind("click focus",function(){
		$("#productMain .total span").text(24);
		$("#productMain .productList li").hide();
		$("#productMain .productList .hert").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .sneak").bind("click focus",function(){
		$("#productMain .total span").text(5);
		$("#productMain .productList li").hide();
		$("#productMain .productList .sneak").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .rgb").bind("click focus",function(){
		$("#productMain .total span").text(1);
		$("#productMain .productList li").hide();
		$("#productMain .productList .rgb").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .per").bind("click focus",function(){
		$("#productMain .total span").text(2);
		$("#productMain .productList li").hide();
		$("#productMain .productList .per").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .slip").bind("click focus",function(){
		$("#productMain .total span").text(5);
		$("#productMain .productList li").hide();
		$("#productMain .productList .slip").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .sandal").bind("click focus",function(){
		$("#productMain .total span").text(2);
		$("#productMain .productList li").hide();
		$("#productMain .productList .sandal").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
	$("#productTitle .productCateArea .golf").bind("click focus",function(){
		$("#productMain .total span").text(2);
		$("#productMain .productList li").hide();
		$("#productMain .productList .golf").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
		$("#page a").css({"display":"none"});
	});
});