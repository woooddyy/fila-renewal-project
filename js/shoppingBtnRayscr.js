function shopping(){
	var size0=document.getElementById("sizeBeige");
	if(size0.value=="soldout"){
		alert("매진상품입니다.\n다른 Size를 골라주세요.");
	}
	else if(size0.value=="sizeTitle"){
		alert("size를 선택해주세요.");
	}
	else{
		confirm("주문하신 상품을 쇼핑카트에 넣었습니다.\n바로 쇼핑카트로 이동하시겠습니까?");
	}
}