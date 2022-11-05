<?php
	include "conn.php";
	$no=$_GET['no'];
	$userpw=$_POST['userpw'];
	$sql="SELECT userpw FROM qnaboard WHERE no='$no'";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	if($row['userpw']==$userpw){
		$delSql="DELETE FROM qnaboard WHERE no='$no'";
		mysqli_query($conn,$delSql);
		echo "<script>alert('삭제가 완료되었습니다.');</script>";
		echo "<meta http-equiv='Refresh' content='1; url=fila_qna.php'/>";
	}
	else{
		echo "<script>alert('비밀번호가 틀립니다. 다시 입력해주세요.'); history.go(-1);</script>";
	}
	mysqli_close($conn);
?>