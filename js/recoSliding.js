$(document).ready(function(){
	// recoList 버튼클릭하면 다음 리스트로 넘어가기
	var recoLeft=$("#reco .recoBtnArea .left");
	var recoRight=$("#reco .recoBtnArea .right");
	var recoList=$("#reco .recoList");
	recoList.prepend($("#reco .recoList ul:last")).css({"marginLeft":"-100%"});
	recoLeft.click(function(){
		$("#reco .recoList:not(:animated)").animate({"marginLeft":"+=100%"},500,"swing",function(){
			recoList.prepend($("#reco .recoList ul:last")).css({"marginLeft":"-100%"});
		});
	});
	recoRight.click(function(){
		$("#reco .recoList:not(:animated)").animate({"marginLeft":"-=100%"},500,"swing",function(){
			recoList.append($("#reco .recoList ul:first")).css({"marginLeft":"-100%"});
		});
	});
});