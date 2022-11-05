$(document).ready(function(){
	$(".content_info_img").hide();
	$("#footer .bottom_footer .content_info .detail").mouseover(function(){
		$(".content_info_img").css({"left":$(this).offset().left+$(this).width()-$(".content_info_img").width()+"px","top":$(this).offset().top-$(".content_info_img").height()+"px"}).show();
	}).mouseout(function(){
		$(".content_info_img").hide();
	});
	$("#footer .mobAddress").hide();
	var downClick=true;
	$("#footer #logo .down").click(function(){
		if(downClick==true){
			$("#footer .mobAddress").stop().slideDown(200, "linear");
			$(this).text("▲");
			downClick=false;
		}
		else{
			$("#footer .mobAddress").stop().slideUp(200, "linear");
			$(this).text("▼");
			downClick=true;
		}
	});
});