$(document).ready(function(){	
	$("#productTitle .productCateArea div p").bind("click foucs",function(){
		$("#productTitle .productCateArea div p").removeClass("on");
		$(this).addClass("on");
	});
	/*카테고리 클릭하면 제품 리스트 바뀌기*/
	$("#productTitle .productCateArea .all").bind("click focus",function(){
		$("#productMain .total span").text(18);
		$("#productMain .productList li").hide();
		$("#productMain .productList li").show();
		$("#productMain .productList li.nobig").removeClass("nobig").addClass("big");
	});
	$("#productTitle .productCateArea .hat").bind("click focus",function(){
		$("#productMain .total span").text(4);
		$("#productMain .productList li").hide();
		$("#productMain .productList .hat").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
	});
	$("#productTitle .productCateArea .socks").bind("click focus",function(){
		$("#productMain .total span").text(5);
		$("#productMain .productList li").hide();
		$("#productMain .productList .socks").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
	});
	$("#productTitle .productCateArea .etc").bind("click focus",function(){
		$("#productMain .total span").text(9);
		$("#productMain .productList li").hide();
		$("#productMain .productList .etc").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
	});
	$("#productTitle .productCateArea .wonnie").bind("click focus",function(){
		$("#productMain .total span").text(3);
		$("#productMain .productList li").hide();
		$("#productMain .productList .wonnie").show();
		$("#productMain .productList li.big").removeClass("big").addClass("nobig");
	});
});