<?php
	include "conn.php";

	//아이디와 이름 중복확인
	$username=$_POST['username'];
	$userid=$_POST['userid'];
	$userpw=$_POST['userpw'];
	$userphone=$_POST['userphone'];
	$useremail=$_POST['useremail'];
	$post=$_POST['post'];
	$addr=$_POST['addr'];

	$logSql="SELECT *FROM members WHERE username='$username' AND userid='$userid'";
	$logResult=mysqli_query($conn,$logSql);
	$row=mysqli_fetch_array($logResult,MYSQLI_ASSOC);
	if($row['username']==$username && $row['userid']==$userid){
		echo "<script>alert('이미 회원으로 등록되어 있습니다.\n아이디를 확인해주세요.'); history.go(-1);</script>";
	}
	else{
		if(!empty($username) && !empty($userid) && !empty($userpw) && !empty($userphone) && !empty($useremail) && !empty($post) && !empty($addr)){
			$sql="INSERT INTO members (username,userid,userpw,userphone,useremail,post,addr) VALUES ('$username','$userid','$userpw','$userphone','$useremail','$post','$addr')";
			mysqli_query($conn,$sql) or die(mysqli_error($conn));
			echo "<p style='text-align:center; color:#121725; width:290px; padding:50px 0; margin:30px auto 0; border:5px solid #121725; border-radius:10px;'>회원가입이 완료되었습니다.<br/>로그인해주세요.</p>";
			echo "<meta http-equiv='Refresh' content='1; url=login.php'/>";
		}
		else{
			echo "<script>alert('필수영역을 기입해주세요.'); history.go(-1);</script>";
		}
	}
	mysqli_close($conn);
?>