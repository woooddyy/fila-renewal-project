<?php
	include "conn.php";

	$no=$_GET['no'];

	$sql="SELECT * FROM qnaboard WHERE no='$no'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>1:1 게시글 | FILA</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/mainNav.js"></script>
  <script src="../js/mobNav.js"></script>
  <script src="../js/mypageSlide.js"></script>
  <script src="../js/topBtn.js"></script>
  <script src="../js/footer.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="../css/bodyFont.css"/>
  <link rel="stylesheet" type="text/css" href="../css/headerWrap.css"/>
  <link rel="stylesheet" type="text/css" href="../css/topBtn.css"/>
  <link rel="stylesheet" type="text/css" href="../css/footerWrap.css"/>
  <style>
	/*########## 공통영역 ##########*/
		#wrap{width:100%; max-width:1920px; margin:0 auto;}
		h1, h2{position:absolute; left:-9999px; font-size:1px; width:1px; height:1px; line-height:0; overflow:hidden;}
		.content_info_img{width:595px; height:233px; position:absolute; left:0; top:0;}

	/*########## container ##########*/
		#container{width:100%; margin-bottom:100px;}
		#board{width:1000px; margin:0 auto;}
		#board h3{text-align:center; padding:100px 0 20px;}
		#board form{font-size:13px; width:100%;}
		#board form fieldset{border:none;}
		#board form legend,#board form label[for="content"]{position:absolute; left:-9999px; width:1px; height:1px; line-height:0; font-size:1px; overflow:hidden;}
		#board form div{width:100%; border-top:1px solid #ddd; border-bottom:1px solid #ddd;}
		#board form p{width:100%; line-height:25px; padding:5px 0;}
		#board form label{display:block; width:100px; height:25px; line-height:25px; float:left;}
		#board form input:not(.button){height:25px; text-indent:10px; border:none;}
		#board form .username{width:60%; float:left;}
		#board form .mdate{width:30%; float:left;}
		#board form .view{width:10%; float:left; text-align:right;}
		#board form input[id="title"]{width:900px;}
		#board form input[id="mdate"]{color:#999;}
		#board form label[for="view"]{width:50px;}
		#board form input[id="view"]{width:30px; color:#999;}
		#board form .content{margin-top:20px;}
		#board form textarea{width:100%; height:300px; margin:0 auto; text-indent:10px; padding:10px 0; border:none;
			border-top:1px solid #ccc; border-bottom:1px solid #ccc; overflow:auto;}

		/*css에서 너무 많은 속성을 사용하게 되면 jQuery나 javascript에서 사용 못하게 될 수 있다.*/

		#buttonArea{background-color:#fff; text-align:center;}
		#buttonArea a{padding:5px 20px; background-color:#fff; border:1px solid #aaa;}
		#buttonArea a:hover, #buttonArea a:focus{background-color:#CC393C; color:#fff;}

		#board form div:after{content:""; display:block; clear:both;}
			
	/*################################ 반응형 맞추기 #######################################*/
		@media all and (min-width:1025px) and (max-width:1199px){
			#header{width:1000px;}
			#rightMenu{padding-left:420px;}
			#fila_logo{width:750px;}
			#fila_logo a{margin:8px 210px 11px 460px;}
			#gnb li .subMenu h3{font-size:25px;}
			#gnb li .subMenu .subMenu_fila .subMenuList, #gnb li .subMenu .subMenu_proWrap,
			#gnb li .subMenu .subMenu_brand .subMenuList{width:1000px;}
			#gnb li .subMenu .subMenu_visualArea div{height:125px;}
			#gnb li .subMenu .subMenu_brand .subMenuList{width:960px;}
			#gnb li .subMenu .subMenu_brand li{width:150px;}
			#gnb li .subMenu .subMenu_brand li a .brandImg{height:180px;}
			
			#footer{width:1000px;}
			#footer #logo{width:220px;}
			#footer .topMenu_footer{width:780px; height:157px; float:left;}
			#footer .topMenu_footer li{width:120px; float:left; font-size:12px; padding-left:10px;}
			#footer .bottom_footer .lang_contentArea .content_info div .content_info_img{position:absolute; right:211px;}
		}

		@media all and (min-width:768px) and (max-width:1024px){
			h3{font-size:20px; margin-bottom:20px;}
			#headerWrap{height:170px;}
			#header{width:748px;}

			#leftMenu{width:160px;}
			#rightMenu{padding-left:308px;}
			
			#header .logo_searchArea{height:100px;}
			#fila_logo{width:548px;}
			#fila_logo a{width:50px; height:71px; margin:4px 139px 5px 339px;}

			#searchArea{width:200px;}
			#searchArea form{width:200px; margin:66px 0 10px;}
			#searchArea form .input{width:200px;}
			#searchArea form .input input{width:180px;}
			#nav{height:40px; line-height:40px;}
			#gnb li.mainCate{height:40px;}
			#gnb li a.mainCate{height:40px;padding:0 20px; font-size:13px;}
			
			#gnb li .subMenu h3{font-size:20px; margin-bottom:0;}
			#gnb li .subMenu .subMenu_fila h3{padding-bottom:15px;}
			#gnb li .subMenu .subMenu_titleArea h3{padding-bottom:0;}
			#gnb li .subMenu .subMenu_brand h3{padding-bottom:15px;}
			#gnb li .subMenu .subMenu_fila .subMenuList, #gnb li .subMenu .subMenu_proWrap,
			#gnb li .subMenu .subMenu_brand .subMenuList{width:748px;}
			#gnb li .subMenu .subMenu_visualArea div{height:94px;}
			#gnb li .subMenu .subMenu_brand .subMenuList{width:720px;}
			#gnb li .subMenu .subMenu_brand li{width:110px; font-size:13px;}
			#gnb li .subMenu .subMenu_brand li a .brandImg{height:127px;}

			#board h3{padding:80px 0 20px;}

			#board{width:748px; margin:0 auto;}
			#board form label{width:80px;}
			#board form .username{width:50%;}
			#board form .mdate{width:35%;}
			#board form .view{width:15%;}
			#board form input[id="title"]{width:666px;}

			#footer{width:748px; position:static;}

			#footer .top_footer{width:100%; padding:50px 0 20px;}
			#footer #logo{width:170px; height:70px; float:none; margin:0 auto; text-align:center; position:relative;}
			#footer #logo .down{display:block; position:absolute; right:0; bottom:0; font-size:12px; cursor:pointer; color:#ccc;}
			#footer #logo img{width:120px;}
			#footer .mobAddress{display:block; padding-top:20px; font-size:12px; text-align:center;}
			#footer .mobAddress i{font-style:normal; color:#999;}
			#footer .topMenu_footer{display:none;}
			#footer .bottom_footer{width:100%;}
			#footer .bottom_footer .bottomMenu_footer{height:20px; line-height:20px;
				font-size:15px; padding-bottom:0;}
			#footer .bottom_footer .bottomMenu_footer li{display:inline-block; line-height:20px;}

			#footer .bottom_footer .snsMenu_footer{width:230px; height:30px; margin:20px auto;}
			#footer .bottom_footer .snsMenu_footer li{width:46px; height:30px;}
			#footer .bottom_footer .snsMenu_footer a img{width:30px; height:30px;}

			#footer .bottom_footer .lang_contentArea{width:100%; height:30px; line-height:30px; margin:0; margin-bottom:20px;}
			#footer .bottom_footer .lang_contentArea .langArea{height:30px; float:none; margin:0 auto;}
			#footer .bottom_footer .lang_contentArea #lang{width:150px; height:28px; border:none;
				border-bottom:2px solid #ccc; font-size:12px;}
			#footer .bottom_footer .lang_contentArea i{display:none;}
			#footer .bottom_footer .lang_contentArea .content_info{display:none;}

			#footer address{display:none;}
			#footer .info{padding-bottom:13px; font-size:11px;}
		}

		@media all and (min-width:480px) and (max-width:767px){
			h3{font-size:22px; margin-bottom:20px;}
			#headerWrap{display:none;}
			#mobHeader{display:block;}
			
			#board{width:440px; margin:0 auto;}
			#board h3{padding:20px 0;}
			#board form{font-size:12px;}

			#board form label{width:60px;}
			#board form .username{width:100%;}
			#board form .mdate{width:80%;}
			#board form .view{width:20%;}
			#board form input[id="title"]{width:378px;}
			#board form input[id="username"]{width:378px;}

			#container .topBtn{width:40px; height:40px; border-radius:20px; right:20px; bottom:20px;}
			#container .topBtn a{border-radius:20px;}
			#container .topBtn a img{border-radius:20px;}

			#footer{width:460px; position:static;}

			#footer .top_footer{width:100%; padding:50px 0 20px;}
			#footer #logo{width:170px; height:70px; float:none; margin:0 auto; text-align:center; position:relative;}
			#footer #logo .down{display:block; position:absolute; right:0; bottom:0; font-size:12px; cursor:pointer; color:#ccc;}
			#footer #logo img{width:120px;}
			#footer .mobAddress{display:block; padding-top:20px; font-size:12px; text-align:center;}
			#footer .mobAddress i{font-style:normal; color:#999;}
			#footer .topMenu_footer{display:none;}
			#footer .bottom_footer{width:100%;}
			#footer .bottom_footer .bottomMenu_footer{height:40px; line-height:20px;
				font-size:15px; padding-bottom:0;}
			#footer .bottom_footer .bottomMenu_footer li{display:inline-block; line-height:20px;}

			#footer .bottom_footer .snsMenu_footer{width:225px; height:28px; margin:20px auto;}
			#footer .bottom_footer .snsMenu_footer li{width:45px; height:28px;}
			#footer .bottom_footer .snsMenu_footer a img{width:28px; height:28px;}

			#footer .bottom_footer .lang_contentArea{width:100%; height:30px; line-height:30px; margin:0; margin-bottom:20px;}
			#footer .bottom_footer .lang_contentArea .langArea{height:30px; float:none; margin:0 auto;}
			#footer .bottom_footer .lang_contentArea #lang{width:150px; height:28px; border:none;
				border-bottom:2px solid #ccc; font-size:12px;}
			#footer .bottom_footer .lang_contentArea i{display:none;}
			#footer .bottom_footer .lang_contentArea .content_info{display:none;}

			#footer address{display:none;}
			#footer .info{padding-bottom:13px; font-size:11px;}
		}

		@media all and (min-width:320px) and (max-width:479px){
			h3{font-size:20px; margin-bottom:20px;}
			#headerWrap{display:none;}
			#mobHeader{display:block;}
			
			#mobHeader #searchMob{right:45px;}
			#mobHeader #my_shopping{right:7px;}
			
			#board{width:300px; margin:0 auto;}
			#board h3{padding:20px 0;}
			#board form{font-size:12px;}

			#board form label{width:60px;}
			#board form label[for="view"]{width:60px;}
			#board form .username{width:100%;}
			#board form .mdate{width:100%;}
			#board form .view{width:100%; text-align:left;}
			#board form input[id="title"]{width:238px;}
			#board form input[id="view"]{width:238px; text-indent:10px;}

			#container .topBtn{width:40px; height:40px; border-radius:20px; right:20px; bottom:20px;}
			#container .topBtn a{border-radius:20px;}
			#container .topBtn a img{border-radius:20px;}

			#footer{width:300px; position:static;}

			#footer .top_footer{width:100%; padding:50px 0 20px;}
			#footer #logo{width:130px; height:60px; float:none; margin:0 auto; position:relative; text-align:center;}
			#footer #logo .down{display:block; position:absolute; right:0; bottom:0; font-size:12px; cursor:pointer; color:#ccc;}
			#footer #logo img{width:100px;}
			#footer .mobAddress{display:block; padding-top:20px; font-size:10px; text-align:center;}
			#footer .mobAddress i{font-style:normal; color:#999;}
			#footer .topMenu_footer{display:none;}
			#footer .bottom_footer{width:100%;}
			#footer .bottom_footer .bottomMenu_footer{height:40px; line-height:0;
				font-size:13px; padding-bottom:0;}
			#footer .bottom_footer .bottomMenu_footer li{display:inline-block; line-height:20px;}

			#footer .bottom_footer .snsMenu_footer{width:200px; height:25px; margin:20px auto;}
			#footer .bottom_footer .snsMenu_footer li{width:40px; height:25px;}
			#footer .bottom_footer .snsMenu_footer a img{width:25px; height:25px;}

			#footer .bottom_footer .lang_contentArea{width:100%; height:30px; line-height:30px; margin:0; margin-bottom:20px;}
			#footer .bottom_footer .lang_contentArea .langArea{height:30px; float:none; margin:0 auto;}
			#footer .bottom_footer .lang_contentArea #lang{width:150px; height:28px; border:none;
				border-bottom:2px solid #ccc; font-size:12px;}
			#footer .bottom_footer .lang_contentArea i{display:none;}
			#footer .bottom_footer .lang_contentArea .content_info{display:none;}

			#footer address{display:none;}
			#footer .info{padding-bottom:13px;}
		}
  </style>
 </head>
 <body>
	<div id="wrap">
		<header id="headerWrap">
			<div id="header">
				<h1>
					FILA
				</h1>
				<div id="topMenu">
					<h2>위쪽 메뉴 영역</h2>
					<ul id="leftMenu">
						<li><a href="#none" title="event">EVENT</a></li>
						<li><a href="#none" title="editorial">EDITORIAL</a></li>
					</ul>
					<ul id="rightMenu">
						<li>
<?php if(empty($_SESSION['userid'])){ ?>
							<a href="./login.php" title="login">LOGIN</a>
<?php }else{ ?>
							<a href="./logout.php" title="logout" style="color:#999; text-decoration:underline;">LOGOUT</a>
<?php } ?>
						</li>
						<li><a href="./fila_join.php" title="join">JOIN</a></li>
						<li><a href="#none" title="cart">
								<span class="cart">CART</span>
								<i><img src="../img/shopping_cart.png" alt="쇼핑카트이미지"/></i>
							</a></li>
						<li class="mypageArea">
							<a href="#none" title="mypage">
								MY PAGE <span>▼</span>
							</a>
							<ul>
								<li><a href="#none" title="구매정보">구매정보</a></li>
								<li><a href="#none" title="배송조회">배송조회</a></li>
								<li><a href="#none" title="개인정보">개인정보</a></li>
								<li><a href="./fila_qna.php" title="개인문의">1:1 문의</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="logo_searchArea">
					<div id="fila_logo">
						<a href="../index.php" title="FILA">
							<img src="../img/fila_logo.jpg" alt="휠라로고이미지"/>
						</a>
					</div>
					<div id="searchArea">
						<h2>검색영역</h2>
						<form action="#none" method="get">
							<fieldset>
								<legend>검색</legend>
								<p class="input">
									<input id="search" type="text" name="search" title="검색" placeholder="Search..."/>
									<input id="searchButton" type="image" name="searchButton" src="../img/search.png" alt="돋보기이미지" title="돋보기이미지"/>
								</p>
							</fieldset>
						</form>
					</div>
				</div>
				<div id="nav">
					<h2>메인 네비게이션 영역</h2>
					<ul id="gnb">
						<li class="mainCate">
							<a class="mainCate" href="#none" title="fila">FILA</a>
							<div class="subMenuWrap">
								<div class="subMenu">
									<div class="subMenu_fila">
										<h3>fila</h3>
										<ul class="subMenuList">
											<li>
												<a href="./fila_intro.html" title="about fila">about fila</a>
											</li>
											<li>
												<a href="./fila_history.html" title="history">history</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="#none" title="men">MEN</a>
							<div class="subMenuWrap">
								<div class="subMenu">
									<div class="subMenu_product">
										<div class="subMenu_proWrap">
											<div class="subMenu_titleArea">
												<h3>men</h3>
												<ul class="subMenuList">
													<li class="subMenuList_title">휠라 남성 제품</li>
													<li>
														<a href="./fila_mensclothes.html" title="남성의류">men's clothes</a>
													</li>
													<li>
														<a href="./fila_mensshoes.html" title="남성신발">men's shoes</a>
													</li>
													<li>
														<a href="./fila_mensbag.html" title="남성가방">men's bag</a>
													</li>
													<li>
														<a href="./fila_mensacc.html" title="남성악세서리">men's acc</a>
													</li>
												</ul>
											</div>
											<div class="subMenu_visualArea">
												<div class="subMenu_visaul0">
													<p class="subMenu_visual_img">
														<a href="#none" title="rgbTheStreet">
															<img src="../img/subMenu_men_visual0.jpg" alt="남성서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="filax10cc">
															<img src="../img/subMenu_men_visual1.jpg" alt="남성서브비쥬얼이미지1"/>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="#none" title="women">WOMEN</a>
							<div class="subMenuWrap">
								<div class="subMenu">
									<div class="subMenu_product">
										<div class="subMenu_proWrap">
											<div class="subMenu_titleArea">
												<h3>women</h3>
												<ul class="subMenuList">
													<li class="subMenuList_title">휠라 여성 제품</li>
													<li>
														<a href="./fila_womensclothes.html" title="여성의류">women's clothes</a>
													</li>
													<li>
														<a href="#none" title="여성신발">women's shoes</a>
													</li>
													<li>
														<a href="#none" title="여성가방">women's bag</a>
													</li>
													<li>
														<a href="#none" title="여성악세서리">women's acc</a>
													</li>
												</ul>
											</div>
											<div class="subMenu_visualArea">
												<div class="subMenu_visaul0">
													<p class="subMenu_visual_img">
														<a href="#none" title="checkerboard">
															<img src="../img/subMenu_women_visual0.jpg" alt="여성서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="rgbthestreet">
															<img src="../img/subMenu_women_visual1.jpg" alt="여성서브비쥬얼이미지1"/>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="#none" title="boys">BOYS</a>
							<div class="subMenuWrap">
								<div class="subMenu">
									<div class="subMenu_product">
										<div class="subMenu_proWrap">
											<div class="subMenu_titleArea">
												<h3>boys</h3>
												<ul class="subMenuList">
													<li class="subMenuList_title">휠라 남성 아동 제품</li>
													<li>
														<a href="#none" title="남아의류">boy's clothes</a>
													</li>
													<li>
														<a href="#none" title="남아신발">boy's shoes</a>
													</li>
													<li>
														<a href="#none" title="남아가방">boy's bag</a>
													</li>
													<li>
														<a href="#none" title="남아악세서리">boy's acc</a>
													</li>
												</ul>
											</div>
											<div class="subMenu_visualArea">
												<div class="subMenu_visaul0">
													<p class="subMenu_visual_img">
														<a href="#none" title="newtrokids">
															<img src="../img/subMenu_boys_visual0.jpg" alt="남아서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="wonniefriends">
															<img src="../img/subMenu_boys_visual1.jpg" alt="남아서브비쥬얼이미지1"/>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="#none" title="girls">GIRLS</a>
							<div class="subMenuWrap">
								<div class="subMenu">
									<div class="subMenu_product">
										<div class="subMenu_proWrap">
											<div class="subMenu_titleArea">
												<h3>girls</h3>
												<ul class="subMenuList">
													<li class="subMenuList_title">휠라 여성 아동 제품</li>
													<li>
														<a href="#none" title="여아의류">girl's clothes</a>
													</li>
													<li>
														<a href="#none" title="여아신발">girl's shoes</a>
													</li>
													<li>
														<a href="#none" title="여아가방">girl's bag</a>
													</li>
													<li>
														<a href="#none" title="여아악세서리">girl's acc</a>
													</li>
												</ul>
											</div>
											<div class="subMenu_visualArea">
												<div class="subMenu_visaul0">
													<p class="subMenu_visual_img">
														<a href="#none" title="newtrokids">
															<img src="../img/subMenu_girls_visual0.jpg" alt="여아서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="snackTime">
															<img src="../img/subMenu_girls_visual1.jpg" alt="여아서브비쥬얼이미지1"/>
														</a>
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="#none" title="brand">BRAND</a>
							<div class="subMenuWrap">
								<div class="subMenu">
									<div class="subMenu_brand">
										<h3>brand</h3>
										<ul class="subMenuList">
											<li>
												<a href="./fila_collabo.html" title="collabo">
													<span class="brandImg"><img src="../img/collabo_subImg.jpg" alt="서브네비이미지0"/></span>
													<span class="brandText">collabo</span>
												</a>
											</li>
											<li>
												<a href="./fila_heritage.html" title="heritage">
													<span class="brandImg"><img src="../img/heritage_subImg.jpg" alt="서브네비이미지1"/></span>
													<span class="brandText">heritage</span></a>
											</li>
											<li>
												<a href="./fila_golf.html" title="golf">
													<span class="brandImg"><img src="../img/golf_subImg.jpg" alt="서브네비이미지2"/></span>
													<span class="brandText">golf</span></a>
											</li>
											<li>
												<a href="./fila_kids.html" title="kids">
													<span class="brandImg"><img src="../img/kids_subImg.jpg" alt="서브네비이미지3"/></span>
													<span class="brandText">kids</span>
												</a>
											</li>
											<li>
												<a href="./fila_underwear.html" title="underwear">
													<span class="brandImg"><img src="../img/underwear_subImg.jpg" alt="서브네비이미지4"/></span>
													<span class="brandText">underwear</span>
												</a>
											</li>
											<li>
												<a href="./fila_milan.html" title="milan">
													<span class="brandImg"><img src="../img/milan_subImg.jpg" alt="서브네비이미지5"/></span>
													<span class="brandText">milan</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="./fila_lookbook.html" title="lookbook">LOOKBOOK</a>
						</li>
					</ul>
				</div>
			</div>
		</header>
		<div id="mobHeader">
			<div id="mobNav">
				<ul>
					<li>
						<a class="mobNavTitle" href="#none" title="mypage">MY PAGE</a>
						<div class="mobSubNav">
							<p>
<?php if(empty($_SESSION['userid'])){ ?>
								<a href="./login.php" title="login">LOGIN</a>
<?php }else{ ?>
								<a href="./logout.php" title="logout" style="color:#777;">LOGOUT</a>
<?php } ?>
							</p>
							<p>
								<a href="./fila_qna.php" title="개인문의">1:1 문의</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="fila">fila</a>
						<div class="mobSubNav">
							<p>
								<a href="./fila_intro.html" title="aboutFila">about fila</a>
							</p>
							<p>
								<a href="./fila_history.html" title="history">history</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="men">MEN</a>
						<div class="mobSubNav">
							<p>
								<a href="./fila_mensclothes.html" title="남성의류">men's clothes</a>
							</p>
							<p>
								<a href="./fila_mensshoes.html" title="남성신발">men's shoes</a>
							</p>
							<p>
								<a href="./fila_mensbag.html" title="남성가방">men's bag</a>
							</p>
							<p>
								<a href="./fila_mensacc.html" title="남성악세서리">men's acc</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="women">WOMEN</a>
						<div class="mobSubNav">
							<p>
								<a href="./fila_womensclothes.html" title="여성의류">women's clothes</a>
							</p>
							<p>
								<a href="#none" title="여성신발">women's shoes</a>
							</p>
							<p>
								<a href="#none" title="여성가방">women's bag</a>
							</p>
							<p>
								<a href="#none" title="여성악세서리">women's acc</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="boys">BOYS</a>
						<div class="mobSubNav">
							<p>
								<a href="#none" title="남아의류">boy's clothes</a>
							</p>
							<p>
								<a href="#none" title="남아신발">boy's shoes</a>
							</p>
							<p>
								<a href="#none" title="남아가방">boy's bag</a>
							</p>
							<p>
								<a href="#none" title="남아악세서리">boy's acc</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="girls">GIRLS</a>
						<div class="mobSubNav">
							<p>
								<a href="#none" title="여아의류">girl's clothes</a>
							</p>
							<p>
								<a href="#none" title="여아신발">girl's shoes</a>
							</p>
							<p>
								<a href="#none" title="여아가방">girl's bag</a>
							</p>
							<p>
								<a href="#none" title="여아악세서리">girl's acc</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="brand">BRAND</a>
						<div class="mobSubNav">
							<p>
								<a href="./fila_collabo.html" title="collabo">collabo</a>
							</p>
							<p>
								<a href="./fila_heritage.html" title="heritage">heritage</a>
							</p>
							<p>
								<a href="./fila_golf.html" title="golf">golf</a>
							</p>
							<p>
								<a href="./fila_kids.html" title="kids">kids</a>
							</p>
							<p>
								<a href="./fila_underwear.html" title="underwear">underwear</a>
							</p>
							<p>
								<a href="./fila_milan.html" title="milan">milan</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="./fila_lookbook.html" title="lookbook">LOOKBOOK</a>
					</li>
				</ul>
			</div>
			<div id="mobTitle">
				<div id="cateArea">
					<div id="cate">
						<p class="cateFirst">
							<span></span>
						</p>
						<p class="cateSec">
							<span></span>
						</p>
						<p class="cateThird">
							<span></span>
						</p>
					</div>
				</div>
				<div id="mobLogo">
					<a href="../index.php" title="FILA"><img src="../img/fila_logo.png" alt="휠라로고"/></a>
				</div>
				<p id="searchMob">
					<a href="#none" title="검색"><img src="../img/search_mob.png" alt="검색이미지"/></a>
				</p>
				<p id="my_shopping">
					<a href="#none" title="shopping"><img src="../img/shopping_bag.png" alt="쇼핑백이미지"/></a>
				</p>
			</div>
		</div>
		<div id="container">
			<h2>섹션 영역</h2>
			<section id="board">
				<h3>Q &amp; A</h3>
				<form action="#" method="post">
					<fieldset>
						<legend>문의게시판 읽기</legend>
						<div>
							<p>
								<label for="title">제목</label><input id="title" value="<?=$row['title']?>" type="text" readonly/>
							</p>
							<p class="username">
								<label for="username">이름</label><input id="username" value="<?=$row['username']?>" type="text" readonly/>
							</p>
							<p class="mdate">
								<label for="mdate">작성일</label><input id="mdate" value="<?=$row['mdate']?>" type="text" readonly/>
							</p>
							<p class="view">
								<label for="view">조회</label><input id="view" value="<?=$row['view']?>" type="text" readonly/>
							</p>
						</div>
						<p class="content">
							<label for="content">내용</label>
<textarea id="content" readonly>
<?=$row['content']?>
</textarea>
						</p>
						<p id="buttonArea">
							<a href="./fila_qna.php" title="목록">목록</a>
							<a href="./fila_qna_edit.php?no=<?=$row['no']?>" title="수정">수정</a>
							<a href="./fila_qna_delete.php?no=<?=$row['no']?>" title="삭제">삭제</a>
						</p>
					</fieldset>
				</form>
			</section>
			<p class="topBtn">
				<a href="#none" title="위로가기"><img src="../img/topBtn.png" alt="위로가기버튼이미지"/></a>
			</p>
		</div>
		<footer id="footerWrap">
			<h2>푸터영역</h2>
			<div id="footer">
				<div class="top_footer">
					<div id="logo">
						<h2>fila푸터로고</h2>
						<img src="../img/fila_footer_logo.png" alt="fila_logo이미지"/><span class="down">▼</span>
					</div>
					<p class="mobAddress">
						서울시 강동구 천호대로 1077<br/>
						이스트센트럴타워 16층 휠라코리아(주) <i>|</i> 대표이사 : 윤근창<br/>
						법인명(상호명) 휠라코리아(주)<br/>
						통신판매업신고 서초 제 2001-00873호<br/>
						사업자등록번호 114-81-44271 <i>|</i> 개인정보 관리책임자 권창호<br/>
						대표전화 : 1577-3472 <i>|</i> <a href="#none" title="fila문의메일" style="color:#CC393C;">filaonline@fila.com</a>
					</p>
					<ul class="topMenu_footer">
						<li>
							<div>
								<h4>ABOUT FILA</h4>
								<p>
									<a href="#none" title="브랜드연혁">브랜드 연혁</a>
								</p>
								<p>
									<a href="#none" title="CEO인사말">CEO 인사말</a>
								</p>
								<p>
									<a href="#none" title="contact_us">CONTACT US</a>
								</p>
							</div>
						</li>
						<li>
							<div>
								<h4>RECRUIT</h4>
								<p>
									<a href="#none" title="채용게시판">채용게시판</a>
								</p>
								<p>
									<a href="#none" title="채용결과">채용결과</a>
								</p>
							</div>
						</li>
						<li>
							<div>
								<h4>IR</h4>
								<p>
									<a href="#none" title="korea">KOREA</a>
								</p>
								<p>
									<a href="#none" title="english">ENGLISH</a>
								</p>
							</div>
						</li>
						<li>
							<div>
								<h4>ETHICS</h4>
								<p>
									<a href="#none" title="윤리경영">윤리경영</a>
								</p>
								<p>
									<a href="#none" title="윤리규범">윤리규범</a>
								</p>
								<p>
									<a href="#none" title="윤리규범실천서약">윤리규범실천서약</a>
								</p>
								<p>
									<a href="#none" title="거래윤리준칙">거래윤리준칙</a>
								</p>
								<p>
									<a href="#none" title="실천프로그램">실천프로그램</a>
								</p>
								<p>
									<a href="#none" title="제보센터">제보센터</a>
								</p>
							</div>
						</li>
						<li>
							<div>
								<h4>ATHLETES</h4>
								<p>
									<a href="#none" title="korean_team">KOREAN TEAM</a>
								</p>
								<p>
									<a href="#none" title="global_team">GLOBAL TEAM</a>
								</p>
							</div>
						</li>
						<li>
							<div>
								<h4>CONTACT US</h4>
								<p>
									<a href="#none" title="매장안내">매장안내</a>
								</p>
								<p>
									<a href="#none" title="as안내조회">A/S 안내조회</a>
								</p>
								<p>
									<a href="#none" title="대리점개설문의">대리점개설문의</a>
								</p>
								<p>
									<a href="#none" title="fila_one_멤버십">FILA ONE 멤버십</a>
								</p>
								<p>
									<a href="#none" title="위니프렌즈소개">위니프렌즈 소개</a>
								</p>
								<p>
									<a href="#none" title="문의하기">문의하기</a>
								</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="bottom_footer">
					<ul class="bottomMenu_footer">
						<li>
							<a href="#none" title="통합회원">통합회원</a>
						</li>
						<li>
							<a href="#none" title="이용약관">이용약관</a>
						</li>
						<li>
							<a class="bold" href="#none" title="개인정보처리방침">개인정보 처리방침</a>
						</li>
						<li>
							<a href="#none" title="사업자정보확인"><b>사업자 정보 확인</b></a>
						</li>
						<li>
							<a href="#none" title="공지사항">공지사항</a>
						</li>
						<li>
							<a href="#none" title="faq">FAQ</a>
						</li>
						<li>
							<a href="#none" title="고객센터">고객센터</a>
						</li>
					</ul>
					<ul class="snsMenu_footer">
						<li>
							<a href="#none" title="페이스북">
								<i><img src="../img/icon_fb.png" alt="페이스북아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="인스타그램">
								<i><img src="../img/icon_ins.png" alt="인스타그램아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="유튜브">
								<i><img src="../img/icon_youtube.png" alt="유튜브아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="트위터">
								<i><img src="../img/icon_twitter.png" alt="트위터아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="카카오스토리">
								<i><img src="../img/icon_kakao.png" alt="카카오스토리아이콘이미지"/></i>
							</a>
						</li>
					</ul>
					<div class="lang_contentArea">
						<p class="langArea">
							<select id="lang" title="언어선택">
								<option value="kor" selected="selected">korean</option>
								<option value="eng">english</option>
								<option value="chn">chinese</option>
							</select>
							<i>|</i>
						</p>
						<div class="content_info">
							<p class="content_info_text">
								콘텐츠산업진흥법에 의한 콘텐츠보호안내
							</p>
							<div>
								<a class="detail" href="#none" title="자세히보기"><b>[자세히보기]</b></a>
							</div>
						</div>
					</div>
					<div id="address">
						<address>
							서울시 강동구 천호대로 1077 이스트센트럴타워 16층 휠라코리아(주) <i>|</i> 대표이사 : 윤근창 <i>|</i> 법인명(상호명) 휠라코리아(주) <i>|</i> 통신판매업신고 서초 제 2001-00873호<br/>
							사업자등록번호 114-81-44271 <i>|</i> 개인정보 관리책임자 권창호 <i>|</i> 대표전화 : 1577-3472 <i>|</i> <a href="#none" title="fila문의메일" style="color:#CC393C;">filaonline@fila.com</a>
						</address>
					</div>
					<p class="info">
						본 사이트의 상품이미지 저작권은 휠라코리아(주)에 있으며, 내용의 무단복제를 금합니다.
					</p>
					<p id="copyright">
						COPYRIGHT © 2020 HYEONGWOO JANG ALL RIGHTS RESERVED.
					</p>
				</div>
			</div>
		</footer>
	</div>
	<p class="content_info_img">
		<img src="../img/fila_content_info.jpg" alt="휠라컨텐츠보호안내이미지"/>
	</p>
 </body>
</html>
<?php
	$upSql="UPDATE qnaboard SET view=view+1 WHERE no='$no'";
	mysqli_query($conn,$upSql);
	mysqli_close($conn);
?>