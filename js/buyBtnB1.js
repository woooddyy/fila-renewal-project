function buyNow(){
	var size0=document.getElementById("sizeBlack");
	var size1=document.getElementById("sizeWhite");
	var size2=document.getElementById("sizeRed");
	var size3=document.getElementById("sizePink");
	var totPrice=document.getElementById("totPrice");
	var num=document.getElementById("num");
	var productBest1_price=169000;
	totPrice.value=productBest1_price*parseInt(num.value);
	console.log(totPrice.value);
	if(size0.value=="soldout"||size1.value=="soldout"||size2.value=="soldout"||size3.value=="soldout"){
		alert("매진상품입니다.\n다른 Size를 골라주세요.");
	}
	else if(size0.value=="sizeTitle"&&size1.value=="sizeTitle"&&size2.value=="sizeTitle"&&size3.value=="sizeTitle"){
		alert("size를 선택해주세요.");
	}
	else{
		confirm("주문하신 상품의 총 결제 금액은 "+totPrice.value+"원입니다.\n결제하시겠습니까?");
	}
}
