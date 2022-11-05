<?php
	include "conn.php";
	
	$title=$_POST['title'];
	$username=$_POST['username'];
	$userpw=$_POST['userpw'];
	$content=$_POST['content'];

	$ipAddr=$_SERVER['REMOTE_ADDR'];

	if(!empty($title) && !empty($username) && !empty($userpw) && !empty($content)){
		$sql="INSERT INTO qnaboard (username,userpw,title,content,mdate,ip)
		VALUES ('$username','$userpw','$title','$content',now(),'$ipAddr')";
		mysqli_query($conn,$sql) or die(mysqli_error($conn));
		echo "<script>alert('문의글이 등록되었습니다.');</script>";
		echo "<meta http-equiv='Refresh' content='1; url=fila_qna.php'/>";
	}
	mysqli_close($conn);
?>