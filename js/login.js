jQuery(document).ready(function(){
	var chk=0;
	jQuery(".login .chkArea .chkBox label").click(function(){
		if(chk==0){
			jQuery(this).css({"backgroundPosition":"left bottom"});
			chk=1;
			console.log(chk);
		}
		else{
			jQuery(this).css({"backgroundPosition":"left top"});
			chk=0;
			console.log(chk);
		}
	});
	jQuery("#joinArea").hide();
	jQuery("#loginArea .joinBtn").click(function(){
		jQuery(".black_bg").css({"left":"0"});
		jQuery("#joinArea").css({"left":"0"}).fadeIn(300,"linear");
		var body=jQuery("body").width();
		if(body>319 && body<768){
			jQuery("#loginArea").css({"left":"-30%"}).fadeOut(300,"linear");
			jQuery("#joinArea .loginBtn").css({"left":"225px"});
			jQuery("#loginArea .joinBtn").css({"left":"-200px"});
		}
		else if(body>767 && body<1025){
			jQuery("#loginArea").css({"left":"30%"}).fadeOut(300,"linear");
			jQuery("#joinArea .loginBtn").css({"left":"300px"});
			jQuery("#loginArea .joinBtn").css({"left":"0"});
		}
		else{
			jQuery("#loginArea").css({"left":"30%"}).fadeOut(300,"linear");
			jQuery("#joinArea .loginBtn").css({"left":"400px"});
			jQuery("#loginArea .joinBtn").css({"left":"0"});
		}
		jQuery(".img_bg img").css({"left":"-30px"});
		jQuery("#header .join_logo").css({"opacity":"1"});
	});
	jQuery("#joinArea .loginBtn").click(function(){
		jQuery(".black_bg").css({"left":"50%"});
		jQuery("#joinArea").css({"left":"20%"}).fadeOut(300,"linear");
		var body=jQuery("body").width();
		if(body>319&&body<768){
			jQuery("#loginArea").css({"left":"0"}).fadeIn(300,"linear");
			jQuery("#loginArea .joinBtn").css({"left":"0"});
		}
		else{
			jQuery("#loginArea").css({"left":"50%"}).fadeIn(300,"linear");
			jQuery("#loginArea .joinBtn").css({"left":"-75px"});
			jQuery("#header .join_logo").css({"opacity":"0"});
		}
		jQuery("#joinArea .loginBtn").css({"left":"325px"});
		jQuery(".img_bg img").css({"left":"0"});
	});
});