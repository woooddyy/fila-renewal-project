<?php
	include "conn.php";

	$no=$_GET['no'];
	$title=$_POST['title'];
	$username=$_POST['username'];
	$userpw=$_POST['userpw'];
	$content=$_POST['content'];

	$pwSql="SELECT userpw FROM qnaboard WHERE no='$no'";
	$result=mysqli_query($conn,$pwSql);
	$row=mysqli_fetch_array($result);

	if($row['userpw']==$userpw){
		$sql="UPDATE qnaboard SET title='$title', username='$username', userpw='$userpw', content='$content' WHERE no='$no'";
		mysqli_query($conn,$sql);
		echo "<script>alert('수정되었습니다.');</script>";
		echo "<meta http-equiv='Refresh' content='1; url=fila_qna.php'/>";
	}
	else{
		echo "<script>alert('비밀번호를 확인해주세요'); history.go(-1);</script>";
	}
	mysqli_close($conn);
?>