<?php
	header("content-type:text/html; charset=utf-8");

	$conn=mysqli_connect("localhost","hyeongwoo","guddn1312130!#","hyeongwoo");
	if($conn->connect_error){
		echo $conn->connect_errorno;
		exit;
	}
	$conn->set_charset("utf8");
?>