$(document).ready(function(){
	$("#rightMenu .mypageArea").bind("mouseover focusin",function(){
		$("#rightMenu .mypageArea a span").text("▲");
		$("#rightMenu .mypageArea ul").stop().slideDown(500,"linear");
	}).bind("mouseout focusout",function(){
		$("#rightMenu .mypageArea a span").text("▼");
		$("#rightMenu .mypageArea ul").stop().slideUp(500,"linear");
	});
});