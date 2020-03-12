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

	$sql = "SELECT * FROM `users`";
	
	$result = $con->query($sql);
	
?>	
	<table border="1">
	<tr>
		<th>User Role</th>
		<th>First Name</th>
		<th>LastName</th>
		<th>Gender</th>
		<th>Age</th>	
		<th>Postal Address</th>
		<th>Post Code</th>
		<th>More</th>
		<th>Email</th>
		
		
	</tr>
<?php 
	foreach($result as $r) {
	?>
		<tr>
			<td><?php echo $userType = ($r['user_type'] == 0)? 'Admin':'Customer'; ?></td>
			<td><?=$r['name']?></td>
			<td><?=$r['l_name']?></td>
			<td><?php echo $r['gender'];?></td>
			<td><?php echo $r['age'];?></td>
			<td><?php echo $r['post_ad'];?></td>
			<td><?php echo $r['post_cd'];?></td>
			<td><?php echo $r['more'];?></td>
			<td><?php echo $r['email'];?></td>
	
			<td><a href="userEditForm.php?id=<?=$r['id']?>">Edit</a>,Delete </td>
		</tr>
	<?php } ?>
</table>
<?php } ?>

<!--footer-->
	<?php include_once 'template/footer.php' ?>
<!--//footer-->	
