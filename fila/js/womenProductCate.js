$(document).ready(function(){
	$("#category dd").hide();
	$("#category dt").bind("click focus", function(){
		$("#category dd").slideUp(300,"linear");
		$(this).next("dd").slideDown(300,"linear");
		$("#category .moreCate .more .open").show();
	});
	$("#category .moreCate").bind("click focus",function(){
		$(this).children(".more").children(".open").hide();
	});
	$("#category .allCate").bind("click focusin",function(){
		$("#titleArea #visual").css({"backgroundImage":"url('../img/womensClothesVisual_main.jpg')"});
		$("#visual h3").text("women's wear");
	});
	$("#category .onlineCate").bind("click focusin",function(){
		$("#titleArea #visual").css({"backgroundImage":"url('../img/womensClothesVisual_online.jpg')"});
		$("#visual h3").text("women's wear");
	});
	$("#category .jacketCate").next("dd").children("ul").children("li").bind("click focusin",function(){
		$("#titleArea #visual").css({"backgroundImage":"url('../img/womensClothesVisual_jacket.jpg')"});
		$("#visual h3").text("women's jacket");
	});
	$("#category .shirtsCate").next("dd").children("ul").children("li").bind("click focusin",function(){
		$("#titleArea #visual").css({"backgroundImage":"url('../img/womensClothesVisual_tshirts.jpg')"});
		$("#visual h3").text("women's t-shirts");
	});
	$("#category .bottomCate").next("dd").children("ul").children("li").bind("click focusin",function(){
		$("#titleArea #visual").css({"backgroundImage":"url('../img/womensClothesVisual_bottom.jpg')"});
		$("#visual h3").text("women's bottom");
	});
	//select 영역
	var selectBtn=$("#selectTitle .selectBtn");
	var selectedText=$("#selectTitle .selectedText");
	var a=0;
	selectBtn.click(function(){
		if(a==0){
			selectBtn.text("▲");
			$("#select ul").stop().slideDown(300,"linear");
			a=1;
		}
		else{
			selectBtn.text("▼");
			$("#select ul").stop().slideUp(300,"linear");
			a=0;
		}
	});
	var menu=$("#select li a");
	menu.click(function(){
		selectedText.text($(this).attr("title"));
		selectBtn.text("▼");
		$("#select ul").stop().slideUp(300,"linear");
		a=0;
	});
	$("#category .allCate a").bind("click focus",function(){
		$("#productList li").show().css({"marginRight":"4%"});
		$("#productList li:nth-child(4n)").css({"marginRight":"0"});
	});
	$("#category .onlineCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .online").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .online:eq(3)").css({"marginRight":"0"});
	});
	$("#category .downCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .down").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .down:eq(3)").css({"marginRight":"0"});
	});
	$("#category .fleeceCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .fleece").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .fleece:eq(3)").css({"marginRight":"0"});
	});
	$("#category .jacTrackCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .jacket").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .jacket:eq(3)").css({"marginRight":"0"});
	});
	$("#category .sweatCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .sweatshirts").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .sweatshirts:eq(3)").css({"marginRight":"0"});
	});
	$("#category .hoodieCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .hoodie").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .hoodie:eq(3)").css({"marginRight":"0"});
	});
	$("#category .shortsleeveCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .shortsleeve").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .shortsleeve:eq(3)").css({"marginRight":"0"});
	});
	$("#category .longsleeveCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .longsleeve").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .longsleeve:eq(3)").css({"marginRight":"0"});
	});
	$("#category .shortsCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .shorts").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .shorts:eq(3)").css({"marginRight":"0"});
	});
	$("#category .longpantsCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .longpants").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .longpants:eq(3)").css({"marginRight":"0"});
	});
	$("#category .leggingsCate a").bind("click focus",function(){
		$("#productList li").hide();
		$("#productList .leggings").show();
		$("#productList li:nth-child(4n)").css({"marginRight":"4%"});
		$("#productList .leggings:eq(3)").css({"marginRight":"0"});
	});
});