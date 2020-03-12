	<!-- head -->
	<?php include_once "template\head.php"; 

		if(isset($_SESSION['role'])&& $_SESSION['role'] == 0){	
	?>
    <!-- header -->
    <?php include_once 'template\header.php'; ?>
	<!-- //header -->
	
	<!--header-area-->
		<?php include_once 'template/nav-bar.php'; ?>
	<!--//end-header-area-->
	
    <!-- page Content -->
	<div class="login-page">
			<?php
			//orders edit
			$id =  $_GET['id'];
				include_once 'dbCon.php';
				$con = connect();

				$sql = "SELECT * FROM `orders` WHERE id=$id";
				
				$result = $con->query($sql);
				foreach($result as $orders){
					$userId 			= $orders['customer_id'];
					$dateOfPurchase     = $orders['date_of_purchase'];					
				}
				?>
		<div class="widget-shadow">
            <div class="login-body">
				<form action="" method="POST">
				<input type="hidden" name="id" value="<?=$id?>" />					
					<!-- date_of_purchase -->
					<div class="form-group">
					<label for="date_of_purchase">Date of Booking :</label> <br />
					<input type="date" name="date_of_purchase" id="date_of_purchase" placeholder="Enter the Date you want to Book" >
					</div>
					<!-- update_button -->
					<button type="submit" class="btn btn-default">Update</button>					
				</form>
			</div>
		</div>
	</div>
    <!-- /.container -->
<?php 

	if($_POST){
		$id 				= $_POST['id'];
		$dateOfPurchase 	= $_POST['date_of_purchase'];		
		$sql = "UPDATE orders SET date_of_purchase='$dateOfPurchase'
				WHERE id=$id";
		//echo $sql;exit;		
		include_once 'dbCon.php';	
		$con = connect();
		if ($con->query($sql) === TRUE) {
			echo "New record Updated successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}


	include_once 'template\footer.php'; 
}
?>