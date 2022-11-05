<?php
	header("content-type:text/html; charset=utf-8");
	session_start();

	session_unset();
	session_destroy();

	echo "<script>alert('로그아웃되었습니다.');</script>";
	echo "<meta http-equiv='Refresh' content='1; url=../index.php'/>";
?>