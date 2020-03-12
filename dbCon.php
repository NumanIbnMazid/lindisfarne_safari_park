<?php
//Class: 2017-05-08

function connect($flag=TRUE){
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbName = "lindispark";

	// Create connection
	if($flag){
		$con = new mysqli($servername, $username, $password, $dbName);
	}else{
		$con = new mysqli($servername, $username, $password);
	}
	// Check connection
	if ($con->connect_error) {
		die("Connection failed: $con->connect_error");
	} 
	//echo "Connected successfully";
	
	return $con;
}
	
?>