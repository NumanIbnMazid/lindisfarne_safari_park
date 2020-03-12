
<?php
//Users edit
$id =  $_GET['id'];
	include_once 'dbCon.php';
	$con = connect();

	$sql = "SELECT * FROM `users` WHERE id=$id";
	
	$result = $con->query($sql);
	foreach($result as $users){
		print_r($users);
	}
	include_once 'template\footer.php'; 