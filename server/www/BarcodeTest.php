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
	$userID = "testing";
	$date = date('Y-m-d H:i:s');

	$sql = "insert into barcodeInfo values (?,?,?)";
	$statement = mysqli_prepare($con, $sql);
	mysqli_stmt_bind_param($statement, "sss", $userID, $userBarcode, $date);
	mysqli_stmt_execute($statement);
	
	
	$response = array();
	$response['success'] = True;

	echo json_encode($response);
?>

