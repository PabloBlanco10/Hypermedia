<?php
function getDevice($id){
	$username = "hyp43tim";
	$password = "";
	$host = "ftp.hyp43tim.altervista.org";
	$database = "my_hyp43tim";

	$db = mysql_connect($host, $username, $password) or die("Unable to connect with the DataBase");
	mysql_select_db($database, $db) or die("Unable to connect with the DataBase"); 

	$consulta = sprintf("SELECT * FROM Device where ID = '$id'");
	$resultado = mysql_query($consulta);
	$arr = array();
	if ($fila = mysql_fetch_assoc($resultado)) {
		$arr[0] = $fila['Name'];
		$arr[1] = $fila['Price'];
		$arr[2] = $fila['Image'];
		$arr[3] = $fila['Characteristics'];
		$arr[4] = $fila['Details'];
	}
	return $arr;
}

function getSmartLifeService($id){
	$username = "hyp43tim";
	$password = "";
	$host = "ftp.hyp43tim.altervista.org";
	$database = "my_hyp43tim";

	$db = mysql_connect($host, $username, $password) or die("Unable to connect with the DataBase");
	mysql_select_db($database, $db) or die("Unable to connect with the DataBase"); 

	$consulta = sprintf("SELECT * FROM Device where ID = '$id'");
	$resultado = mysql_query($consulta);
	$arr = array();
	if ($fila = mysql_fetch_assoc($resultado)) {
		$arr[0] = $fila['Name'];
		$arr[1] = $fila['Price'];
		$arr[2] = $fila['Image'];
		$arr[3] = $fila['Characteristics'];
		$arr[4] = $fila['Details'];
		$arr[5] = $fila['HowToUse'];
	}
	return $arr;
}

function getAssistanceService($id){
	$username = "hyp43tim";
	$password = "";
	$host = "ftp.hyp43tim.altervista.org";
	$database = "my_hyp43tim";

	$db = mysql_connect($host, $username, $password) or die("Unable to connect with the DataBase");
	mysql_select_db($database, $db) or die("Unable to connect with the DataBase"); 

	$consulta = sprintf("SELECT * FROM Device where ID = '$id'");
	$resultado = mysql_query($consulta);
	$arr = array();
	if ($fila = mysql_fetch_assoc($resultado)) {
		$arr[0] = $fila['Name'];
		$arr[1] = $fila['Characteristics'];
		$arr[2] = $fila['Details'];
	}
	return $arr;
}

