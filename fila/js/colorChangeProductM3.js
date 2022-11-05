$(document).ready(function(){
	/*######색상탭 클릭하면 해당 색상으로 이미지 교체하기(mainImg, thumbnail구역, detail이미지#######*/
	var beige=$("#buy .color li:eq(0) a");
	var yellow=$("#buy .color li:eq(1) a");
	var mainImg=$("#buy .mainImg img");
	var thum=new Array();
	for(var i=0;i<4;i++){
		thum[i]=$("#buy .thumbnail li:eq("+i+") img");
	}
	var detail=new Array();
	var num=5;
	for(i=0;i<num;i++){
		detail[i]=$("#descTab .detail_img .detail"+i+" img");
	}
	var thumbImg0=new Array();
	var thumbImg1=new Array();
	for(i=0;i<detail.length;i++){
		thumbImg0[i]="../img/buyProductM3_B_thumb"+i+".jpg";
	}
	for(i=0;i<detail.length;i++){
		thumbImg1[i]="../img/buyProductM3_Y_thumb"+i+".jpg";
	}
	beige.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeBeige").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg0[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg0[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg0[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("BEG(베이지)");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
	yellow.click(function(){
		//thumbnail 테두리 부분 처음위치로 이동하기
		$("#buy .thumbnail li").removeClass("thum_on");
		$("#buy .thumbnail li:first").addClass("thum_on");
		//해당 색상탭에 테두리(선택위치표시)
		$("#buy .color li a").removeClass("on");
		$(this).addClass("on");
		//해당 사이즈 셀렉트로 바꾸기
		$("#buy .sizeSelect select").hide().val("sizeTitle");
		$("#sizeYellow").show();
		//이미지 바꾸기
		mainImg.attr("src",thumbImg1[0]);
		for(i=0;i<thum.length;i++){
			thum[i].attr("src",thumbImg1[i]);
		}
		for(i=0;i<detail.length;i++){
			detail[i].attr("src",thumbImg1[i]);
		}
		$("#descTab .desc_table li:eq(3)").text("YEL(옐로우)");
		$("#descWrap section").hide();
		$("#descTab").show();
		$("#cateTab li a").removeClass("on");
		$("#cateTab li:eq(0) a").addClass("on");
	});
});