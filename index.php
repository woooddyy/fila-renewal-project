<?php
	include "sub/conn.php";
	session_cache_expire(30);
	session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <title>FILA</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/remoteCon.js"></script>
  <script src="js/mainNav.js"></script>
  <script src="js/mobNav.js"></script>
  <script src="js/mypageSlide.js"></script>
  <script src="js/visual_index.js"></script>
  <script src="js/golfBgM.js"></script>
  <script src="js/topBtn.js"></script>
  <script src="js/footer.js"></script>
  <!--[if lt IE 9]> <script src="js/ieOldVer.js"></script> <![endif]-->
  <!--[if lt IE 9]> <link rel="stylesheet" type="text/css" href="css/ieOldVer.css"/> <![endif]-->
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="css/bodyFont.css"/>
  <link rel="stylesheet" type="text/css" href="css/headerWrap.css"/>
  <link rel="stylesheet" type="text/css" href="css/visual_index.css"/>
  <link rel="stylesheet" type="text/css" href="css/remoteCon.css"/>
  <link rel="stylesheet" type="text/css" href="css/subVisual0.css"/>
  <link rel="stylesheet" type="text/css" href="css/topBtn.css"/>
  <link rel="stylesheet" type="text/css" href="css/footerWrap.css"/>
  <style>
	/*########## 공통영역 ##########*/
		#wrap{width:100%; max-width:1920px; margin:0 auto;}
		h1, h2{position:absolute; left:-9999px; font-size:1px; width:1px; height:1px; line-height:0; overflow:hidden;}
		h3{width:100%; text-align:center; font-size:23px; margin-bottom:30px; color:#02126E; text-transform:uppercase;}/*container각 구역의 제목*/
		h3 .gray{color:#333;}
		.content_info_img{width:595px; height:233px; position:absolute; left:0; top:0;}

	/*########## skipNav ##########*/
		#skipNav{width:30%; position:absolute; left:0; top:-30px; z-index:100;}
		#skipNav p a{display:block; width:100%; height:30px; line-height:30px; text-align:center; font-size:14px;
			background-color:navy; color:#fff; position:absolute;}
		#skipNav p a:focus{top:30px;}

	/*########## container ##########*/
		#container{width:100%;}
		#screen #btn p{background-image:url("img/visualBtn.png");}
	
	/*########## filaWrap ##########*/
		#filaWrap{width:100%;}
	/*########## bestSection : 1200px로 고정 ##########*/
		#bestSectionWrap{width:100%; height:465px; margin-bottom:80px;}
		#bestSection{width:1200px; height:100%; margin:0 auto;}
		/*높이는 h3의 높이 61+bestList 높이 404==465px*/
	
	/*##### bestSection(총1200px) / bestList :너비 900px적용 높이는 이미지에 맞춰서 적용 #####*/
		#bestSection .bestList{width:900px; height:404px; float:left;}
		#bestSection .bestListCate{width:100%; height:34px; line-height:34px; border-bottom:1px solid #000;}
		#bestSection .bestListCate li{width:224px; height:33px; text-align:center; text-transform:uppercase; float:left;
			border-left:1px solid #ddd; border-top:1px solid #ddd;}
		/*각 구간 border 1px씩 왼쪽, 위 주기위해 너비 224px, 높이33px설정*/
		#bestSection .bestListCate .last{width:223px; border-right:1px solid #ddd;}/*마지막 li오른쪽 border추가*/
		#bestSection .bestListCate li a{display:block; width:100%; font-size:14px; color:#333;}
		/*선택된 영역 꾸며주기*/
		#bestSection .bestListCate .on{color:#fff; font-weight:700; background-color:#02123E;}
		/*기능*/
		#bestSection .bestListCate a:hover, #bestSection .bestListCate a:focus{font-weight:700;}

	/*##### bestSection / bestList / bestListProduct #####*/
		#bestSection .bestListProduct{width:100%; height:369px; background-color:#f3f3f3; position:relative;}
		#bestSection .bestListProduct ol{width:100%; height:100%;}
		/*높이 404px-cate 35px(border포함)==369px*/
		#bestSection .bestListProduct li{width:220px; height:369px; margin:0 40px; float:left; position:relative;}/*padding적용*/
		/*
			전체 너비 : 900px, 총 3구역, 한 li당 너비 : 300px
			이미지 크기에 맞춰서 내용 너비 맞추기
				총 300-220==80/2==40px(양옆 padding적용)

		*/
		/*##### 순위 숫자 설정 #####*/
		#bestSection .bestListProduct li .rank{width:47px; height:47px; background-color:#000; color:#fff;
			position:absolute; left:0; top:45px; line-height:47px; text-align:center; font-weight:400;}
		/*이미지 크기 설정*/
		#bestSection .bestListProduct .productImg{width:220px; height:220px; margin:45px 0 10px;}
		#bestSection .bestListProduct .productImg a{display:block; width:100%;}
		#bestSection .bestListProduct .productImg img{width:100%;}

		/*내용 부분 설정*/
		#bestSection .bestListProduct .desc{width:100%; height:65px; text-align:center;}
		#bestSection .bestListProduct .desc .type{width:100%; text-transform:uppercase; font-size:13px; font-weight:700;
			color:#999; text-decoration:underline;}
		#bestSection .bestListProduct .desc .product_name{width:100%;}
		#bestSection .bestListProduct .desc .product_name a{display:block; padding:5px 0; font-size:12px;}
		/*기능 적용*/
		#bestSection .bestListProduct .desc .product_name a:hover, #bestSection .bestListProduct .desc .product_name a:focus{
			text-decoration:underline;}
		#bestSection .bestListProduct .desc .price{width:100%; font-weight:700; font-size:14px; color:#333;}

	/*##### bestSection / cateImg : 너비 300px적용 #####*/
		#bestSection .cateImg{width:270px; height:404px; float:left; margin:0 15px; overflow:hidden; position:relative; 
			border-radius:0 50px 0 0;}
		#bestSection .cateImg span{display:block; width:100%; position:absolute; left:0; top:0;}
		#bestSection .cateImg img{width:110%;}
		
	/*########## recommendSection: 1200px로 고정 ##########*/
		#recommendSectionWrap{width:100%; height:371px; margin-bottom:80px;}
		#recommendSection{width:1200px; height:100%; margin:0 auto;}
		/*recommendSection의 높이는 li먼저 작업후 설정해줌*/
		#recommendSection .recList{width:100%; height:310px;}
		#recommendSection .recList ul{width:100%; height:100%;}

	/*##### recommendSection / li #####*/
		#recommendSection .recList li{width:280px; height:310px; margin-right:26px; float:left;
			text-align:center; position:relative;}
		#recommendSection .recList li:last-child{margin-right:0;}
		#recommendSection .recList li a{display:block; width:100%; height:280px;  background-color:#2E2F47; overflow:hidden;
			transition:background-color .5s ease-out;}
		#recommendSection .recList li a .recList_img{display:block; width:100%;}

	/*##### recommendSection / li / recList_text : position 적용 #####*/
		#recommendSection .recList li a .recList_text{display:block; width:100%; position:absolute; left:0; top:30px;
			font-size:17px; color:#fff;}
		#recommendSection .recList li a .recList_text strong{display:block; font-size:14px;}
		#recommendSection .recList li a .recList_text em{display:block; padding:13px 0 10px; color:#ccc;
			font-style:normal;}
		#recommendSection .recList li a .recList_text .recList_tag{display:block; font-weight:700;
			font-size:28px;}

		/*기능적용*/
		#recommendSection .recList a:hover, #recommendSection .recList a:focus{overflow:visible; background-color:#10D584;}
		#recommendSection .recList a:hover .recList_text em, #recommendSection .recList a:focus .recList_text em{
			color:#35355D; font-weight:700;}
		#recommendSection .recList a:hover .recList_text .recList_tag, #recommendSection .recList a:focus .recList_text .recList_tag{color:#E6FF75;}

	/*########## filaSection: 1200px로 고정 ##########*/
		#filaSectionWrap{width:100%; height:561px; margin-bottom:120px;}
		#filaSection{width:1200px; height:100%; margin:0 auto;}
		#filaSection .filaList{width:100%; height:500px;}
		#filaSection .filaList ul{width:100%; height:100%;}
	
	/*########## filaSection / li ##########*/
		#filaSection .filaList li{width:300px; float:left; position:relative; overflow:hidden; transition:width .4s linear;}
		#filaSection .filaList ul .filaList_cate{width:100%; height:100%;}
		#filaSection .filaList ul .filaList_cate h4{position:absolute; right:10px; bottom:70px;
			font-size:40px; text-transform:uppercase; border-bottom:2px solid #fff; color:#fff;
			transition:bottom .6s ease-in-out; z-index:1;}
		/*z-index적용중*/
		#filaSection .filaList ul .filaList_cate .filaList_img{width:100%; height:500px;}
		#filaSection .filaList ul .filaList_cate img{width:100%; transition:transform .6s ease-in-out;}
		#filaSection .filaList ul .filaList_cate .black_bg{width:100%; height:100%; background-color:rgba(0,0,0,0.5);
			position:absolute; left:0; top:0; display:none;}
		/*subCate영역*/
		#filaSection .filaList ul .filaList_cate .filaList_subCate{width:100%;
			background-color:#000; position:absolute; left:0; bottom:0; transform:translatey(180px);
			transition:transform .6s ease-in-out;}
		#filaSection .filaList ul .filaList_cate .filaList_subCate li{width:250px; line-height:44px;
			margin:0 25px;}
		#filaSection .filaList ul .filaList_cate .filaList_subCate a{display:block; color:#fff; font-size:13px; text-transform:uppercase; 
			font-weight:700; border-bottom:1px solid #555;}

		/*기능 적용*/
		#filaSection .filaList li:hover .filaList_cate h4{bottom:180px; border-bottom:none;}
		#filaSection .filaList li:hover .filaList_cate img{transform:scale(1.2);}
		#filaSection .filaList li:hover .filaList_cate .filaList_subCate{transform:translatey(0);}
		#filaSection .filaList ul .filaList_cate .filaList_subCate a:hover, #filaSection .filaList ul .filaList_cate .filaList_subCate a:focus{
			color:#aaa;}

	/*########## underwearSectionWrap ##########*/
		#underwearSectionWrap{width:100%; margin-bottom:120px;}
	/*########## underswearSection : 1200px로 고정 ##########*/
		#underwearSection{width:1200px; margin:0 auto;}

	/*##### underwearSection #####*/
		#underwearSection div{width:300px; float:left;}
		#underwearSection div p{width:250px; height:314px; margin:25px; border-bottom:2px solid #000;}
		#underwearSection p a{display:block; width:100%; font-size:14px;}
		#underwearSection p a strong{display:block; padding:20px 0;}
		#underwearSection div a img{width:100%;}

	/*##### underwearSection / middle #####*/
		#underwearSection .underwear_middle{width:600px; box-shadow:0 0 20px rgba(0,0,0,.3);}
		#underwearSection .underwear_middle p{width:500px; height:655px; margin:25px 50px;}
		#underwearSection .underwear_middle p a strong{font-size:23px;}
		#underwearSection .underwear_middle p a span{display:block; font-size:15px;
			padding-bottom:37px;}/*양옆과 높이 맞추기 위해 padding-bottom:37px 적용*/

		#underwearSection:after{content:""; display:block; clear:both;}

	/*########## subVisual1 : 너비 1200px ##########*/
		#subVisual1Wrap{width:100%; height:360px; background-image:url("img/event_bg.png");
			background-position:center; background-repeat:no-repeat; margin-bottom:150px;}
		#subVisual1{width:1200px; height:100%; margin:0 auto; color:#fff; position:relative;}
		#subVisual1 h3{color:#fff; padding-bottom:50px;}
		#subVisualWrap #subVisual1Btn{display:none;}
	
	/*textBtn은 online과 monthlyEvent의 공통*/
		#subVisual1 .textBtn{width:142px; height:37px; margin-top:10px; text-align:center; position:relative;}
		#subVisual1 .textBtn a{display:block; width:140px; height:35px;  line-height:33px; border:1px solid #555; color:#aaa;
			font-size:12px; transition:color .3s linear;}
		#subVisual1 #monthlyEvent .textBtn a{border-color:#911A1A;}
		#subVisual1 .textBtn a span{display:block; background-color:#fff; position:absolute;}
		#subVisual1 .textBtn a .btnTop{left:0; top:0; transition:width .3s linear;}
		#subVisual1 .textBtn a .btnBottom{right:0; bottom:0; transition:width .3s linear .6s;}
		#subVisual1 .textBtn a .btnTop, #subVisual1 .textBtn a .btnBottom{width:0; height:2px;}
		#subVisual1 .textBtn a .btnRight, #subVisual1 .textBtn a .btnLeft{width:2px; height:0;}
		#subVisual1 .textBtn a .btnRight{right:0; top:0; transition:height .3s linear .3s;}
		#subVisual1 .textBtn a .btnLeft{left:0; bottom:0; transition:height .3s linear .9s;}
		
		/*기능적용*/
		#subVisual1 .textBtn a:hover, #subVisual1 .textBtn a:focus{color:#fff;}
		#subVisual1 .textBtn a:hover .btnTop, #subVisual1 .textBtn a:hover .btnBottom,
		#subVisual1 .textBtn a:focus .btnTop, #subVisual1 .textBtn a:focus .btnBottom{width:100%;}
		#subVisual1 .textBtn a:hover .btnRight, #subVisual1 .textBtn a:hover .btnLeft,
		#subVisual1 .textBtn a:focus .btnRight, #subVisual1 .textBtn a:focus .btnLeft{height:100%;}

	/*##### onlineEvent : 너비 600px #####*/
		#onlineEvent{width:600px; height:360px; float:left;}
		#onlineEvent .onlineEvent_text{width:260px;}
		#onlineEvent .onlineEvent_text h3{padding-top:40px; text-align:left;}
		#onlineEvent .onlineEvent_text .onlineEvent_desc{text-align:right;}
		#onlineEvent .onlineEvent_text .onlineEvent_desc strong{font-size:25px;}
		#onlineEvent .onlineEvent_text .onlineEvent_desc .color{color:#459BC1;}
		#onlineEvent .onlineEvent_text .textBtn{margin-left:118px;}
		#onlineEvent .onlineEvent_img{width:230px; height:152px; position:absolute; left:275px; bottom:120px;}
		#onlineEvent .onlineEvent_img img{width:100%;}

	/*##### monthlyEvent : 너비 600px #####*/
		#monthlyEvent{width:600px; height:360px; float:left;}
		#monthlyEvent .monthlyEvent_text{width:430px; padding-left:170px;}
		#monthlyEvent .monthlyEvent_text h3{text-align:right; padding-top:120px;}
		#monthlyEvent .monthlyEvent_text .monthlyEvent_desc strong{font-size:25px;}
		#monthlyEvent .monthlyEvent_img{width:250px; height:144px; position:absolute; right:440px; bottom:50px;}
		#monthlyEvent .monthlyEvent_img img{width:100%;}

	/*########## kidsSectionWrap ##########*/
		#kidsSectionWrap{width:100%; height:710px; padding:90px 0; background-color:#f3f3f3; margin-bottom:120px;}

	/*########## kidsSection : 1200px로 고정 ##########*/
		#kidsSection{width:100%; height:100%;}
		#kidsSection ul{width:1200px; height:100%; margin:0 auto; position:relative;}
		/*각 구간 영역 설정*/
		#kidsSection li{width:230px; height:230px; margin:0 10px 10px 0; float:left; position:relative;}
		#kidsSection ul a{display:block; width:100%; height:100%;}
		#kidsSection ul img{width:100%;}
		#kidsSection .kids_leftTop{width:470px; height:470px;}
		#kidsSection .kids_textArea, #kidsSection .kids_leftBottom, #kidsSection .kids_titleImg{width:470px;}

	/*##### kidsSection / kids_textArea #####*/
		#kidsSection .kids_textArea h4{width:470px; font-size:30px; height:40px; line-height:40px; padding-top:20px;
			color:#333; text-transform:uppercase; overflow:hidden; white-space:nowrap;}
		#kidsSection .kids_textArea h4:after{content:"─────────────"; display:inline-block; margin-left:20px;}

	/*##### kidsSection / kids_textArea / kids_desc, kids_subTitle, plus #####*/
		#kidsSection .kids_textArea .kids_desc{width:100%; padding-top:5px;}
		#kidsSection .kids_textArea .kids_subTitle{text-align:right; font-size:24px; color:#777; margin-top:79px;}
		#kidsSection .plus a{width:30px; height:30px; transition:transform .5s ease-in-out;}
		#kidsSection .plus a img{width:100%; height:100%;}

		/*기능 적용*/
		#kidsSection .plus a:hover, #kidsSection .plus a:focus{transform:rotate(-180deg);}

	/*##### kidsSection / bg #####*/
		#kidsSection .bg{width:0; height:0; line-height:0; font-size:13px; background-color:rgba(0,0,0,.5);
			position:absolute; left:0; top:0; transition:all .5s ease-in-out .1s; color:#fff; text-align:center;}

	/*##### kidsSection / kids_decoImg #####*/
		#kidsSection .kids_decoImg{width:131px; height:333px; position:absolute; right:50px; bottom:80px;}

	/*########## subVisual2 : 너비 1200px ##########*/
		#subVisual2Wrap{width:100%; height:350px; margin-bottom:100px; background-image:url("img/golf_bg.png");
			background-position:center top; background-repeat:no-repeat;}
		#subVisual2{width:1200px; height:350px; margin:0 auto;}
		#filaGolf{width:400px; height:176px; padding:87px 0 87px 800px;}
		#filaGolf h4{font-size:20px; font-weight:400; color:#fff;}
		#filaGolf #golf_logo{width:160px; margin:15px 0;}
		#filaGolf #golf_logo img{width:100%;}

	/*##### subVisual2 / textBtn #####*/
		#filaGolf .textBtn{width:140px; height:35px; text-align:center;}
		#filaGolf .textBtn a{display:block; width:100%; height:100%;  line-height:35px; background-color:#000;
			color:#fff; font-size:12px; box-shadow:0 0 5px rgba(0,0,0,.5);}
		#filaGolf .textBtn a:hover, #filaGolf .textBtn a:focus{background-color:#333;}

		#mobGolfWrap{display:none;}
	/*########## editorialWrap ##########*/
		#editorialWrap{width:100%;}

	/*########## nowSection : 1200px로 고정 ##########*/
		#nowSectionWrap{width:100%; height:541px; margin-bottom:120px;}
		#nowSection{width:1200px; height:100%; margin:0 auto;}
		/*nowMain(340px)과 nowDesc(860px)로 영역 나누기*/
		#nowSection .nowMain{width:340px; height:480px; float:left;}
		#nowSection .nowDesc{width:860px; height:480px; overflow:auto; float:left;}
		/*스크롤때문에 20늘림 나중에 수정하기*/
		#nowSection .nowDesc::-webkit-scrollbar{width:10px;}
		#nowSection .nowDesc::-webkit-scrollbar-track{box-shadow:inset 0 0 6px rgba(0,0,0,.3); border-radius:5px;}
		#nowSection .nowDesc::-webkit-scrollbar-thumb{background-color:#25345C; border-radius:5px;}

	/*##### nowSection / nowMain #####*/
		#nowSection .nowMain_img{width:280px; margin:0 30px 20px 30px;}
		#nowSection .nowMain_img img{width:100%;}
		#nowSection .nowMain_text{width:300px; margin:0 30px; text-align:center; font-size:18px;}
		#nowSection .nowMain_text strong{display:block; font-size:20px; padding-bottom:3px;}

	/*##### nowSection / nowDesc(840px) #####*/
	/*ul이 총 3개이므로 ul 한개당 280px적용*/
		#nowSection .nowDesc ul{width:279px; height:1695px; float:left; border-left:1px solid #aaa;}
		#nowSection .nowDesc li{width:239px; margin:0 20px 40px;}
		#nowSection .nowDesc ul a{display:block; width:100%; font-size:12px;}
		#nowSection .nowDesc ul a .nowDesc_img{display:block; width:100%; margin-bottom:15px;}
		#nowSection .nowDesc ul a .nowDesc_img img{width:100%; border-top-right-radius:80px;
			transition:border-top-right-radius .3s ease-in-out;}
		#nowSection .nowDesc ul a .nowDesc_title{display:block; width:100%; font-weight:700; font-style:normal;
			text-transform:uppercase; color:#333; font-size:15px; padding-bottom:5px;}
		
		/*기능 적용*/
		#nowSection .nowDesc ul a:hover .nowDesc_title, #nowSection .nowDesc ul a:focus .nowDesc_title{
			text-decoration:underline;}
		#nowSection .nowDesc ul a:hover .nowDesc_img img, #nowSection .nowDesc ul a:focus .nowDesc_img img{
			border-top-right-radius:0;}

	/*########## styleSection : 1200px로 고정 ##########*/
		#styleSectionWrap{width:100%; height:481px; margin-bottom:120px;}
		#styleSection{width:1200px; height:100%;; margin:0 auto;}
		#styleSection ul{width:100%; height:420px;}
		#styleSection li{width:280px; height:100%; float:left; margin-right:26px; position:relative;}
		#styleSection li:last-child{margin-right:0;}
		#styleSection ul a{display:block; width:100%;}
		/*인스타 주소 블록 영역*/
		#styleSection ul p{width:100%; height:40px; line-height:40px; text-indent:20px; background-color:rgba(0,0,0,0.5);
			position:absolute; left:0; bottom:0;}
		#styleSection ul p a{color:#fff; font-size:14px;}
		#styleSection ul a img{width:100%;}

		/*기능 적용*/
		#styleSection ul li:hover p a{text-decoration:underline;}

	/*################################ 반응형 맞추기 #######################################*/
		@media all and (min-width:1025px) and (max-width:1220px){
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
			#bestSection{width:1000px;}
			#bestSection .bestList{width:760px; height:345px;}
			#bestSection .bestListCate li{width:189px;}
			#bestSection .bestListCate .last{width:188px;}
			#bestSection .bestListProduct{height:310px;}
			#bestSection .bestListProduct li{width:253px; height:310px; margin:0;}
			#bestSection .bestListProduct li .rank{left:31px; top:30px;}
			#bestSection .bestListProduct .productImg{width:191px; height:191px; margin:30px auto 10px;}

			#bestSection .cateImg{width:230px; height:345px; float:left; margin:0; margin-left:10px;}

			#recommendSection{width:1000px;}
			#recommendSection .recList li{width:240px; margin-right:13px;}
			#recommendSection .recList li a .recList_img img{width:240px;}
			#filaSectionWrap{width:100%; height:478px;}
			#filaSection{width:1000px;}
			#filaSection .filaList li{width:250px;}
			#filaSection .filaList ul .filaList_cate .filaList_img{height:417px;}
			#filaSection .filaList ul .filaList_cate .filaList_subCate li{width:200px;}

			#underwearSection{width:1000px;}
			#underwearSection div{width:250px;}
			#underwearSection div p{width:200px; height:259px;}
			#underwearSection p a{font-size:12px;}
			#underwearSection .underwear_middle{width:500px;}
			#underwearSection .underwear_middle p{width:400px; height:545px;}
			#underwearSection .underwear_middle p a span{font-size:14px; padding-bottom:35px;}

			#subVisual1{width:1000px;}
			#subVisual1 h3{padding-bottom:30px;}
			#onlineEvent, #monthlyEvent{width:500px;}
			#onlineEvent .onlineEvent_text{width:250px;}
			#onlineEvent .onlineEvent_text .textBtn{margin-left:108px;}
			#onlineEvent .onlineEvent_img{width:200px; height:132px; position:absolute; left:275px; bottom:180px;}
			#monthlyEvent .monthlyEvent_text{padding-left:70px;}
			#monthlyEvent .monthlyEvent_img{width:180px; height:104px; position:absolute; right:440px; bottom:50px;}
			
			#kidsSectionWrap{height:600px;}
			#kidsSection ul{width:1000px;}
			#kidsSection li{width:190px; height:190px;}
			#kidsSection .kids_leftTop{width:390px; height:390px;}
			#kidsSection .kids_textArea, #kidsSection .kids_leftBottom, #kidsSection .kids_titleImg{width:390px;}
			#kidsSection .kids_textArea h4{width:390px;}
			#kidsSection .kids_textBox{line-height:190px;}
			#kidsSection .kids_leftTop .kids_textBox{line-height:390px;}
			#kidsSection .kids_textArea .kids_subTitle{margin-top:51px;}
			#kidsSection .kids_decoImg{width:110px; height:280px; position:absolute; right:30px; bottom:70px;}

			#subVisual2{width:1000px;}
			#filaGolf{width:325px; height:162px; padding:94px 0 94px 675px;}
			#filaGolf h4{font-size:17px;}
			#filaGolf #golf_logo{width:130px; margin:15px 0;}

			#nowSection{width:1000px;}
			#nowSection .nowMain{width:200px; height:440px;}
			#nowSection .nowDesc{width:800px; height:440px;}
			#nowSection .nowMain_img{width:180px; margin:0 20px 20px 0;}
			#nowSection .nowMain_text{width:160px; margin:0 auto; font-size:14px;}
			#nowSection .nowMain_text strong{font-size:16px;}
			#nowSection .nowDesc ul{width:259px; height:1610px;}
			#nowSection .nowDesc li{width:223px; margin:0 18px 30px;}
			
			#styleSectionWrap{height:406px;}
			#styleSection{width:1000px;}
			#styleSection ul{height:345px;}
			#styleSection li{width:230px;}

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

			#bestSectionWrap{height:396px; margin-bottom:60px;}
			#bestSection{width:748px;}
		
			#bestSection .bestList{width:748px; height:349px; float:none;}
			#bestSection .bestListCate{height:26px; line-height:26px;}
			#bestSection .bestListCate li{width:186px; height:25px;}
			#bestSection .bestListCate .last{width:185px;}
			#bestSection .bestListCate li a{font-size:12px;}

		/*##### bestSection / bestList / bestListProduct #####*/
			#bestSection .bestListProduct{width:748px; height:322px;}
			#bestSection .bestListProduct li{width:189px; height:322px; margin:0 30px;}
	
			/*##### 순위 숫자 설정 #####*/
			#bestSection .bestListProduct li .rank{width:45px; height:45px; top:31px; line-height:45px;}
			/*이미지 크기 설정*/
			#bestSection .bestListProduct .productImg{width:189px; height:189px; margin:31px 0 10px;}

			/*내용 부분 설정*/
			#bestSection .bestListProduct .desc{height:61px;}
			#bestSection .bestListProduct .desc .type{font-size:12px;}
			#bestSection .bestListProduct .desc .price{font-size:13px;}

			#bestSection .cateImg{display:none;}

			#recommendSectionWrap{height:290px; margin-bottom:80px;}
			#recommendSection{width:748px;}
			#recommendSection .recList{height:240px;}
			#recommendSection .recList li{width:170px; height:240px; margin-right:22px; position:relative;}
			#recommendSection .recList li:last-child{margin-right:2px;}
			#recommendSection .recList li a{height:200px; overflow:visible; border-top-right-radius:40px;}
			#recommendSection .recList li a .recList_img{position:absolute; left:0; bottom:15px;}
			#recommendSection .recList li a .recList_img img{width:100%;}

			#recommendSection .recList li a .recList_text{font-size:14px;}
			#recommendSection .recList li a .recList_text strong{font-size:14px;}
			#recommendSection .recList li a .recList_text .recList_tag{display:none;}

			#filaSectionWrap{display:none;}

			#subVisual0Wrap{height:270px; margin-bottom:120px; position:relative;}
			#subVisual0{width:748px;}
			#subVisual0 .subVisual0_img{width:400px; height:270px; margin:0; float:none; position:absolute; right:20px; bottom:-30px;}
			#subVisual0 .subVisual0_img p{display:none; position:static;}
			#subVisual0 .subVisual0_img p img{position:static;}
			#subVisual0 .subVisual0_img .hmain{width:400px; display:block;}
			#subVisual0 .subVisual0_img .hmain img{width:100%;}
			#subVisual0 .subVisual0_img:hover .hmain img{display:block;}
			#subVisual0 .subVisual0_text{width:400px; height:200px; padding:35px 0 35px 100px; float:none;}
			#subVisual0 .subVisual0_text h3{text-align:left; color:#fff; font-size:32px; padding-bottom:10px; margin-bottom:0;
			transition:color .3s linear; letter-spacing:3px; animation:light 1s infinite alternate;}
			#subVisual0 .subVisual0_text em{font-size:20px;}
			@keyframes light{
				0%{text-shadow:0 0 10px rgba(255,255,255,0);}
				100%{text-shadow:0 0 10px rgba(255,255,255,1);}
			}
			#subVisual0 .subVisual0_text .subVisual0_desc{font-size:14px;}
			#subVisual0 .subVisual0_text .subVisual0_desc span{display:none;}

			#underwearSectionWrap{margin-bottom:60px;}
			#underwearSection{width:748px;}
			#underwearSection div{width:194px; float:left;}
			#underwearSection div p{width:174px; height:235px; margin:10px 10px 20px;}
			#underwearSection div p a{font-size:13px;}
			#underwearSection div p a strong{padding:10px 4px;}
			#underwearSection .underwear_middle{width:360px;}
			#underwearSection .underwear_middle p{width:320px; height:492px; margin:10px 20px;}
			#underwearSection .underwear_middle p a strong{font-size:23px; padding:15px 0;}
			#underwearSection .underwear_middle p a span{display:block; font-size:15px;
				padding-bottom:33px;}

			#subVisual1Wrap{width:100%; height:200px; background-image:none; margin-bottom:80px; overflow:hidden; position:relative;}
			#subVisual1{width:200%; height:100%; position:static;}
			#subVisual1Btn{width:40px; height:16px; position:absolute; left:50%; margin-left:-24px; bottom:5px;}
			#subVisual1Btn a{display:block; width:16px; height:16px; margin-right:8px; border-radius:10px; background-color:rgba(200,200,200,.3);
				float:left;}
			#subVisual1Btn .on{background-color:rgba(200,200,200,.9);}
			#subVisual1Btn a:last-child{margin-right:0;}
			#subVisual1 h3{padding-bottom:0; font-size:18px; margin-bottom:10px; text-indent:15px;}
			#subVisual1 h3:before, #subVisual1 h3:after{display:none;}
		
			#subVisual1 .textBtn{width:150px; height:36px; margin-top:10px;}
			#subVisual1 .textBtn a{display:block; width:148px; height:34px; line-height:34px; border-radius:18px;
				font-size:13px; transition:border-color .3s linear;}
			#subVisual1 #monthlyEvent .textBtn a:hover, #subVisual1 .textBtn a:hover{border-color:#fff;}
			#subVisual1 .textBtn a span{display:none;}
			
			#onlineEvent, #monthlyEvent{width:50%; height:100%; background-color:#292836;}
			#onlineEvent .onlineEvent_text{width:50%; float:left;}
			#onlineEvent .onlineEvent_text h3{padding-top:23px; text-align:left;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc{font-size:14px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc strong{font-size:23px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc .color{color:#459BC1;}
			#onlineEvent .onlineEvent_text .textBtn{margin-left:0; float:right;}
			#onlineEvent .onlineEvent_img{width:50%; height:160px; margin:15px 0 25px; position:static; float:left;}
			#onlineEvent .onlineEvent_img img{display:block; width:200px; margin:18px auto;}

			#monthlyEvent{background-color:#CD3838;}
			#monthlyEvent .monthlyEvent_text{width:50%; float:left; padding-left:0;}
			#monthlyEvent .monthlyEvent_text h3{text-align:left; padding-top:23px;}
			#monthlyEvent .monthlyEvent_text .monthlyEvent_desc{width:100%; font-size:14px; text-align:right;}
			#monthlyEvent .monthlyEvent_text .monthlyEvent_desc strong{font-size:23px;}
			#monthlyEvent .monthlyEvent_text .textBtn{float:right; clear:both;}
			#monthlyEvent .monthlyEvent_img{width:50%; height:160px; margin:20px 0; position:static; float:left;}
			#monthlyEvent .monthlyEvent_img img{display:block; width:200px; margin:20px auto;}

			#kidsSectionWrap{width:100%; height:716px; padding:80px 0; margin-bottom:80px;}

			#kidsSection ul{width:745px; height:100%; position:relative; margin:0 auto;}
			#kidsSection li{width:230px; height:230px; margin:0 0 15px 15px;}
			#kidsSection .kids_middle{margin-left:10px;}
			#kidsSection .kids_textArea{width:230px; height:220px; margin-bottom:20px;}
			#kidsSection .kids_leftBottom, #kidsSection .kids_titleImg{display:none;}
			#kidsSection .kids_textArea h4{width:100%; font-size:25px; height:30px; line-height:30px; padding-top:0;}
			#kidsSection .kids_textArea h4:after{content:"───────";}

			#kidsSection .kids_textArea .kids_desc{font-size:13px;}
			#kidsSection .kids_textArea .kids_subTitle{width:60%; margin-left:40%; font-size:23px; margin-top:56px;}
			#kidsSection .plus{width:30px; height:30px; position:absolute; right:214px; top:189px; margin:0;}

			#kidsSection .kids_decoImg{display:none;}

			#subVisual2Wrap{width:100%; height:250px; margin-bottom:100px; background-image:url("img/golf_bg.png");
				background-position:center 0; background-repeat:no-repeat;}
			#subVisual2{width:748px; height:250px;}
			#filaGolf{height:168px; padding:41px 174px;}
			#filaGolf h4{font-size:17px; font-weight:400; color:#fff; text-align:center;}
			#filaGolf #golf_logo{width:130px; margin:15px auto;}

			#filaGolf .textBtn{border:1px solid #fff; margin:0 auto;}
			#filaGolf .textBtn a{background-color:rgba(0,0,0,0); transition:background-color .3s linear;}
			#filaGolf .textBtn a:hover, #filaGolf .textBtn a:focus{background-color:rgba(0,0,0,.8);}

			#nowSectionWrap{display:none;}

			#styleSectionWrap{height:330px; margin-bottom:80px;}
			#styleSection{width:725px;}
			#styleSection ul{height:255px;}
			#styleSection li{width:170px; margin-right:15px; border-top-right-radius:30px;}
			#styleSection li a img{border-top-right-radius:30px;}
			#styleSection ul p{width:100%; height:35px; line-height:35px; text-indent:10px;}
			#styleSection ul p a{font-size:13px;}

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
			h3:before{content:"──────"; display:inline; margin-right:7px;}
			h3:after{content:"──────"; display:inline; margin-left:7px;}
			#skipNav{display:none;}
			#headerWrap{display:none;}
			#mobHeader{display:block;}
			#remoteCon{width:0; left:-9999px;}
			#film .scene a{overflow:hidden;}
			#film .scene img{width:140%; margin-left:-20%;}

			#bestSectionWrap{width:100%; height:590px; margin-bottom:50px; background-color:#f5f5f5; position:relative;}
			#bestSection{width:460px;}
			#bestSection h3{padding-top:30px;}
			#bestSection .bestList{width:100%; height:487px; float:none;}
			#bestSection .bestListCate{width:365px; height:32px; line-height:32px; border:none; margin:0 auto 15px;}
			#bestSection .bestListCate li, #bestSection .bestListCate .last{width:78px; height:30px; 
				border-radius:16px; border:1px solid #ddd; margin-right:15px;}
			#bestSection .bestListCate .last{margin-right:0;}
			#bestSection .bestListCate li a{border-radius:16px; font-size:12px;}

			#bestSection .bestListProduct{width:100%; height:440px; position:static;}
			#bestSection .bestListProduct ol{width:100%; height:100%;}
			#bestSection .bestListProduct li{width:160px; height:220px; margin:0 10px;
				float:left; position:relative;}
			#bestSection .bestListProduct .topList{width:280px; height:310px; margin:70px 0 60px;}

			/*##### 순위 숫자 설정 #####*/
			#bestSection .bestListProduct li .rank{width:35px; height:35px; background-color:#000; color:#fff;
				position:absolute; left:10px; top:0; line-height:35px; text-align:center; font-weight:400;}
			#bestSection .bestListProduct .topList .rank{width:45px; height:45px; line-height:45px; left:25px;}
			#bestSection .bestListProduct .productImg{width:140px; height:140px; margin:0 10px 5px;}
			#bestSection .bestListProduct .topList .productImg{width:230px; height:230px; margin:0 auto 10px;}
			#bestSection .bestListProduct .desc .product_name a{ padding:3px 0;}
			#bestSection .cateImg{display:none;}

			#recommendSectionWrap{width:100%; height:650px; margin-bottom:50px;}
			#recommendSection{width:460px;}
			#recommendSection .recList{height:600px;}
			#recommendSection .recList ul{width:100%; height:100%;}
			#recommendSection .recList li{width:230px; height:300px; margin-right:0;}
			#recommendSection .recList li a{height:260px; overflow:visible;}
			#recommendSection .recList .rec1 a{background-color:#933838; border-top-left-radius:50px;}
			#recommendSection .recList .rec2 a{background-color:#CA6868;}
			#recommendSection .recList .rec3 a{background-color:#4D6CBC;}
			#recommendSection .recList .rec4 a{background-color:#385193; border-bottom-right-radius:50px;}
			#recommendSection .recList li a .recList_img img{width:100%;}
			#recommendSection .recList li a .recList_text{color:#fff; top:50px;}
			#recommendSection .recList li a .recList_text em{display:block; font-size:15px; padding:15px 0 10px; color:#ccc;
				font-style:normal;}
			#recommendSection .recList li a .recList_text .recList_tag{display:none;}
			
			#filaSectionWrap{display:none;}

			#subVisual0Wrap{width:100%; height:500px; background-color:#000; margin-bottom:60px; position:relative;}
			#subVisual0{width:300px; height:100%; margin:0 auto; overflow:hidden;}

			#subVisual0 .subVisual0_img{width:240px; height:240px; margin:80px 50px 20px; float:none; position:static;
				background-color:#333; border-radius:120px;}
			#subVisual0 .subVisual0_img:before{content:""; display:block; width:70px; height:70px; background-color:#333;
				border-radius:35px; position:absolute; right:10%; bottom:8%;}
			#subVisual0 .subVisual0_img:after{content:""; display:block; width:100px; height:100px; background-color:#333;
				border-radius:50px; position:absolute; left:6%; bottom:20%;}
			#subVisual0 .subVisual0_img p{display:none; position:static; height:134px; padding:28px 0 38px;}
			#subVisual0 .subVisual0_img .hmain{display:block; width:100%;}
			#subVisual0 .subVisual0_img img{position:static; width:100%;}
			#subVisual0 .subVisual0_img:hover .hmain img{display:block;}
			#subVisual0 .subVisual0_text{width:100%; height:290px; padding:0; float:none;}
			#subVisual0 .subVisual0_text h3{width:200px; color:#fff; font-size:30px; font-style:italic; padding-bottom:0;
				letter-spacing:0; position:absolute; left:5%; top:60px; animation:light 1s infinite alternate;}
			@keyframes light{
				0%{text-shadow:0 0 10px rgba(255,255,255,0);}
				100%{text-shadow:0 0 10px rgba(255,255,255,1);}
			}
			#subVisual0 .subVisual0_text h3:before, #subVisual0 .subVisual0_text h3:after{display:none;}
			#subVisual0 .subVisual0_text  .subVisual0_desc{font-size:14px; text-align:right;
				position:absolute; right:5%; bottom:110px;}
			#subVisual0 .subVisual0_text  .subVisual0_desc em{font-size:18px; font-weight:700; color:#ccc;}
			#subVisual0 .subVisual0_text  .subVisual0_desc span{display:none;}
			#subVisual0 .subVisual0_text .textBtn{margin:100px auto; position:relative;}

			#underwearSectionWrap{margin-bottom:60px;}
			#underwearSection{width:460px;}
			#underwearSection div{width:460px; float:none;}
			#underwearSection div p{width:215px; height:266px; margin:0 0 0 30px; float:left;}
			#underwearSection div p:first-child{margin-left:0;}
			#underwearSection p a{font-size:13px;}
			#underwearSection p a strong{padding:15px 0 15px 6px;}
			#underwearSection div:after{content:""; display:block; clear:both;}
			#underwearSection .underwear_middle{width:460px;}
			#underwearSection .underwear_middle p{width:460px; height:570px; margin:30px 0;}
			#underwearSection .underwear_middle p a strong{font-size:17px;}
			#underwearSection .underwear_middle p a span{display:block; font-size:14px; padding:0 0 20px 6px;}
			
			#subVisual1Wrap{width:100%; height:160px; background-image:none; margin-bottom:60px; overflow:hidden; position:relative;}
			#subVisual1{width:200%; height:100%; position:static;}
			#subVisual1Btn{width:36px; height:14px; position:absolute; left:50%; margin-left:-18px; bottom:2px;}
			#subVisual1Btn a{display:block; width:14px; height:14px; margin-right:8px; border-radius:7px; background-color:rgba(200,200,200,.3);
				float:left;}
			#subVisual1Btn .on{background-color:rgba(200,200,200,.9);}
			#subVisual1Btn a:last-child{margin-right:0;}
			#subVisual1 h3{padding-bottom:0; font-size:15px; margin-bottom:10px;}
			#subVisual1 h3:before, #subVisual1 h3:after{display:none;}
		
			#subVisual1 .textBtn{width:120px; height:30px; margin-top:7px;}
			#subVisual1 .textBtn a{display:block; width:118px; height:28px; line-height:28px; border-radius:15px;
				font-size:12px; transition:border-color .3s linear;}
			#subVisual1 #monthlyEvent .textBtn a:hover, #subVisual1 .textBtn a:hover{border-color:#fff;}
			#subVisual1 .textBtn a span{display:none;}
			
			#onlineEvent, #monthlyEvent{width:50%; height:100%; background-color:#292836;}
			#onlineEvent .onlineEvent_text{width:60%; float:left;}
			#onlineEvent .onlineEvent_text h3{padding-top:15px; text-align:left; text-indent:10px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc{font-size:13px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc strong{font-size:18px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc .color{color:#459BC1;}
			#onlineEvent .onlineEvent_text .textBtn{margin-left:0; float:right;}
			#onlineEvent .onlineEvent_img{width:40%; height:110px; margin:20px 0; position:static; float:left;}
			#onlineEvent .onlineEvent_img img{display:block; width:140px; margin:18px auto;}

			#monthlyEvent{background-color:#CD3838;}
			#monthlyEvent .monthlyEvent_text{width:60%; float:left; padding-left:0;}
			#monthlyEvent .monthlyEvent_text h3{text-align:left; padding-top:15px; text-indent:10px;}
			#monthlyEvent .monthlyEvent_text .monthlyEvent_desc{width:140px; float:right; font-size:13px; text-align:right;}
			#monthlyEvent .monthlyEvent_text .monthlyEvent_desc strong{font-size:15px;}
			#monthlyEvent .monthlyEvent_text .textBtn{float:right; clear:both;}
			#monthlyEvent .monthlyEvent_img{width:40%; height:110px; margin:20px 0; position:static; float:left;}
			#monthlyEvent .monthlyEvent_img img{display:block; width:140px; margin:20px auto;}
			
			#kidsSectionWrap, #editorialWrap, #subVisual2Wrap{display:none;}

			#mobGolfWrap{display:block; width:100%; margin-bottom:50px;}
			#mobGolfTitle{width:100%; height:200px; background-image:url("img/golf_mob_bg.png"); background-repeat:no-repeat;
				background-size:cover; text-align:center; color:#fff; font-size:20px; overflow:hidden; margin-bottom:15px;}
			#mobGolfTitle h4{font-weight:400; margin:50px 0 20px;}
			#mobGolfTitle a{font-size:12px; color:#aaa; display:block; width:100px; height:30px;
				line-height:30px; border:1px solid #777; margin:0 auto; transition:all .4s linear;}
			#mobGolfTitle a:hover, #mobGolfTitle a:focus{background-color:rgba(0,0,0,.8); color:#fff; border-color:#fff;}
			#mobGolfBtn{width:95%; margin:0 auto 20px;}
			#mobGolfBtn span{display:block; width:12px; height:12px; padding:14px 10px; float:right; cursor:pointer;}
			#mobGolfBtn span img{width:100%; height:100%;}
			#mobGolfBtn span:first-child{margin-left:5px;}
			#mobGolfBtn:after{content:""; display:block; clear:both;}
			#mobGolfListArea{width:460px; margin:0 auto; overflow:hidden;}
			#mobGolfList{width:1380px;}
			#mobGolfList ul{width:450px; margin:0 5px; float:left;}
			#mobGolfList li{width:150px; height:170px; float:left; margin-bottom:10px;}
			#mobGolfList li a{display:block; width:130px; height:160px; margin:0 auto 10px;}
			#mobGolfList li a .mobGolfImg{display:block; width:128px; height:128px; border-radius:65px; border:2px solid #fff;
				box-shadow:0 0 5px rgba(0,0,0,.1); margin:0 auto 10px;}
			#mobGolfList li a .mobGolfImg img{width:100%; border-radius:65px;}
			#mobGolfList li a .mobGolfText{display:block; width:100%; height:20px; line-height:20px; font-size:12px; color:#555; text-align:center;}
			#mobGolfList:after, #mobGolfList ul:after{content:""; display:block; clear:both;}

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
			h3:before{content:"───"; display:inline; margin-right:7px;}
			h3:after{content:"───"; display:inline; margin-left:7px;}

			#skipNav{display:none;}
			#headerWrap{display:none;}
			#mobHeader{display:block;}
			
			#mobHeader #searchMob{right:45px;}
			#mobHeader #my_shopping{right:7px;}
			#remoteCon{width:0; left:-9999px;}
			
			#film .scene a{overflow:hidden;}
			#film .scene img{width:180%; margin-left:-40%;}

			#bestSectionWrap{width:100%; height:634px; margin-bottom:50px; background-color:#f5f5f5; position:relative;}
			#bestSection{width:300px;}
			#bestSection h3{padding-top:30px;}
			#bestSection .bestList{width:100%; height:565px; float:none;}
			#bestSection .bestListCate{width:100%; height:32px; line-height:32px; border:none; margin-bottom:5px;}
			#bestSection .bestListCate li, #bestSection .bestListCate .last{width:66px; height:30px; 
				border-radius:16px; border:1px solid #ddd; margin-right:9px;}
			#bestSection .bestListCate .last{margin-right:0;}
			#bestSection .bestListCate li a{font-size:12px; border-radius:16px;}

			#bestSection .bestListProduct{width:100%; height:520px; position:static;}
			#bestSection .bestListProduct ol{width:100%; height:100%;}
			#bestSection .bestListProduct li{width:140px; height:210px; margin:0; margin-right:20px;
				float:left; position:relative;}
			#bestSection .bestListProduct .topList{width:300px; height:280px; margin:20px 0 10px;}
			#bestSection .bestListProduct li:last-child{margin-right:0;}

			/*##### 순위 숫자 설정 #####*/
			#bestSection .bestListProduct li .rank{width:35px; height:35px; background-color:#000; color:#fff;
				position:absolute; left:5px; top:0; line-height:35px; text-align:center; font-weight:400;}
			#bestSection .bestListProduct .topList .rank{width:40px; height:40px; line-height:40px; left:50px;}
			#bestSection .bestListProduct .productImg{width:130px; height:130px; margin:0 5px 5px;}
			#bestSection .bestListProduct .topList .productImg{width:200px; height:200px; margin:0 auto 5px;}
			#bestSection .bestListProduct .desc .product_name a{padding:3px 0;}
			#bestSection .cateImg{display:none;}

			#recommendSectionWrap{width:100%; height:450px; margin-bottom:50px;}
			#recommendSection{width:300px;}
			#recommendSection .recList{height:400px;}
			#recommendSection .recList ul{width:100%; height:100%;}
			#recommendSection .recList li{width:150px; height:200px; margin-right:0;}
			#recommendSection .recList li a{height:160px; overflow:visible;}
			#recommendSection .recList .rec1 a{background-color:#933838;  border-top-left-radius:30px;}
			#recommendSection .recList .rec2 a{background-color:#CA6868;}
			#recommendSection .recList .rec3 a{background-color:#4D6CBC;}
			#recommendSection .recList .rec4 a{background-color:#385193; border-bottom-right-radius:30px;}
			#recommendSection .recList li a .recList_img img{width:100%;}
			#recommendSection .recList li a .recList_text{font-size:12px; color:#fff; font-weight:700;}
			#recommendSection .recList li a .recList_text em{display:block; padding:8px 0 10px; color:#ccc;
				font-style:normal;}
			#recommendSection .recList li a .recList_text .recList_tag{display:none;}
			
			#filaSectionWrap{display:none;}

			#subVisual0Wrap{width:100%; height:500px; background-color:#000; margin-bottom:60px; position:relative;}
			#subVisual0{width:300px; height:100%; margin:0 auto; overflow:hidden;}

			#subVisual0 .subVisual0_img{width:200px; height:200px; margin:80px 50px 20px; float:none; position:static;
				background-color:#333; border-radius:100px;}
			#subVisual0 .subVisual0_img:before{content:""; display:block; width:60px; height:60px; background-color:#333;
				border-radius:30px; position:absolute; right:10%; bottom:8%;}
			#subVisual0 .subVisual0_img:after{content:""; display:block; width:80px; height:80px; background-color:#333;
				border-radius:40px; position:absolute; left:6%; bottom:20%;}
			#subVisual0 .subVisual0_img p{display:none; position:static; height:134px; padding:28px 0 38px;}
			#subVisual0 .subVisual0_img .hmain{display:block; width:100%;}
			#subVisual0 .subVisual0_img img{position:static; width:100%;}
			#subVisual0 .subVisual0_img:hover .hmain img{display:block;}
			#subVisual0 .subVisual0_text{width:100%; height:100px; padding:0; float:none;}
			#subVisual0 .subVisual0_text h3{width:170px;color:#fff; font-size:25px; font-style:italic; padding-bottom:0;
				letter-spacing:0; position:absolute; left:5%; top:60px; animation:light 1s infinite alternate;}
			@keyframes light{
				0%{text-shadow:0 0 10px rgba(255,255,255,0);}
				100%{text-shadow:0 0 10px rgba(255,255,255,1);}
			}
			#subVisual0 .subVisual0_text h3:before, #subVisual0 .subVisual0_text h3:after{display:none;}
			#subVisual0 .subVisual0_text  .subVisual0_desc{font-size:12px; text-align:right;
				position:absolute; right:5%; bottom:125px;}
			#subVisual0 .subVisual0_text  .subVisual0_desc em{font-size:15px; font-weight:700; color:#ccc;}
			#subVisual0 .subVisual0_text  .subVisual0_desc span{display:none;}
			#subVisual0 .subVisual0_text .textBtn{margin:120px auto 0; position:relative;}

			#underwearSectionWrap{margin-bottom:60px;}
			#underwearSection{width:300px;}
			#underwearSection div{width:300px; float:none;}
			#underwearSection div p{width:140px; height:195px; margin:0 0 0 20px; float:left;}
			#underwearSection div p:first-child{margin-left:0;}
			#underwearSection p a{font-size:12px;}
			#underwearSection p a strong{padding:10px 0 10px 6px;}
			#underwearSection div:after{content:""; display:block; clear:both;}
			#underwearSection .underwear_middle{width:300px;}
			#underwearSection .underwear_middle p{width:300px; height:400px; margin:20px 0;}
			#underwearSection .underwear_middle p a strong{font-size:16px;}
			#underwearSection .underwear_middle p a span{display:block; font-size:13px; padding:0 0 20px 6px;}
			
			#subVisual1Wrap{width:100%; height:160px; background-image:none; margin-bottom:60px; overflow:hidden; position:relative;}
			#subVisual1{width:200%; height:100%; position:static;}
			#subVisual1Btn{width:36px; height:14px; position:absolute; left:50%; margin-left:-18px; bottom:2px;}
			#subVisual1Btn a{display:block; width:14px; height:14px; margin-right:8px; border-radius:7px; background-color:rgba(200,200,200,.3);
				float:left;}
			#subVisual1Btn .on{background-color:rgba(200,200,200,.9);}
			#subVisual1Btn a:last-child{margin-right:0;}
			#subVisual1 h3{padding-bottom:0; font-size:15px; margin-bottom:10px;}
			#subVisual1 h3:before, #subVisual1 h3:after{display:none;}
		
			#subVisual1 .textBtn{width:120px; height:30px; margin-top:7px;}
			#subVisual1 .textBtn a{display:block; width:118px; height:28px; line-height:28px; border-radius:15px;
				font-size:12px; transition:border-color .3s linear;}
			#subVisual1 #monthlyEvent .textBtn a:hover, #subVisual1 .textBtn a:hover{border-color:#fff;}
			#subVisual1 .textBtn a span{display:none;}
			
			#onlineEvent, #monthlyEvent{width:50%; height:100%; background-color:#292836;}
			#onlineEvent .onlineEvent_text{width:60%; float:left;}
			#onlineEvent .onlineEvent_text h3{padding-top:15px; text-align:left; text-indent:10px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc{font-size:13px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc strong{font-size:17px;}
			#onlineEvent .onlineEvent_text .onlineEvent_desc .color{color:#459BC1;}
			#onlineEvent .onlineEvent_text .textBtn{margin-left:0; float:right;}
			#onlineEvent .onlineEvent_img{width:40%; height:110px; margin:20px 0; position:static; float:left;}
			#onlineEvent .onlineEvent_img img{display:block; width:110px; margin:18px auto;}

			#monthlyEvent{background-color:#CD3838;}
			#monthlyEvent .monthlyEvent_text{width:60%; float:left; padding-left:0;}
			#monthlyEvent .monthlyEvent_text h3{text-align:left; padding-top:15px; text-indent:10px;}
			#monthlyEvent .monthlyEvent_text .monthlyEvent_desc{width:140px; float:right; font-size:13px; text-align:right;}
			#monthlyEvent .monthlyEvent_text .monthlyEvent_desc strong{font-size:15px;}
			#monthlyEvent .monthlyEvent_text .textBtn{float:right; clear:both;}
			#monthlyEvent .monthlyEvent_img{width:40%; height:110px; margin:20px 0; position:static; float:left;}
			#monthlyEvent .monthlyEvent_img img{display:block; width:110px; margin:20px auto;}
			
			#kidsSectionWrap, #editorialWrap, #subVisual2Wrap{display:none;}

			#mobGolfWrap{display:block; width:100%; margin-bottom:50px;}
			#mobGolfTitle{width:100%; height:200px; background-image:url("img/golf_mob_bg.png"); background-repeat:no-repeat;
				background-size:cover; text-align:center; color:#fff; font-size:20px; overflow:hidden; margin-bottom:10px;}
			#mobGolfTitle h4{font-weight:400; margin:50px 0 20px;}
			#mobGolfTitle a{font-size:12px; color:#aaa; display:block; width:100px; height:30px;
				line-height:30px; border:1px solid #777; margin:0 auto; transition:all .4s linear;}
			#mobGolfTitle a:hover, #mobGolfTitle a:focus{background-color:rgba(0,0,0,.8); color:#fff; border-color:#fff;}
			#mobGolfBtn{width:95%; margin:0 auto 20px;}
			#mobGolfBtn span{display:block; width:12px; height:12px; padding:8px 6px; float:right; cursor:pointer;}
			#mobGolfBtn span img{width:100%; height:100%;}
			#mobGolfBtn span:first-child{margin-left:5px;}
			#mobGolfBtn:after{content:""; display:block; clear:both;}
			#mobGolfListArea{width:300px; margin:0 auto; overflow:hidden;}
			#mobGolfList{width:900px;}
			#mobGolfList ul{width:300px; float:left;}
			#mobGolfList li{width:100px; height:120px; float:left;}
			#mobGolfList li a{display:block; width:90px; height:100px; margin:0 auto 20px;}
			#mobGolfList li a .mobGolfImg{display:block; width:80px; height:80px; border-radius:40px; border:2px solid #fff;
				box-shadow:0 0 5px rgba(0,0,0,.1); margin:0 auto 3px;}
			#mobGolfList li a .mobGolfImg img{width:100%; border-radius:40px;}
			#mobGolfList li a .mobGolfText{display:block; width:100%; height:13px; line-height:16px; font-size:11px; color:#555; text-align:center;}
			#mobGolfList:after, #mobGolfList ul:after{content:""; display:block; clear:both;}

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
  <script>
	$(document).ready(function(){
		$("#bestSection .bestListProduct ol:not(:first)").hide();
		$("#bestSection .cateImg span:not(:first)").hide();
		$("#bestSection .bestListCate li a").bind("click focusin",function(){
			$("#bestSection .bestListCate li a").removeClass("on");
			$(this).addClass("on");
			$("#bestSection .bestListProduct ol").hide();
			$($(this).attr("href")).show();
			$("#bestSection .cateImg span").hide();
			return false;
		});
		$("#bestSection .bestListCate li:first a").bind("click focusin",function(){
			//클릭했을때 해당하는 cateImg만 보이기
			$("#bestSection .cateImg span:first").show();
		});
		$("#bestSection .bestListCate li:eq(1) a").bind("click focusin",function(){
			$("#bestSection .cateImg span:eq(1)").show();
		});
		$("#bestSection .bestListCate li:eq(2) a").bind("click focusin",function(){
			$("#bestSection .cateImg span:eq(2)").show();
		});
		$("#bestSection .bestListCate li:last a").bind("click focusin",function(){
			$("#bestSection .cateImg span:last").show();
		});
		$("#filaSection .filaList li").bind("mouseover focusin",function(){
			$(this).siblings().children().children(".black_bg").css({"display":"block"});
			$(this).siblings().children().children("h4").css({"color":"rgba(0,0,0,.5)","borderColor":"rgba(0,0,0,.5)"});
		}).bind("mouseout focusout",function(){
			$("#filaSection .filaList > li").css({"width":"300px"});
			$("#filaSection .filaList li .black_bg").css({"display":"none"});
			$("#filaSection .filaList li h4").css({"color":"#fff","borderColor":"#fff"});
		});
		$("#underwearSection div p a").click(function(){
			$("#underwearSection .middle a img").attr("src",$(this).children("img").attr("src"));
			$("#underwearSection .middle a strong").text($(this).children("strong").text());
		});

		/*
			kidsSection 의 li a에 마우스 올리면 bg가 따라 움직이기
		*/
		$("#kidsSection ul .kidsProduct").bind("mouseover focus",function(){
			$("#kidsSection .bg").css({
				"width":$(this).width(), "height":$(this).height(),"lineHeight":$(this).height()+"px",
				"left":$(this).offset().left, "top":$(this).offset().top
			}).text($(this).attr("title"));
		});
		$("#kidsSection .bg").bind("mouseout blur",function(){
			$(this).css({"width":0,"height":0}).text("");
		});
		// subVisual1Btn 클릭하면 옆으로 넘어가기
		var sVBtn0=$("#subVisual1Wrap #subVisual1Btn a:first");
		var sVBtn1=$("#subVisual1Wrap #subVisual1Btn a:last");
		sVBtn0.click(function(){
			$("#subVisual1Btn a").removeClass("on");
			$(this).addClass("on");
			$("#subVisual1").animate({"marginLeft":0},300,"linear");
		});
		sVBtn1.click(function(){
			$("#subVisual1Btn a").removeClass("on");
			$(this).addClass("on");
			$("#subVisual1").animate({"marginLeft":"-100%"},300,"linear");
		});
		/*모바일 버전에서 golf버튼 클릭하면 화면 넘어가기(슬라이딩구현)*/
		var mGnext=$("#mobGolfBtn .mobGolfNextBtn");
		var mGprev=$("#mobGolfBtn .mobGolfPrevBtn");
		$("#mobGolfList").prepend($("#mobGolfList .mobGolfScene:last")).css({"marginLeft":"-100%"});
		mGnext.click(function(){
			$("#mobGolfList:not(:animated)").animate({"marginLeft":"-=100%"},300,"swing",function(){
				$("#mobGolfList").append($("#mobGolfList .mobGolfScene:first")).css({"marginLeft":"-100%"});
			});
		});
		mGprev.click(function(){
			$("#mobGolfList:not(:animated)").animate({"marginLeft":"+=100%"},300,"swing",function(){
				$("#mobGolfList").prepend($("#mobGolfList .mobGolfScene:last")).css({"marginLeft":"-100%"});
			});
		});
	});
  </script>
 </head>
 <body>
	<!--스킵네비게이션-->
	<div id="skipNav">
		<p><a href="#bestSectionWrap" title="베스트영역">베스트 영역 바로가기</a></p>
		<p><a href="#recommendSectionWrap" title="추천영역">추천 영역 바로가기</a></p>
		<p><a href="#filaSectionWrap" title="FILA메뉴영역">FILA 메뉴 영역 바로가기</a></p>
		<p><a href="#subVisual0Wrap" title="서브비쥬얼0영역">첫번째 서브비쥬얼 영역 바로가기</a></p>
		<p><a href="#underwearSectionWrap" title="속옷영역">속옷 영역 바로가기</a></p>
		<p><a href="#subVisual1Wrap" title="서브비쥬얼1영역">두번째 서브비쥬얼 영역 바로가기</a></p>
		<p><a href="#kidsSectionWrap" title="키즈영역">키즈 영역 바로가기</a></p>
		<p><a href="#subVisual2Wrap" title="서브비쥬얼2영역">세번째 서브비쥬얼 영역 바로가기</a></p>
		<p><a href="#nowSectionWrap" title="기획전영역">기획전 영역 바로가기</a></p>
		<p><a href="#styleSectionWrap" title="인스타그램영역">인스타그램 영역 바로가기</a></p>
	</div>
	<!--리모콘 영역-->
	<div id="remoteCon">
		<b>Controler</b>
		<ul>
			<li><a href="#" title="fila">FILA</a></li>
			<li><a href="#" title="filaunderwear">Underwear</a></li>
			<li><a href="#" title="filakids">Kids</a></li>
			<li><a href="#" title="filanow">FILA Now</a></li>
		</ul>
	</div>
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
							<a href="./sub/login.php" title="login">LOGIN</a>
<?php }else{ ?>
							<a href="./sub/logout.php" title="logout" style="color:#999; text-decoration:underline;">LOGOUT</a>
<?php } ?>
						</li>
						<li><a href="./sub/fila_join.php" title="join">JOIN</a></li>
						<li><a href="#none" title="cart">
								<span class="cart">CART</span>
								<i><img src="img/shopping_cart.png" alt="쇼핑카트이미지"/></i>
							</a></li>
						<li class="mypageArea">
							<a href="#none" title="mypage">
								MY PAGE <span>▼</span>
							</a>
							<ul>
								<li><a href="#none" title="구매정보">구매정보</a></li>
								<li><a href="#none" title="배송조회">배송조회</a></li>
								<li><a href="#none" title="개인정보">개인정보</a></li>
								<li><a href="sub/fila_qna.php" title="개인문의">1:1 문의</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="logo_searchArea">
					<div id="fila_logo">
						<a href="./index.php" title="FILA">
							<img src="img/fila_logo.jpg" alt="휠라로고이미지"/>
						</a>
					</div>
					<div id="searchArea">
						<h2>검색영역</h2>
						<form action="#none" method="get">
							<fieldset>
								<legend>검색</legend>
								<p class="input">
									<input id="search" type="text" name="search" title="검색" placeholder="Search..."/>
									<input id="searchButton" type="image" name="searchButton" src="img/search.png" alt="돋보기이미지" title="돋보기이미지"/>
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
												<a href="./sub/fila_intro.html" title="about fila">about fila</a>
											</li>
											<li>
												<a href="./sub/fila_history.html" title="history">history</a>
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
														<a href="./sub/fila_mensclothes.html" title="남성의류">men's clothes</a>
													</li>
													<li>
														<a href="./sub/fila_mensshoes.html" title="남성신발">men's shoes</a>
													</li>
													<li>
														<a href="./sub/fila_mensbag.html" title="남성가방">men's bag</a>
													</li>
													<li>
														<a href="./sub/fila_mensacc.html" title="남성악세서리">men's acc</a>
													</li>
												</ul>
											</div>
											<div class="subMenu_visualArea">
												<div class="subMenu_visaul0">
													<p class="subMenu_visual_img">
														<a href="#none" title="rgbTheStreet">
															<img src="img/subMenu_men_visual0.jpg" alt="남성서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="filax10cc">
															<img src="img/subMenu_men_visual1.jpg" alt="남성서브비쥬얼이미지1"/>
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
														<a href="./sub/fila_womensclothes.html" title="여성의류">women's clothes</a>
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
															<img src="img/subMenu_women_visual0.jpg" alt="여성서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="rgbthestreet">
															<img src="img/subMenu_women_visual1.jpg" alt="여성서브비쥬얼이미지1"/>
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
															<img src="img/subMenu_boys_visual0.jpg" alt="남아서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="wonniefriends">
															<img src="img/subMenu_boys_visual1.jpg" alt="남아서브비쥬얼이미지1"/>
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
															<img src="img/subMenu_girls_visual0.jpg" alt="여아서브비쥬얼이미지0"/>
														</a>
													</p>
												</div>
												<div class="subMenu_visaul1">
													<p class="subMenu_visual_img">
														<a href="#none" title="snackTime">
															<img src="img/subMenu_girls_visual1.jpg" alt="여아서브비쥬얼이미지1"/>
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
												<a href="./sub/fila_collabo.html" title="collabo">
													<span class="brandImg"><img src="img/collabo_subImg.jpg" alt="서브네비이미지0"/></span>
													<span class="brandText">collabo</span>
												</a>
											</li>
											<li>
												<a href="./sub/fila_heritage.html" title="heritage">
													<span class="brandImg"><img src="img/heritage_subImg.jpg" alt="서브네비이미지1"/></span>
													<span class="brandText">heritage</span></a>
											</li>
											<li>
												<a href="./sub/fila_golf.html" title="golf">
													<span class="brandImg"><img src="img/golf_subImg.jpg" alt="서브네비이미지2"/></span>
													<span class="brandText">golf</span></a>
											</li>
											<li>
												<a href="./sub/fila_kids.html" title="kids">
													<span class="brandImg"><img src="img/kids_subImg.jpg" alt="서브네비이미지3"/></span>
													<span class="brandText">kids</span>
												</a>
											</li>
											<li>
												<a href="./sub/fila_underwear.html" title="underwear">
													<span class="brandImg"><img src="img/underwear_subImg.jpg" alt="서브네비이미지4"/></span>
													<span class="brandText">underwear</span>
												</a>
											</li>
											<li>
												<a href="./sub/fila_milan.html" title="milan">
													<span class="brandImg"><img src="img/milan_subImg.jpg" alt="서브네비이미지5"/></span>
													<span class="brandText">milan</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</li>
						<li class="mainCate">
							<a class="mainCate" href="sub/fila_lookbook.html" title="lookbook">LOOKBOOK</a>
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
								<a href="./sub/login.php" title="login">LOGIN</a>
<?php }else{ ?>
								<a href="./sub/logout.php" title="logout" style="color:#777;">LOGOUT</a>
<?php } ?>
							</p>
							<p>
								<a href="./sub/fila_qna.php" title="개인문의">1:1 문의</a>
							</p>
						</div>
					</li>
					<li>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="fila">fila</a>
						<div class="mobSubNav">
							<p>
								<a href="./sub/fila_intro.html" title="aboutFila">about fila</a>
							</p>
							<p>
								<a href="./sub/fila_history.html" title="history">history</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="men">MEN</a>
						<div class="mobSubNav">
							<p>
								<a href="./sub/fila_mensclothes.html" title="남성의류">men's clothes</a>
							</p>
							<p>
								<a href="./sub/fila_mensshoes.html" title="남성신발">men's shoes</a>
							</p>
							<p>
								<a href="./sub/fila_mensbag.html" title="남성가방">men's bag</a>
							</p>
							<p>
								<a href="./sub/fila_mensacc.html" title="남성악세서리">men's acc</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="#none" title="women">WOMEN</a>
						<div class="mobSubNav">
							<p>
								<a href="./sub/fila_womensclothes.html" title="여성의류">women's clothes</a>
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
								<a href="./sub/fila_collabo.html" title="collabo">collabo</a>
							</p>
							<p>
								<a href="./sub/fila_heritage.html" title="heritage">heritage</a>
							</p>
							<p>
								<a href="./sub/fila_golf.html" title="golf">golf</a>
							</p>
							<p>
								<a href="./sub/fila_kids.html" title="kids">kids</a>
							</p>
							<p>
								<a href="./sub/fila_underwear.html" title="underwear">underwear</a>
							</p>
							<p>
								<a href="./sub/fila_milan.html" title="milan">milan</a>
							</p>
						</div>
					</li>
					<li>
						<a class="mobNavTitle" href="./sub/fila_lookbook.html" title="lookbook">LOOKBOOK</a>
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
					<a href="./index.php" title="FILA"><img src="img/fila_logo.png" alt="휠라로고"/></a>
				</div>
				<p id="searchMob">
					<a href="#none" title="검색"><img src="img/search_mob.png" alt="검색이미지"/></a>
				</p>
				<p id="my_shopping">
					<a href="#none" title="shopping"><img src="img/shopping_bag.png" alt="쇼핑백이미지"/></a>
				</p>
			</div>
		</div>
		<div id="container">
			<h2>비쥬얼 및 섹션 영역</h2>
			<div id="visualWrap">
				<section id="visual">
					<h2>비쥬얼 영역</h2>
					<div id="screen">
						<ul id="film">
							<li class="scene">
								<a href="#none" title="rgb_theStreet">
									<img src="img/visual0.jpg" alt="비쥬얼이미지0"/>
								</a>
							</li>
							<li class="scene">
								<a href="#none" title="19fwcollection">
									<img src="img/visual1.jpg" alt="비쥬얼이미지1"/>
								</a>
							</li>
							<li class="scene">
								<a href="#none" title="filaOntheNYCStreet">
									<img src="img/visual2.jpg" alt="비쥬얼이미지2"/>
								</a>
							</li>
							<li class="scene">
								<a href="#none" title="checkerBoard">
									<img src="img/visual3.jpg" alt="비쥬얼이미지3"/>
								</a>
							</li>
						</ul>
						<div id="btn">
							<ul>
								<li><a href="#btn0" title="btn0"><span>0</span></a></li>
								<li><a href="#btn1" title="btn1"><span>1</span></a></li>
								<li><a href="#btn2" title="btn2"><span>2</span></a></li>
								<li><a href="#btn3" title="btn3"><span>3</span></a></li>
							</ul>
						</div>
						<div id="btnArrow">
							<p class="prev" title="이전">
							</p>
							<p class="next" title="다음">
							</p>
						</div>
					</div>
				</section>
			</div>
			<div id="filaWrap">
				<h2>fila 영역</h2>
				<div id="bestSectionWrap">
					<div id="bestSection">
						<h3>best <span class="gray">seller</span></h3>
						<div class="bestList">
							<ul class="bestListCate">
								<li>
									<a class="on" href="#bestTab0" title="men">men</a>
								</li>
								<li>
									<a href="#bestTab1" title="women">women</a>
								</li>
								<li>
									<a href="#bestTab2" title="boys">boys</a>
								</li>
								<li class="last">
									<a href="#bestTab3" title="girls">girls</a>
								</li>
							</ul>
							<div class="bestListProduct">
								<ol id="bestTab0">
									<li class="topList">
										<div>
											<p class="rank">1</p>
											<p class="productImg">
												<a href="./sub/fila_productBest1_shop.html" title="FILA크레마_보아_플리스">
													<img src="img/bestM0.jpg" alt="FILA크레마_보아_플리스"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													unisex
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBest1_shop.html" title="FILA크레마_보아_플리스">
														FILA 크레마 보아 플리스
													</a>
												</p>
												<p class="price">
													69,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">2</p>
											<p class="productImg">
												<a href="./sub/fila_productBest2_shop.html" title="오크먼트TR">
													<img src="img/bestM1.jpg" alt="오크먼트TR"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													unisex
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBest2_shop.html" title="오크먼트TR">
														오크먼트 TR
													</a>
												</p>
												<p class="price">
													69,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">3</p>
											<p class="productImg">
												<a href="./sub/fila_productBest3_shop.html" title="ray_tracer">
													<img src="img/bestM2.jpg" alt="ray_tracer"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													unisex
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBest3_shop.html" title="ray_tracer">
														RAY TRACER
													</a>
												</p>
												<p class="price">
													69,000원
												</p>
											</div>
										</div>
									</li>
								</ol>
								<ol id="bestTab1">
									<li class="topList">
										<div>
											<p class="rank">1</p>
											<p class="productImg">
												<a href="./sub/fila_productBest1_shop.html" title="FILA크레마_보아_플리스">
													<img src="img/bestW0.jpg" alt="FILA크레마_보아_플리스"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													unisex
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBest1_shop.html" title="FILA크레마_보아_플리스">
														FILA 크레마 보아 플리스
													</a>
												</p>
												<p class="price">
													69,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">2</p>
											<p class="productImg">
												<a href="./sub/fila_productBestW2_shop.html" title="에이스롱다운VER2.0">
													<img src="img/bestWo1.jpg" alt="에이스롱다운VER2.0"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													unisex
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestW2_shop.html" title="에이스롱다운VER2.0">
														에이스 롱다운 VER 2.0
													</a>
												</p>
												<p class="price">
													279,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">3</p>
											<p class="productImg">
												<a href="./sub/fila_productBest3_shop.html" title="ray_tracer">
													<img src="img/bestW2.jpg" alt="ray_tracer"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													unisex
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBest3_shop.html" title="ray_tracer">
														RAY TRACER
													</a>
												</p>
												<p class="price">
													69,000원
												</p>
											</div>
										</div>
									</li>
								</ol>
								<ol id="bestTab2">
									<li class="topList">
										<div>
											<p class="rank">1</p>
											<p class="productImg">
												<a href="./sub/fila_productBestB1_shop.html" title="에이스_롱구스다운_자켓">
													<img src="img/bestB0.jpg" alt="에이스_롱구스다운_자켓"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													kids
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestB1_shop.html" title="에이스_롱구스다운_자켓">
														에이스 롱 구스다운 자켓
													</a>
												</p>
												<p class="price">
													169,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">2</p>
											<p class="productImg">
												<a href="./sub/fila_productBestB2_shop.html" title="디스럽터2테이피테잎KD">
													<img src="img/bestB1.jpg" alt="디스럽터2테이피테잎KD"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													kids
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestB2_shop.html" title="디스럽터2테이피테잎KD">
														디스럽터 2 테이피 테잎 KD
													</a>
												</p>
												<p class="price">
													59,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">3</p>
											<p class="productImg">
												<a href="./sub/fila_productBestB3_shop.html" title="휠라꾸미">
													<img src="img/bestB2.jpg" alt="휠라꾸미"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													kids
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestB3_shop.html" title="휠라꾸미">
														휠라 꾸미
													</a>
												</p>
												<p class="price">
													49,000원
												</p>
											</div>
										</div>
									</li>
								</ol>
								<ol id="bestTab3">
									<li class="topList">
										<div>
											<p class="rank">1</p>
											<p class="productImg">
												<a href="./sub/fila_productBestG1_shop.html" title="에이스_롱구스다운_자켓">
													<img src="img/bestG0.jpg" alt="에이스_롱구스다운_자켓"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													kids
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestG1_shop.html" title="에이스_롱구스다운_자켓">
														에이스 롱 구스다운 자켓
													</a>
												</p>
												<p class="price">
													169,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">2</p>
											<p class="productImg">
												<a href="./sub/fila_productBestG2_shop.html" title="디스럽터2KD">
													<img src="img/bestG1.jpg" alt="디스럽터2KD"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													kids
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestG2_shop.html" title="디스럽터2KD">
														디스럽터 2 KD
													</a>
												</p>
												<p class="price">
													59,000원
												</p>
											</div>
										</div>
									</li>
									<li>
										<div>
											<p class="rank">3</p>
											<p class="productImg">
												<a href="./sub/fila_productBestG3_shop.html" title="UNO_구스다운_조끼">
													<img src="img/bestG2.jpg" alt="UNO_구스다운_조끼"/>
												</a>
											</p>
											<div class="desc">
												<p class="type">
													kids
												</p>
												<p class="product_name">
													<a href="./sub/fila_productBestG3_shop.html" title="UNO_구스다운_조끼">
														UNO 구스다운 조끼
													</a>
												</p>
												<p class="price">
													59,000원
												</p>
											</div>
										</div>
									</li>
								</ol>
							</div>
						</div>
						<p class="cateImg">
							<span><img src="img/men_main.jpg" alt="men카테고리이미지"/></span>
							<span><img src="img/women_main.jpg" alt="women카테고리이미지"/></span>
							<span><img src="img/boys_main.jpg" alt="boys카테고리이미지"/></span>
							<span><img src="img/girls_main.jpg" alt="girls카테고리이미지"/></span>
						</p>
					</div>
				</div>
				<div id="recommendSectionWrap">
					<div id="recommendSection">
						<h3>recommend</h3>
						<div class="recList">
							<ul>
								<li class="rec1">
									<a href="./sub/fila_product_oakment.html" title="오크먼트TR">
										<span class="recList_img">
											<img src="img/FS1RIB3022X_BEG_box.png" alt="오크먼트TR"/>
										</span>
										<span class="recList_text">
											<strong>오크먼트 TR</strong>
											<em>
												FILA의 NEW<br/>
												어글리 스니커즈
											</em>
											<span class="recList_tag">HOT</span>
										</span>
									</a>
								</li>
								<li class="rec2">
									<a href="./sub/fila_product_raytracer.html" title="ray_tracer">
										<span class="recList_img">
											<img src="img/FS1SIB1460X_BEG_box.png" alt="ray_tracer"/>
										</span>
										<span class="recList_text">
											<strong>RAY TRACER</strong>
											<em>
												러닝화의 기능이 결합된<br/>
												신개념의 '어글리 러닝화'
											</em>
											<span class="recList_tag">HOT</span>
										</span>
									</a>
								</li>
								<li class="rec3">
									<a href="./sub/fila_product_linearboa.html" title="리니어보아후드집업">
										<span class="recList_img">
											<img src="img/FE2POB6106X_CRM_box.png" alt="리니어보아후드집업"/>
										</span>
										<span class="recList_text">
											<strong>리니어 보아 후드 집업</strong>
											<em>
												보아 소재를 적용한<br/>
												FILA의 후드 집업
											</em>
											<span class="recList_tag">HOT</span>
										</span>
									</a>
								</li>
								<li class="rec4">
									<a href="./sub/fila_product_rayscr.html" title="휠라레이스크립트">
										<span class="recList_img">
											<img src="img/FS1SIB1394X_BEG_box.png" alt="휠라레이스크립트"/>
										</span>
										<span class="recList_text">
											<strong>휠라 레이 스크립트</strong>
											<em>
												독특한 FILA 로고체의<br/>
												FILA SCRIPT 시리즈
											</em>
											<span class="recList_tag">HOT</span>
										</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="filaSectionWrap">
					<div id="filaSection">
						<h3>fila</h3>
						<div class="filaList">
							<ul>
								<li>
									<div class="filaList_cate">
										<h4>clothes</h4>
										<p class="filaList_img">
											<img src="img/cate_clothes.jpg" alt="clothes이미지"/>
										</p>
										<p class="black_bg">
										</p>
										<ol class="filaList_subCate">
											<li><a href="./sub/fila_mensclothes.html" title="men">men</a></li>
											<li><a href="./sub/fila_womensclothes.html" title="women">women</a></li>
											<li><a href="#none" title="boy">boy</a></li>
											<li><a href="#none" title="girl">girl</a></li>
										</ol>
									</div>
								</li>
								<li>
									<div class="filaList_cate">
										<h4>shoes</h4>
										<p class="filaList_img">
											<img src="img/cate_shoes.jpg" alt="shoes이미지"/>
										</p>
										<p class="black_bg">
										</p>
										<ol class="filaList_subCate">
											<li><a href="./sub/fila_mensshoes.html" title="men">men</a></li>
											<li><a href="#none" title="women">women</a></li>
											<li><a href="#none" title="boy">boy</a></li>
											<li><a href="#none" title="girl">girl</a></li>
										</ol>
									</div>
								</li>
								<li>
									<div class="filaList_cate">
										<h4>bag</h4>
										<p class="filaList_img">
											<img src="img/cate_bag.jpg" alt="bag이미지"/>
										</p>
										<p class="black_bg">
										</p>
										<ol class="filaList_subCate">
											<li><a href="./sub/fila_mensbag.html" title="men">men</a></li>
											<li><a href="#none" title="women">women</a></li>
											<li><a href="#none" title="boy">boy</a></li>
											<li><a href="#none" title="girl">girl</a></li>
										</ol>
									</div>
								</li>
								<li>
									<div class="filaList_cate">
										<h4>acc</h4>
										<p class="filaList_img">
											<img src="img/cate_acc.jpg" alt="accessory이미지"/>
										</p>
										<p class="black_bg">
										</p>
										<ol class="filaList_subCate">
											<li><a href="./sub/fila_mensacc.html" title="men">men</a></li>
											<li><a href="#none" title="women">women</a></li>
											<li><a href="#none" title="boy">boy</a></li>
											<li><a href="#none" title="girl">girl</a></li>
										</ol>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div id="subVisual0Wrap">
				<h2>서브비쥬얼0영역</h2>
				<div id="subVisual0">
					<div class="subVisual0_img">
						<p class="h0">
							<img src="img/subvisual0_0.png" alt="운동화회전이미지0"/>
						</p>
						<p class="h1">
							<img src="img/subvisual0_1.png" alt="운동화회전이미지1"/>
						</p>
						<p class="h2">
							<img src="img/subvisual0_2.png" alt="운동화회전이미지2"/>
						</p>
						<p class="h3">
							<img src="img/subvisual0_3.png" alt="운동화회전이미지3"/>
						</p>
						<p class="h4">
							<img src="img/subvisual0_4.png" alt="운동화회전이미지4"/>
						</p>
						<p class="h5">
							<img src="img/subvisual0_5.png" alt="운동화회전이미지5"/>
						</p>
						<p class="h6">
							<img src="img/subvisual0_6.png" alt="운동화회전이미지6"/>
						</p>
						<p class="hmain">
							<img src="img/subvisual0_main.png" alt="운동화회전이미지_main"/>
						</p>
						<p class="h7">
							<img src="img/subvisual0_7.png" alt="운동화회전이미지7"/>
						</p>
						<p class="h8">
							<img src="img/subvisual0_8.png" alt="운동화회전이미지8"/>
						</p>
						<p class="h9">
							<img src="img/subvisual0_9.png" alt="운동화회전이미지9"/>
						</p>
						<p class="h10">
							<img src="img/subvisual0_10.png" alt="운동화회전이미지10"/>
						</p>
						<p class="h11">
							<img src="img/subvisual0_11.png" alt="운동화회전이미지11"/>
						</p>
						<p class="h12">
							<img src="img/subvisual0_12.png" alt="운동화회전이미지12"/>
						</p>
						<p class="h13">
							<img src="img/subvisual0_13.png" alt="운동화회전이미지13"/>
						</p>
						<p class="h14">
							<img src="img/subvisual0_14.png" alt="운동화회전이미지14"/>
						</p>
						<p class="h15">
							<img src="img/subvisual0_15.png" alt="운동화회전이미지15"/>
						</p>
						<p class="h16">
							<img src="img/subvisual0_16.png" alt="운동화회전이미지16"/>
						</p>
					</div>
					<div class="subVisual0_text">
						<h3><strong>disruptor 2</strong></h3>
						<p class="subVisual0_desc">
							<em>FILA의 대표적인 시그니쳐 아이템</em><br/><br/>
							1998년 처음 탄생한 FILA CROSS TRAINING 라인<br/>
							DISRUPTOR를 복각하여 출시한 DISRUPTOR 2<br/>
							<span>
								FILA를 상징하는 FLAG 패턴과 독특한 측면 디자인의 조화<br/>
								FILA만이 가지고 있는 헤리티지 아이코틱한<br/>
								톱니모양의 오버솔 디자인을 만나보세요
							</span>
						</p>
						<p class="textBtn"><!--서브비쥬얼0,1,2영역 공통-->
							<a href="#none" title="자세히보러가기">
								자세히 보러가기
							</a>
						</p>
					</div>
				</div>
			</div>
			<div id="underwearSectionWrap">
				<h2>underwear영역</h2>
				<div id="underwearSection">
					<h3>underwear</h3>
					<div>
						<p>
							<a href="#none" title="newblack_underwear">
								<img src="img/underwear_01.png" alt="newblack_underwear_이미지"/>
								<strong>NEW BLACK UNDERWEAR</strong>
							</a>
						</p>
						<p>
							<a href="#none" title="outfitme_underwear">
								<img src="img/underwear_02.png" alt="outfitme_underwear_이미지"/>
								<strong>OUTFIT ME UNDERWEAR</strong>
							</a>
						</p>
					</div>
					<div class="underwear_middle">
						<p class="middle">
							<a href="#none" title="underwear보러가기">
								<img src="img/underwear_main.png" alt="kissme_underwear_이미지"/>
								<strong>KISS ME UNDERWEAR</strong>
								<span>
									FILA의 헤리티지 감성을 담은<br/>
									FILA UNDERWEAR SERIES
								</span>
							</a>
						</p>
					</div>
					<div>
						<p>
							<a href="#none" title="realcolor_underwear">
								<img src="img/underwear_03.png" alt="realcolor_underwear_이미지"/>
								<strong>MY REAL COLOR UNDERWEAR</strong>
							</a>
						</p>
						<p>
							<a href="#none" title="infit_underwear">
								<img src="img/underwear_04.png" alt="infit_underwear_이미지"/>
								<strong>INFIT ME UNDERWEAR</strong>
							</a>
						</p>
					</div>
				</div>
			</div>
			<div id="subVisual1Wrap">
				<div id="subVisual1">
					<h2>서브비쥬얼1영역</h2>
					<div id="onlineEvent">
						<div class="onlineEvent_text">
							<h3>only online</h3>
							<p class="onlineEvent_desc">
								휠라 온라인 회원가입시<br/>
								<strong>6가지 혜택 <span class="color">EVENT</span></strong>
							</p>
							<p class="textBtn">
								<a href="#none" title="자세히보러가기">
									자세히 보러가기
									<span class="btnTop"></span>
									<span class="btnBottom"></span>
									<span class="btnRight"></span>
									<span class="btnLeft"></span>
								</a>
							</p>
						</div>
						<p class="onlineEvent_img">
							<img src="img/event_online.png" alt="온라인이벤트이미지"/>
						</p>
					</div>
					<div id="monthlyEvent">
						<div class="monthlyEvent_text">
							<h3>monthly event</h3>
							<p class="monthlyEvent_desc">
								10월 페이코이벤트<br/>
								<strong>PAYCO가 고객님께 드리는 혜택</strong>
							</p>
							<p class="textBtn">
								<a href="#none" title="자세히보러가기">
									자세히 보러가기
									<span class="btnTop"></span>
									<span class="btnBottom"></span>
									<span class="btnRight"></span>
									<span class="btnLeft"></span>
								</a>
							</p>
						</div>
						<p class="monthlyEvent_img">
							<img src="img/event_payco.png" alt="페이코이벤트이미지"/>
						</p>
					</div>
				</div>
				<p id="subVisual1Btn">
					<a class="on" href="#none" title="subVisual1구역"></a>
					<a href="#none" title="subVisual2구역"></a>
				</p>
			</div>
			<div id="kidsSectionWrap">
				<h2>kids영역</h2>
				<div id="kidsSection">
					<ul>
						<li class="kids_leftTop"><!--마진 바텀, 라이트 10px-->
							<a class="kidsProduct" href="#none" title="New-Tro KIDS ON THE STREET">
								<img src="img/kids_main.png" alt="kids_onthestreet이미지"/>
							</a>
						</li>
						<li class="kids_textArea">
							<h4>kids</h4>
							<p class="kids_desc">
								FILA만의 감성이 가득!<br/>
								FILA KIDS가 제안하는 KIDS LOOK
							</p>
							<p class="kids_subTitle">
								<b>FILA KIDS MUST ITEMS</b>
							</p>
						</li>
						<li>
							<a class="kidsProduct" href="#none" title="테이피 트레이닝 상의">
								<img src="img/kids1.jpg" alt="테이피트레이닝세트상의이미지"/>
							</a>
						</li>
						<li>
							<a class="kidsProduct" href="#none" title="F 아노락 자켓">
								<img src="img/kids2.jpg" alt="F아노락자켓이미지"/>
							</a>
						</li>
						<li class="kids_middle">
							<a class="kidsProduct" href="#none" title="fila X 바운스 로고 맨투맨">
								<img src="img/kids3.jpg" alt="filaX바운스_로고맨투맨이미지"/>
							</a>
						</li>
						<li class="plus">
							<a href="./sub/fila_kids.html" title="filakids더보기"><img src="img/plus_img.png" alt="플러스이미지"/></a>
						</li>
						<li class="kids_leftBottom">
							<a class="kidsProduct" href="#none" title="LET’S PLAY SKATE FOR FILA KIDS">
								<img src="img/kids_leftBottom.png" alt="kids_skate이미지"/>
							</a>
						</li>
						<li>
							<a class="kidsProduct" href="#none" title="케이지 TC KD">
								<img src="img/kids4.jpg" alt="케이지_TC_KD이미지"/>
							</a>
						</li>
						<li class="kids_titleImg">
							<img src="img/kids_title.png" alt="filakids타이틀이미지"/>
						</li>
						<li class="kids_decoImg">
							<img src="img/kids_deco.png" alt="filakids데코이미지"/> 
						</li>
					</ul>
					<p class="bg"></p>
				</div>
			</div>
			<div id="subVisual2Wrap">
				<h2>서브비쥬얼2영역</h2>
				<div id="subVisual2">
					<div id="filaGolf">
						<h4>FILA의 감성이 더해진 FILA GOLF WEAR</h4>
						<div id="golf_logo">
							<img src="img/golf_logo.png" alt="filaGolf로고이미지"/>
						</div>
						<p class="textBtn">
							<a href="./sub/fila_golf.html" title="자세히보러가기">
								자세히 보러가기
							</a>
						</p>
					</div>
				</div>
			</div>
			<div id="mobGolfWrap">
				<div id="mobGolfTitle">
					<h4>
						FILA의 감성이 더해진<br/>
						FILA GOLF WEAR
					</h4>
					<a href="./sub/fila_golf.html" title="FILAGOLF">바로가기</a>
				</div>
				<p id="mobGolfBtn">
					<span class="mobGolfNextBtn"><img src="img/right_button.png" alt="다음버튼이미지"/></span>
					<span class="mobGolfPrevBtn"><img src="img/left_button.png" alt="이전버튼이미지"/></span>
				</p>
				<div id="mobGolfListArea">
					<div id="mobGolfList">
						<ul class="mobGolfScene">
							<li>
								<a href="#none" title="스트레치바람막이">
									<span class="mobGolfImg">
										<img src="img/FG2WBB3303M_OWH.jpg" alt="골프웨어이미지0"/>
									</span>
									<span class="mobGolfText">
										스트레치바람막이
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="베이직스웨터">
									<span class="mobGolfImg">
										<img src="img/FG2STB3301F_ORE.jpg" alt="골프웨어이미지1"/>
									</span>
									<span class="mobGolfText">
										베이직 스웨터
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="큐롯">
									<span class="mobGolfImg">
										<img src="img/FG2CUB2203F_WHI.jpg" alt="골프웨어이미지2"/>
									</span>
									<span class="mobGolfText">
										큐롯
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="딤플">
									<span class="mobGolfImg">
										<img src="img/FG1SHA1042M_WSL.jpg" alt="골프웨어이미지3"/>
									</span>
									<span class="mobGolfText">
										DIMPLE
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="구스다운점퍼">
									<span class="mobGolfImg">
										<img src="img/FG2JPA4905M_OWH.jpg" alt="골프웨어이미지4"/>
									</span>
									<span class="mobGolfText">
										구스 다운 점퍼
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="오블리크">
									<span class="mobGolfImg">
										<img src="img/FG1SHB1031F_WPK.jpg" alt="골프웨어이미지5"/>
									</span>
									<span class="mobGolfText">
										오블리크
									</span>
								</a>
							</li>
						</ul>
						<ul class="mobGolfScene">
							<li>
								<a href="#none" title="스웻웻셔츠">
									<span class="mobGolfImg">
										<img src="img/FG2TLB1104F_RED.jpg" alt="골프웨어이미지6"/>
									</span>
									<span class="mobGolfText">
										스웻 웻 셔츠
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="주름큐롯">
									<span class="mobGolfImg">
										<img src="img/FG2CUA2201F_BLK.jpg" alt="골프웨어이미지7"/>
									</span>
									<span class="mobGolfText">
										주름 큐롯
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="하이브리드_다운조끼">
									<span class="mobGolfImg">
										<img src="img/FS2DVA4501M_BLK.jpg" alt="골프웨어이미지8"/>
									</span>
									<span class="mobGolfText">
										KNSB 하이브리드 다운조끼
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="스코어러보아">
									<span class="mobGolfImg">
										<img src="img/FG1SHB1001X_WNV.jpg" alt="골프웨어이미지9"/>
									</span>
									<span class="mobGolfText">
										스코어러 보아
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="스트레치팬츠">
									<span class="mobGolfImg">
										<img src="img/FG2PTA2202M_WHI.jpg" alt="골프웨어이미지10"/>
									</span>
									<span class="mobGolfText">
										스트레치 팬츠
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="스트레치바람막이">
									<span class="mobGolfImg">
										<img src="img/FG2WBB2032M_NAY.jpg" alt="골프웨어이미지11"/>
									</span>
									<span class="mobGolfText">
										스트레치 바람막이
									</span>
								</a>
							</li>
						</ul>
						<ul class="mobGolfScene">
							<li>
								<a href="#none" title="와인딩">
									<span class="mobGolfImg">
										<img src="img/FG1SHB1041F_WYL.jpg" alt="골프웨어이미지6"/>
									</span>
									<span class="mobGolfText">
										와인딩
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="베이스레이어">
									<span class="mobGolfImg">
										<img src="img/FG2IWA2204F_LBE.jpg" alt="골프웨어이미지7"/>
									</span>
									<span class="mobGolfText">
										베이스 레이어
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="우븐바람막이">
									<span class="mobGolfImg">
										<img src="img/FG2WBA2201F_RED.jpg" alt="골프웨어이미지8"/>
									</span>
									<span class="mobGolfText">
										우븐 바람막이
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="컬러블럭티셔츠">
									<span class="mobGolfImg">
										<img src="img/FG2TLB3303M_BLK.jpg" alt="골프웨어이미지9"/>
									</span>
									<span class="mobGolfText">
										컬러블럭 티셔츠
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="fieldog">
									<span class="mobGolfImg">
										<img src="img/FG1SHA1051X_WNR.jpg" alt="골프웨어이미지10"/>
									</span>
									<span class="mobGolfText">
										FIELD OG
									</span>
								</a>
							</li>
							<li>
								<a href="#none" title="체크큐롯">
									<span class="mobGolfImg">
										<img src="img/FG2CUA2252F_MIT.jpg" alt="골프웨어이미지11"/>
									</span>
									<span class="mobGolfText">
										체크 큐롯
									</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div id="editorialWrap">
				<h2>기획전, 인스타그램 영역</h2>
				<div id="nowSectionWrap">
					<div id="nowSection">
						<h3>fila <span class="gray">now</span></h3>
						<div class="nowMain">
							<p class="nowMain_img">
								<img src="img/now_main.jpg" alt="기획전메인이미지"/>
							</p>
							<p class="nowMain_text">
								<strong>FILA 기획전</strong>
								2020
							</p>
						</div>
						<div class="nowDesc">
							<ul>
								<li>
									<a href="#none" title="drifter_crema">
										<span class="nowDesc_img">
											<img src="img/now1.jpg" alt="drifter_crema이미지"/>
										</span>
										<em class="nowDesc_title">drifter crema</em>
										FILA의 스테디셀러인<br/>
										DRIFTER의 19FW FUR버전.
									</a>
								</li>
								<li>
									<a href="#none" title="heritage_studio_WX-100">
										<span class="nowDesc_img">
											<img src="img/now2.jpg" alt="heritage_studio_WX-100이미지"/>
										</span>
										<em class="nowDesc_title">
											heritage studio<br/>
											wx-100
										</em>
										1991년 출시된 FILA FX-100의<br/>
										High-Profile 버전으로<br/>
										2019년 새롭게 탄생한 WX-100
									</a>
								</li>
								<li>
									<a href="#none" title="WONNIE FRIENDS">
										<span class="nowDesc_img">
											<img src="img/now3.jpg" alt="WONNIE FRIENDS이미지"/>
										</span>
										<em class="nowDesc_title">
											WONNIE FRIENDS와<br/>
											가을 학기 준비~!
										</em>
										단 한달 간 진행되는 SPECIAL PRICE!<br/>
										득템찬스! 신상 워니프렌즈 파우치 50% ↓
									</a>
								</li>
								<li>
									<a href="#none" title="transpose">
										<span class="nowDesc_img">
											<img src="img/now4.jpg" alt="transpose이미지"/>
										</span>
										<em class="nowDesc_title">transpose</em>
										패셔너블한 필수 아이템
									</a>
								</li>
							</ul>
							<ul>
								<li>
									<a href="#none" title="newblackedition">
										<span class="nowDesc_img">
											<img src="img/now5.jpg" alt="newblackedition이미지"/>
										</span>
										<em class="nowDesc_title">new black edition</em>
										BLACK &amp; GREY로 구성된<br/>
										NEW BLACK EDITION을 만나보세요!
									</a>
								</li>
								<li>
									<a href="#none" title="new-tro_kidsonthestreet">
										<span class="nowDesc_img">
											<img src="img/now6.jpg" alt="new-tro_kidsonthestreet이미지"/>
										</span>
										<em class="nowDesc_title">new-tro kids on the street</em>
										FILA KIDS가 제안하는<br/>
										새로운 A/W 뉴트롤 룩을 만나보세요!
									</a>
								</li>
								<li>
									<a href="#none" title="disruptor2">
										<span class="nowDesc_img">
											<img src="img/now7.jpg" alt="disruptor2이미지"/>
										</span>
										<em class="nowDesc_title">
											disruptor 2<br/>
											new tapey tape
										</em>
										FILA의 대표적인 시그니쳐 아이템인<br/>
										디스럽터 2의 업그레이드 버전 
									</a>
								</li>
								<li>
									<a href="#none" title="logopack">
										<span class="nowDesc_img">
											<img src="img/now8.jpg" alt="logopack이미지"/>
										</span>
										<em class="nowDesc_title">logopack</em>
										FILA의 다양한 로고들을<br/>
										패턴화 시킨 LOGO PACK.
									</a>
								</li>
							</ul>
							<ul>
								<li>
									<a href="#none" title="fila_explore">
										<span class="nowDesc_img">
											<img src="img/now9.jpg" alt="fila_explore이미지"/>
										</span>
										<em class="nowDesc_title">fila explore</em>
										휠라가 출시했던 스키, 하이킹, 알파인,<br/>
										트래킹 컬렉션에서 영감을 얻어 재해석한<br/>
										휠라 익스플로어 컬렉션
									</a>
								</li>
								<li>
									<a href="#none" title="2019_fw_collection">
										<span class="nowDesc_img">
											<img src="img/now10.jpg" alt="2019_fw_collection이미지"/>
										</span>
										<em class="nowDesc_title">
											2019 fw collection<br/>
											online store exclusive
										</em>
										다가올 겨울을 준비하는<br/>
										ONLINE STORE EXCLUSIVE<br/>
										FILA의 트렌디한 컬렉션을 소개합니다.
									</a>
								</li>
								<li>
									<a href="#none" title="ontheNYCstreet">
										<span class="nowDesc_img">
											<img src="img/now11.jpg" alt="ontheNYCstreet이미지"/>
										</span>
										<em class="nowDesc_title">
											fila on the NYC street<br/>
											#2019 aw episode
										</em>
										새로운 스타일링과 실용도 높은<br/>
										아이템으로 다채롭게 구성된<br/>
										A/W 컬렉션을 놓치지 마세요!
									</a>
								</li>
								<li>
									<a href="#none" title="raytracer_pastelpack">
										<span class="nowDesc_img">
											<img src="img/now12.jpg" alt="raytracer_pastelpack이미지"/>
										</span>
										<em class="nowDesc_title">ray tracer pastel color pack</em>
										다가오는 가을 나에게 딱! 어울리는 신발
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="styleSectionWrap">
					<div id="styleSection">
						<h3>fila <span class="gray">style</span></h3>
						<ul>
							<li>
								<a href="#none" title="@fila_korea">
									<img src="img/fila_korea.png" alt="fila_korea이미지"/>
								</a>
								<p>
									<a href="#none" title="@fila_korea">
										@fila_korea
									</a>
								</p>
							</li>
							<li>
								<a href="#none" title="@filausa">
									<img src="img/fila_usa.png" alt="fila_usa이미지"/>
								</a>
								<p>
									<a href="#none" title="@fila_usa">
										@filausa
									</a>
								</p>
							</li>
							<li>
								<a href="#none" title="@filaeurope">
									<img src="img/fila_europe.png" alt="fila_europe이미지"/>
								</a>
								<p>
									<a href="#none" title="@filaeurope">
										@filaeurope
									</a>
								</p>
							</li>
							<li>
								<a href="#none" title="@filauk">
									<img src="img/fila_uk.png" alt="fila_uk이미지"/>
								</a>
								<p>
									<a href="#none" title="@filauk">
										@filauk
									</a>
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<p class="topBtn">
				<a href="#none" title="위로가기"><img src="img/topBtn.png" alt="위로가기버튼이미지"/></a>
			</p>
		</div>
		<footer id="footerWrap">
			<h2>푸터영역</h2>
			<div id="footer">
				<div class="top_footer">
					<div id="logo">
						<h2>fila푸터로고</h2>
						<img src="img/fila_footer_logo.png" alt="fila_logo이미지"/><span class="down">▼</span>
					</div>
					<p class="mobAddress">
						서울시 강동구 천호대로 1077 이스트센트럴타워 16층<br/>
						휠라코리아(주)<br/>
						대표이사 : 윤근창 <i>|</i> 법인명(상호명) 휠라코리아(주)<br/>
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
								<i><img src="img/icon_fb.png" alt="페이스북아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="인스타그램">
								<i><img src="img/icon_ins.png" alt="인스타그램아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="유튜브">
								<i><img src="img/icon_youtube.png" alt="유튜브아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="트위터">
								<i><img src="img/icon_twitter.png" alt="트위터아이콘이미지"/></i>
							</a>
						</li>
						<li>
							<a href="#none" title="카카오스토리">
								<i><img src="img/icon_kakao.png" alt="카카오스토리아이콘이미지"/></i>
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
		<img src="img/fila_content_info.jpg" alt="휠라컨텐츠보호안내이미지"/>
	</p>
 </body>
</html>
