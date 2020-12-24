<?php
	

	session_start();
	ob_start();

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_data = "webbanhang";

	$connect = mysqli_connect($db_host, $db_user, $db_pass, $db_data);
	mysqli_set_charset($connect, 'utf8');

	$title = "Bán Acc Game - Shop Nick Giá Rẻ - Uy Tín Tại Việt Nam";
	$home_url = "http://192.155.33.126/BAI%20TAP%20CNTT%201401/tran%20dinh%20khiem_cntt%20-%201401/THIET%20KE%20WEB%201/PHPWEB/shopbanaccboostrap/";
	$id_fb = "1486511711"; // id fb admin


?>