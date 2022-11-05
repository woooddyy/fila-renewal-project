<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title>LOGIN | FILA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="../js/login.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/bodyFont.css"/>
  <style>
	  /*########## 초기화 + 공통영역 ##########*/
		*{margin:0; padding:0;}
		a:link, a:visited{text-decoration:none; color:#fff;}
		h1, h2{position:absolute; left:-9999px; width:1px; height:1px; font-size:1px; line-height:0; overflow:hidden;}
		html{width:100%; height:100%;}
		body{background-image:-webkit-linear-gradient(right, #063858, #111);
			background-image:-moz-linear-gradient(right, #063858, #111);
			background-image:-ms-linear-gradient(right, #063858, #111);
			background-image:-o-linear-gradient(right, #063858, #111);
			width:100%; height:100%;
		}
		#wrap{width:100%; max-width:1920px; margin:0 auto;}
		#loginWrap{width:800px; height:550px; position:absolute; left:50%; top:50%; 
			transform:translate(-50%,-50%); background-color:#AD3139;
			box-shadow:10px 10px 40px rgba(0,0,0,.6);}
		#wrapMain{width:100%; height:100%; position:relative;}

	/*########## headerWrap ##########*/
		#headerWrap{width:60px; height:20px; position:absolute; left:20px; top:15px; z-index:1;}
		#header{width:60px; height:20px; position:relative;}
		#header div{width:60px; height:20px; position:absolute;}
		#header .join_logo{opacity:0; transition:opacity .4s linear;}
		#header div a{display:block; width:100%; height:100%;}
		#header div a img{width:60px;}
	
	/*########## container ##########*/
		#container{width:100%; height:100%; position:relative;}
		#container .img_bg{width:100%; height:100%; position:absolute; left:0; top:0; overflow:hidden;}
		#container .img_bg img{width:105%; position:absolute; left:0; top:0; transition:left .4s linear;}
		#container .black_bg{width:50%; height:100%; background-color:#000; position:absolute; left:50%; top:0; transition:left .4s linear;}
		#container section{width:50%; height:100%; position:absolute; left:0; top:0;}
		#container #loginArea{left:50%; transition:left .4s linear;}
		#container #joinArea{left:20%; transition:left .4s linear;}
		#container section fieldset{width:100%; border:none;}
		#container section legend{display:block; position:absolute; left:-9999px; width:1px; height:1px; line-height:0;
			font-size:1px; overflow:hidden;}

	/*########## loginArea ##########*/
		#joinArea .loginBtn, #loginArea .joinBtn{
			width:75px; height:45px; font-size:12px; position:absolute;
			left:0; top:0; line-height:45px; text-align:center; background-color:#000;}
		#joinArea .loginBtn{left:325px; transition:all .3s linear; border-bottom-right-radius:10px;}
		#loginArea .joinBtn{left:-75px; transition:all .3s linear; border-bottom-left-radius:10px;}
		#joinArea .loginBtn a, #loginArea .joinBtn a{display:block; width:100%; height:100%; font-weight:700;
			letter-spacing:1px;}
		#joinArea .join, #loginArea .login{width:300px; height:390px; margin:80px 50px;}
		#joinArea h3{color:#fff; font-size:35px; line-height:60px;}
		#loginArea h3{text-transform:capitalize; color:#fff; font-size:35px; line-height:60px;}
		#joinArea h4{color:#fff; padding-bottom:20px; font-size:14px; animation:lighting 2s infinite;}
		#loginArea h4{color:#fff; padding-bottom:20px; font-size:20px; opacity:1; animation:lighting 2s infinite;}
		@keyframes lighting{
			0%{opacity:1;}
			50%{opacity:0.3;}
			100%{opacity:1;}
		}
		#joinArea form, #loginArea form, #loginArea form p{width:100%;}
		#loginArea form p{margin-bottom:15px;}
		#loginArea form p .border{
			display:block; width:100%; height:3px; margin-top:5px;
			background-image:-webkit-linear-gradient(right, #08446A, #451e46);
			background-image:-moz-linear-gradient(right, #08446A, #451e46);
			background-image:-ms-linear-gradient(right, #08446A, #451e46);
			background-image:-o-linear-gradient(right, #08446A, #451e46);}
		#loginArea form .idArea input, #loginArea form .pwArea input{
			width:100%; height:20px; border:none; background-color:rgba(0,0,0,0);
			font-size:13px; text-indent:5px; color:#fff; outline:none;}

	/*########## loginArea / chkArea ##########*/
		#loginArea form .chkArea .chkBox{float:left; width:40%; height:20px; font-size:13px; color:#fff;}
		#loginArea form .chkArea .chkBox input{position:absolute; left:-9999px;}
		#loginArea form .chkArea .chkBox label{display:block; height:20px; padding-left:25px;
			cursor:pointer; background-image:url("../img/chkBox.png");
			background-position:left top; background-repeat:no-repeat;}
		#loginArea form .chkArea a{font-size:13px; float:right; font-weight:700;}
		#loginArea form .chkArea a:hover, #loginArea form .chkArea a:focus{text-decoration:underline;}

	/*########## btnArea ##########*/
		#joinArea #joinBtn, #loginArea #loginBtn{
			display:block; width:200px; height:40px; line-height:40px; margin:15px auto 0;
			border-radius:20px; border:none; color:#fff; cursor:pointer; font-weight:700; font-size:12px;
			background-image:-webkit-linear-gradient(right, #944f8d, #1d6995);
			background-image:-moz-linear-gradient(right, #944f8d, #1d6995);
			background-image:-ms-linear-gradient(right, #944f8d, #1d6995);
			background-image:-o-linear-gradient(right, #944f8d, #1d6995);}
		#joinArea #joinBtn{text-align:center;}

		/*기능 적용 : hover하면 배경 색상 변경*/
		#joinArea #joinBtn:hover, #loginArea #loginBtn:hover{
			background-image:-webkit-linear-gradient(right, #0b2536, #0e1033);
			background-image:-moz-linear-gradient(right, #0b2536, #0e1033);
			background-image:-ms-linear-gradient(right, #0b2536, #0e1033);
			background-image:-o-linear-gradient(right, #0b2536, #0e1033);
		}

	/*########## or ##########*/
		#joinArea .or,#loginArea .or{width:100%; height:20px; margin:20px 0; line-height:20px; color:#e7e7e7;
			overflow:hidden; white-space:nowrap; text-align:center;}
		#joinArea .or:before, #loginArea .or:before{content:"────────"; display:inline-block;}
		#joinArea .or:after, #loginArea .or:after{content:"────────"; display:inline-block;}
		#joinArea .or{margin:15px 0;}

	/*########## iconArea ##########*/
		#joinArea .iconArea, #loginArea .iconArea{width:180px; height:40px; margin:0 auto;}
		#joinArea .iconArea a, #loginArea .iconArea a{display:block; width:40px; height:40px; margin-right:30px; float:left;
			border-radius:20px;}
		#joinArea .iconArea a:last-child, #loginArea .iconArea a:last-child{margin-right:0;}
		#joinArea .iconArea a img, #loginArea .iconArea a img{width:100%; height:100%; border-radius:20px;}

	/*########################### 반응형 맞추기 #################################*/
		@media all and (min-width:768px) and (max-width:1024px){
			#loginWrap{width:600px; height:450px; position:absolute;}
			#joinArea .loginBtn, #loginArea .joinBtn{font-size:11px;}
			#joinArea .loginBtn{left:300px;}
			#joinArea .join, #loginArea .login{width:240px; height:370px; margin:40px 30px;}
			#joinArea h3, #loginArea h3{font-size:30px; line-height:50px;}
			#loginArea h4{padding-bottom:15px; font-size:18px;}
			#joinArea form p, #loginArea form p{margin-bottom:15px;}
			#joinArea form .idArea input, #loginArea form .idArea input, #joinArea form .pwArea input, #loginArea form .pwArea input{
				height:16px; font-size:12px;
			}
			#loginArea form .chkArea .chkBox{font-size:12px; float:none; width:100%; height:17px;}
			#loginArea form .chkArea a{font-size:13px; float:none; display:block; width:100%; text-align:right;}
			#joinArea #joinBtn, #loginArea #loginBtn{width:160px; height:34px; line-height:34px; border-radius:17px; margin-top:20px;}
			#joinArea .or,#loginArea .or{margin:10px 0;}
			#joinArea .or:before, #loginArea .or:before{content:"──────";}
			#joinArea .or:after, #loginArea .or:after{content:"──────";}
			#joinArea #joinBtn{margin-top:10px;}
		}
		@media all and (min-width:480px) and (max-width:767px){
			body{background-image:none; background-color:#000;}
			#loginWrap{background-color:#000; width:300px; height:550px; position:static; margin:0 auto; transform:none;}
			#headerWrap{width:60px; height:40px; position:static; margin:0 auto; overflow:hidden;}
			#header{margin:10px 0; position:static;}
			#header div{position:static;}
			#header .login_logo{display:none;}
			#header .join_logo{opacity:1;}
			#container{height:510px;}
			#container .img_bg{display:none;}
			#container .black_bg{display:none;}
			#container section{width:100%;}
			#container #loginArea, #loginArea .joinBtn{left:0;}
			#joinArea .loginBtn{left:225px;}
			#joinArea .join, #loginArea .login{height:410px; margin:50px 0;}
		}
		@media all and (min-width:320px) and (max-width:479px){
			body{background-image:none; background-color:#000;}
			#loginWrap{background-color:#000; width:300px; height:550px; position:static; margin:0 auto; transform:none;}
			#headerWrap{width:60px; height:40px; position:static; margin:0 auto; overflow:hidden;}
			#header{margin:10px 0; position:static;}
			#header div{position:static;}
			#header .login_logo{display:none;}
			#header .join_logo{opacity:1;}
			#container{height:510px;}
			#container .img_bg{display:none;}
			#container .black_bg{display:none;}
			#container section{width:100%;}
			#container #loginArea, #loginArea .joinBtn{left:0;}
			#joinArea .loginBtn{left:225px;}
			#joinArea .join, #loginArea .login{height:410px; margin:50px 0;}
		}
  </style>
 </head>
 <body>
	<div id="wrap">
		<div id="loginWrap">
			<div id="wrapMain">
				<div id="headerWrap">
					<header id="header">
						<h1>FILA</h1>
						<div class="login_logo">
							<a href="../index.php" title="FILA">
								<img src="../img/fila_logo.png" alt="FILA_logo이미지"/>
							</a>
						</div>
						<div class="join_logo">
							<a href="../index.php" title="FILA">
								<img src="../img/fila_logo_white.png" alt="FILA_logo_화이트이미지"/>
							</a>
						</div>
					</header>
				</div>
				<div id="container">
					<h2>로그인화면과 회원가입화면</h2>
					<p class="img_bg">
						<img src="../img/login_bg.jpg" alt="로그인배경이미지"/>
					</p>
					<p class="black_bg">
					</p>
					<section id="joinArea">
						<h2>회원가입화면</h2>
						<p class="loginBtn">
							<a href="#none" title="login">LOGIN →</a>
						</p>
						<div class="join">
							<h3>Sign in</h3>
							<h4>회원가입은 14세 이상 고객만 가능합니다.</h4>
							<a id="joinBtn" href="./fila_join.php" title="SIGNIN">SIGN IN</a>
							<p class="or">
								or
							</p>
							<p class="iconArea">
								<a href="#none" title="페이스북"><img src="../img/login_fb.png" alt="페이스북로고이미지"/></a>
								<a href="#none" title="구글"><img src="../img/login_google.png" alt="구글로고이미지"/></a>
								<a href="#none" title="카카오톡"><img src="../img/login_kakao.png" alt="카카오톡로고이미지"/></a>
							</p>
						</div>
					</section>
					<section id="loginArea">
						<h2>로그인화면</h2>
						<p class="joinBtn">
							<a href="#none" title="join">← JOIN</a>
						</p>
						<div class="login">
							<h3>login</h3>
							<h4>Welcome back!</h4>
							<form action="fila_login_control.php" method="post">
								<fieldset>
									<legend>로그인 영역</legend>
									<p class="idArea">
										<input id="userid" type="text" name="userid" title="ID입력" placeholder="ID" required autofocus
										autocomplete="off" maxlength="16"/>
										<span class="border"></span>
									</p>
									<p class="pwArea">
										<input id="userpw" type="password" name="userpw" title="PASSWORD입력" placeholder="PASSWORD" required maxlength="16"/>
										<span class="border"></span>
									</p>
								</fieldset>
								<fieldset class="chkArea">
									<legend>체크박스 영역</legend>
									<p class="chkBox">
										<input id="remem" type="checkbox" name="remem"/>
										<label for="remem">Remember me</label>
									</p>
									<a href="#none" title="id / password 찾기">Forget your ID/password?</a>
								</fieldset>
								<fieldset class="btnArea">
									<legend>로그인 버튼</legend>
									<input id="loginBtn" type="submit" title="LOGIN" value="LOGIN"/>
								</fieldset>
							</form>
							<p class="or">
								or
							</p>
							<p class="iconArea">
								<a href="#none" title="페이스북"><img src="../img/login_fb.png" alt="페이스북로고이미지"/></a>
								<a href="#none" title="구글"><img src="../img/login_google.png" alt="구글로고이미지"/></a>
								<a href="#none" title="카카오톡"><img src="../img/login_kakao.png" alt="카카오톡로고이미지"/></a>
							</p>
						</div>
					</section>			
				</div>
				<footer id="footer">
					<h2>꼬릿말 영역</h2>
				</footer>
			</div>
		</div>
	</div>
 </body>
</html>
