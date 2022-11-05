$(document).ready(function(){
/*########cateTab클릭하면 해당하는 내용 보여주기########*/
	var cateArray=new Array();
	for(i=0;i<3;i++){
		cateArray[i]=$("#cateTab li:eq("+i+") a");
	}
	//console.log(cateArray[2]);
	var descArray=[$("#descTab"),$("#delivTab"),$("#washTab")];
	//클릭했을때 section 가려주기, cate에 적용된 on 클래스 해제해주기
	for(i=0;i<3;i++){
		cateArray[i].bind("click focus",function(){
			$("#cateTab li a").removeClass("on");
			$("#descWrap section").hide();
		});
	}
	cateArray[0].bind("click focus",function(){
		$(this).addClass("on");
		descArray[0].show();
	});
	cateArray[1].bind("click focus",function(){
		$(this).addClass("on");
		descArray[1].show();
	});
	cateArray[2].bind("click focus",function(){
		$(this).addClass("on");
		descArray[2].show();
	});
});