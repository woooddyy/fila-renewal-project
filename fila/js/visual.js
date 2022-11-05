$(document).ready(function(){
	//################ 비쥬얼 영역 #################
	$("#visual #film").prepend($("#film .scene:last")).css({"marginLeft":"-100%"});
	$("#visual .next").click(function(){
		var film=$("#visual #film");
		$("#visual #film:not(:animated)").animate({"marginLeft":"-=100%"},500,"swing",function(){
			film.append($("#visual .scene:first")).css({"marginLeft":"-100%"});
		});
	});
	$("#visual .prev").click(function(){
		$("#visual #film:not(:animated)").animate({"marginLeft":"+=100%"},500,"swing",function(){
			var film=$("#visual #film");
			film.prepend($("#visual .scene:last")).css({"marginLeft":"-100%"});
		});
	});
});