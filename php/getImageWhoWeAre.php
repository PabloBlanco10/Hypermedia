<?php
	/* ALTERVISTA */
	$username = "hyp43tim";
	$password = "";
	$host = "ftp.hyp43tim.altervista.org";
	$database = "my_hyp43tim";
	
	/* XAMPP */
	/*$username = "root";
	$password = "";
	$host = "localhost";
	$database = "my_hyp43tim";*/

$db = mysql_connect($host, $username, $password) or die("Unable to connect with the DataBase");
mysql_select_db($database, $db) or die("Unable to connect with the DataBase"); 

if (isset($_GET['id'])){
	$id = mysql_real_escape_string($_GET['id']);
	$query = mysql_query("SELECT image FROM WhoWeAre WHERE ID='$id'");
	while($row = mysql_fetch_assoc($query)){
		$imageData = $row ["image"];
	}
	header("content-type: image/jpg");        
	echo $imageData;
}else {
	echo "There were an error loading the image";
}

?>