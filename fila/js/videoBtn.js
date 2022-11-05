$(document).ready(function(){
	$("#subVisual .playBtn").hide();
	$("#subVisual .video").mouseover(function(){
		$("#subVisual .playBtn").stop().fadeIn(300);
	}).mouseout(function(){
		$("#subVisual .playBtn").stop().fadeOut(300);
	});
});
function playMov(){
	var vid=document.getElementById("mov");
	var playBtn=document.getElementById("playBtn");
	if(vid.paused==true){
		vid.play();
		playBtn.src="../img/pauseBtn.png";
	}
	else{
		vid.pause();
		playBtn.src="../img/playBtn.png";
	}
}