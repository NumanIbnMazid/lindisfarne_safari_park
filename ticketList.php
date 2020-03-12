<!--head-area-->
	<?php include_once 'template/head.php' ?>
<!--//head-area-->

<!--header-area-->
	<?php include_once 'template/header.php'; ?>
<!--//end-header-area-->
	
<!--header-area-->
	<?php include_once 'template/nav-bar.php'; ?>
<!--//end-header-area-->

<!--side-bar-area-->
	<?php include_once 'template/sidebar.php'; ?>
<!--//end-side-bar-area-->


<?php 
//session_start();
if(isset($_SESSION['role'])&& $_SESSION['role'] == 0){ ?>

<?php

	include_once 'dbCon.php';
	$con = connect();

	$sql = "SELECT * FROM `orders`";
	
	$result = $con->query($sql);
	
?>	
	<table border="1">
	<tr>
		<th>Customer ID</th>
		<th>Date of Purchase</th>
	</tr>
<?php 
	foreach($result as $r) {
	?>
		<tr>
			<td><?=$r['customer_id']?></td>
			<td><?php echo $r['date_of_purchase'];?></td>
			<td><a href="ticketEditForm.php?id=<?=$r['id']?>">Edit</a>,Delete </td>
		</tr>
	<?php } ?>
</table>
<?php } ?>

<!--footer-->
	<?php include_once 'template/footer.php' ?>
<!--//footer-->	
