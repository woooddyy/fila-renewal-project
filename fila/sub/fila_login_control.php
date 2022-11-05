<?php
	include "conn.php";
	$userid=$_POST['userid'];
	$userpw=$_POST['userpw'];

	$sql="SELECT * FROM members WHERE userid='$userid' AND userpw='$userpw'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	if($row['userid']==$userid && $row['userpw']==$userpw){
		session_start();
		$_SESSION['userid']=$userid;
		echo "<script>alert('로그인이 되었습니다.');</script>";
	}
	else{
		echo "<script>alert('아이디와 비밀번호가 일치하지 않습니다. 다시 한번 확인해주세요.'); history.go(-1);</script>";
	}
	mysqli_close($conn);
	echo "<meta http-equiv='Refresh' content='1; url=../index.php'/>";
?>