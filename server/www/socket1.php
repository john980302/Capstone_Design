#!/usr/local/bin/php -q
<?php
	define("_IP", "13.59.93.159")
	define("_PORT", "6500")

	$sSOCK = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	socket_bind($sSOCK, _IP, _PORT);
	socket_listen($sSOCK);
	while($sSOCK = socket_accept($sSOCK))
	{
		socket_getpeername($sSOCK, $addr, $port);
		echo "SERVER >> client connected $addr:$port \n";
		$date = date("Y/m/d H:i:s");
		socket_write($sSOCK, $date);
		socket_close($sSock);
		echo "SERVER >> client Close. \n";
	}
?>
