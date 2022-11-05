$(document).ready(function(){
	/*######색상탭 클릭하면 해당 색상으로 이미지 교체하기(mainImg, thumbnail구역, detail이미지#######*/
	var black=$("#buy .color li:eq(0) a");
	var white=$("#buy .color li:eq(1) a");
	var blue=$("#buy .color li:eq(2) a");
	var pink=$("#buy .color li:eq(3) a");
	var green=$("#buy .color li:eq(4) a");
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
	var thumbImg3=new Array();
	var thumbImg4=new Array();
	for(i=0;i<detail.length;i++){
		thumbImg0[i]="../img/buyProductB3_Bk_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg1[i]="../img/buyProductB3_W_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg2[i]="../img/buyProductB3_Bl_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg3[i]="../img/buyProductB3_P_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg4[i]="../img/buyProductB3_G_thumb"+i+".jpg";
	}
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
		mainImg.attr("src",thumbImg0[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg0[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg0[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("Black");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
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
		mainImg.attr("src",thumbImg1[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg1[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg1[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("White");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
	blue.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeBlue").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg2[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg2[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg2[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("Blue");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
	pink.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizePink").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg3[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg3[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg3[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("Pink");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
	green.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeGreen").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg4[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg4[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg4[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("Green");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
});