$(document).ready(function(){
	$("#historyWrap .historyCate a").click(function(){
		$("html, body").animate({scrollTop:"200px"},300,"linear");
		$("#historyWrap .historyCate a").removeClass();
		$(this).addClass("on");
		$("#historyWrap .historyTable").hide();
		$($(this).attr("href")).show();
		$(".historyC").css({"opacity":0});
		return false;//a태그 제어
	});
});