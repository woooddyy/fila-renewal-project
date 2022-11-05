$(document).ready(function(){
	var topBtn=$("#container .topBtn a");
	topBtn.hide();
	topBtn.click(function(){
		$("html, body").animate({scrollTop:0},600,"linear");
	});
	$(window).scroll(function(){
		var nowScr=$(document).scrollTop();
		if(nowScr>200){
			$("#container .topBtn a").fadeIn(300,"linear");
		}
		else{$("#container .topBtn a").fadeOut(300,"linear");}
	});
});