$(document).ready(function(){
	//################ 비쥬얼 영역 #################
	$("#btn li:eq(0)").addClass("addBtn");
	var i=0;
	var btnClick=$("#btn li");
	btnClick.click(function(){
		$("#btn li").removeClass("addBtn");
		$(this).addClass("addBtn");
		i=$(this).children("a").attr("title").substring(3,4);
		var mL=100*i;
		$("#film").animate({"marginLeft":"-"+mL+"%"},500,"swing");
	});

	$("#visual .next").click(function(){
		i++;
		if(i>=0&&i<4){
			$("#visual #film").animate({"marginLeft":"-=100%"},500,"swing");
			$("#btn li").removeClass("addBtn");
			$("#btn li:eq("+i+")").addClass("addBtn");
		}
		else{
			i=3;
		}
	});
	$("#visual .prev").click(function(){
		i--;
		if(i>=0&&i<4){
			$("#visual #film").animate({"marginLeft":"+=100%"},500,"swing");
			$("#btn li").removeClass("addBtn");
			$("#btn li:eq("+i+")").addClass("addBtn");
		}
		else{
			i=0;
		}
	});
});