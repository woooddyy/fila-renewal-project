$(document).ready(function(){
	/*필터 버튼 클리하면 popFilterWrap창뜨기*/
		$("#popBg").hide();
		$("#productMain .filter a").bind("click focus",function(){
			$("body").css({"overflowY":"hidden"});
			$("#popBg").fadeIn(300);
			$("#popFilterWrap").css({"height":$(window).height(),"position":"fixed","overflow":"auto"}).animate({"right":0},500,"linear");
		});
		$("#popFilter .xBtn a").bind("click focus",function(){
			$("body").css({"overflowY":"visible"});
			$("#popBg").hide();
			$("#popFilterWrap").animate({"right":"-100%"},500,"linear");
		});
		/*popFilter 에서 label 클릭하면 동그라미 체크되기(하나만 선택되기)*/
		$("#popFilter .selectArea li label").click(function(){
			$("#popFilter .selectArea li label").removeClass("on");
			$(this).addClass("on");
		});
		/*popFilter의 color 체크하면 커진상태로 있기(여러개 선택가능)*/
		$("#popFilter .colorArea li label").click(function(){
			if($(this).attr("class")=="on"){
				$(this).removeClass("on");
			}
			else{
				$(this).addClass("on");
			}
		});
		/*popFilter의 type 체크하면 커진상태로 있기(여러개 선택가능)*/
		$("#popFilter .type li label").click(function(){
			if($(this).attr("class")=="on"){
				$(this).removeClass("on");
			}
			else{
				$(this).addClass("on");
			}
		});
		/*reset버튼 클릭하면 popFilter의 모든 label에 on 클래스 지우기*/
		$("#popFilter .filterBtn .resetBtn").click(function(){
			$("#popFilter label").removeClass("on");
		});
	});