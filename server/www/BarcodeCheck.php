<?php
	header('content-type: text/html; charset=utf-8');

	// 데이터베이스 접속 문자열. (db위치, 유저이름, 비밀번호)
	$host = "localhost";
	$user = "dbadmin";
	$passwd = "raon_bin";
	$db = "raonbin";
	$con=new mysqli($host, $user, $passwd, $db);


	mysqli_query($con, 'SET NAMES utf8');

	$userBarcode = $_POST['userBarcode'];

	$sql = "select * from barcodeInfo where userBarcode = ?";
	$statement = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($statement, "s", $userBarcode);
	mysqli_stmt_execute($statement);

	mysqli_stmt_store_result($statement);
	mysqli_stmt_bind_result($statement, $userBarcode);

	$response = array();
	$response['success'] = false;

	while(mysqli_stmt_fetch($statement)){
		$response['success'] = true;
	}

	echo json_encode($response);
?>

