$(document).ready(function(){
	/*######색상탭 클릭하면 해당 색상으로 이미지 교체하기(mainImg, thumbnail구역, detail이미지#######*/
	var white=$("#buy .color li:eq(0) a");
	var navy=$("#buy .color li:eq(1) a");
	var black=$("#buy .color li:eq(2) a");
	var mainImg=$("#buy .mainImg img");
	var thum=new Array();
	for(var i=0;i<4;i++){
		thum[i]=$("#buy .thumbnail li:eq("+i+") img");
	}
	var detail=new Array();
	var num=6;
	for(i=0;i<num;i++){
		detail[i]=$("#descTab .detail_img .detail"+i+" img");
	}
	var thumbImg0=new Array();
	var thumbImg1=new Array();
	var thumbImg2=new Array();
	for(i=0;i<detail.length;i++){
		thumbImg0[i]="../img/buyProductW2_W_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg1[i]="../img/buyProductW2_N_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg2[i]="../img/buyProductW2_Bk_thumb"+i+".jpg";
	}
	white.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeWhite").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg0[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg0[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg0[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("OWH(오프 화이트)");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
	navy.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeNavy").show();
		console.log($("#sizeNavy").val());
		//이미지 바꾸기
		mainImg.attr("src",thumbImg1[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg1[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg1[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("INA(잉크네이비)");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
	black.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeBlack").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg2[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg2[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg2[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("BLK(블랙)");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
});