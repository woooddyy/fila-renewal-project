$(document).ready(function(){
	$(window).scroll(function(){
		var nowScroll=$(document).scrollTop();
		console.log(nowScroll);
		if($("body").width()>=1220){
			if(nowScroll>=4700){
				var num=(nowScroll-4700)/5;
				$("#subVisual2Wrap").css({"backgroundPosition":"center -"+num+"px"});
			}
		}
		else if($("body").width()>=1008&&$("body").width()<1220){
			if(nowScroll>=4300){
				var num=(nowScroll-4300)/5;
				$("#subVisual2Wrap").css({"backgroundPosition":"center -"+num+"px"});
			}
		}
		else if($("body").width()>=751&&$("body").width()<1008){
			if(nowScroll>=2900){
				var num=(nowScroll-2900)/4;
				$("#subVisual2Wrap").css({"backgroundPosition":"center -"+num+"px"});
			}
		}
	});
});