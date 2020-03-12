
<?php
//orders edit
$id =  $_GET['id'];
	include_once 'dbCon.php';
	$con = connect();

	$sql = "SELECT * FROM `orders` WHERE id=$id";
	
	$result = $con->query($sql);
	foreach($result as $orders){
		print_r($orders);
	}
	include_once 'template\footer.php'; 