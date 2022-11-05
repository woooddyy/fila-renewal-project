$(document).ready(function(){
	/*네비게이션 메뉴에 마우스 올리면 하단 서브메뉴 뜨기*/
		$("#gnb li.mainCate:eq(0)").bind("mouseover focusin",function(){
			$("#gnb li.mainCate:eq(0) .subMenu_fila").stop().slideDown(300,"linear");
		}).bind("mouseout focusout",function(){
			$("#gnb li.mainCate:eq(0) .subMenu_fila").stop().slideUp(10,"linear");
		});
		$("#gnb li.mainCate:eq(1)").bind("mouseover focusin",function(){
			$("#gnb li.mainCate:eq(1) .subMenu_product").stop().slideDown(300,"linear");
		}).bind("mouseout focusout",function(){
			$("#gnb li.mainCate:eq(1) .subMenu_product").stop().slideUp(10,"linear");
		});
		$("#gnb li.mainCate:eq(2)").bind("mouseover focusin",function(){
			$("#gnb li.mainCate:eq(2) .subMenu_product").stop().slideDown(300,"linear");
		}).bind("mouseout focusout",function(){
			$("#gnb li.mainCate:eq(2) .subMenu_product").stop().slideUp(10,"linear");
		});
		$("#gnb li.mainCate:eq(3)").bind("mouseover focusin",function(){
			$("#gnb li.mainCate:eq(3) .subMenu_product").stop().slideDown(300,"linear");
		}).bind("mouseout focusout",function(){
			$("#gnb li.mainCate:eq(3) .subMenu_product").stop().slideUp(10,"linear");
		});
		$("#gnb li.mainCate:eq(4)").bind("mouseover focusin",function(){
			$("#gnb li.mainCate:eq(4) .subMenu_product").stop().slideDown(300,"linear");
		}).bind("mouseout focusout",function(){
			$("#gnb li.mainCate:eq(4) .subMenu_product").stop().slideUp(10,"linear");
		});
		$("#gnb li.mainCate:eq(5)").bind("mouseover focusin",function(){
			$("#gnb li.mainCate:eq(5) .subMenu_brand").stop().slideDown(300,"linear");
		}).bind("mouseout focusout",function(){
			$("#gnb li.mainCate:eq(5) .subMenu_brand").stop().slideUp(10,"linear");
		});
});