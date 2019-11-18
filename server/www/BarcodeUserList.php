<?php
	header('content-type: text/html; charset=utf-8');

	// 데이터베이스 접속 문자열. (db위치, 유저이름, 비밀번호)
	$host = "localhost";
	$user = "dbadmin";
	$passwd = "raon_bin";
	$db = "raonbin";
	$con=new mysqli($host, $user, $passwd, $db);


	mysqli_query($con, 'SET NAMES utf8');

	$userID = $_POST["userID"];

	$statement = mysqli_prepare($con, "select userBarcode, time from barcodeInfo where userID = ?");
	mysqli_stmt_bind_param($statement, "s", $userID);
	mysqli_stmt_execute($statement);

	mysqli_stmt_store_result($statement);
	mysqli_stmt_bind_result($statement, $userBarcode, $time);

	$response = array();
	$response['success'] = False;
	$cnt = 0;
	
	while(mysqli_stmt_fetch($statement)){
		$respone['success'] = true;
		$respone['userBarcode'] = $userBarcode;
		$respone['time'] = $time;
		echo json_encode($response);
		$cnt = $cnt + 1;
	}	

	if (cnt == 0){
		echo json_encode($response);
	}
?>

