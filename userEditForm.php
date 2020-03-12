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
			//Users edit
			$id =  $_GET['id'];
				include_once 'dbCon.php';
				$con = connect();

				$sql = "SELECT * FROM `users` WHERE id=$id";
				
				$result = $con->query($sql);
				foreach($result as $users){
					$name 		= $users['name'];
					$l_name 	= $users['l_name'];
					$gender     = $users['gender'];
					$age 		= $users['age'];
					$post_ad 	= $users['post_ad'];
					$post_cd 	= $users['post_cd'];
					$more 		= $users['more'];
					$email 		= $users['email'];
					$password 	= $users['password'];
					
				}
				?>
			<div class="widget-shadow">
            <div class="login-body">
				<form action="" method="POST">
				<input type="hidden" name="id" value="<?=$id?>" />
					<!-- first_name -->
					<div class="form-group">
					<label for="name">User Name :</label>
					<input type="text" name="name" id="name" placeholder="Enter Your First Name" >
					</div>
					<!-- last_name -->
					<div class="form-group">
					<label for="l_name">Full Name :</label>
					<input type="text" name="l_name" id="l_name" placeholder="Enter Your Last Name" >	
					</div>
					<!-- gender -->						
					<div class="form-group">
						<label for="gender" >Gender :</label>
						<input type="radio" name="gender" value="M" <?php echo (isset($gender) && $gender == "M") ? 'checked="checked"' : ''; ?>/> Male
						<input type="radio" name="gender" value="F" <?php echo (isset($gender) && $gender == "F") ? 'checked="checked"' : ''; ?>/> Female	
						<input type="radio" name="gender" value="O" <?php echo (isset($gender) && $gender == "O") ? 'checked="checked"' : ''; ?>/> Other	
					</div>
					<!-- age -->
					<div class="form-group">
					<label for="age">Age :</label> <br />
					<input type="number" name="age" id="age" placeholder="Enter Your Age" >
					</div>
					<!-- postal_address -->
					<div class="form-group">
						<br />
					<label for="post_ad">Postal Address :</label>
					<input type="text" name="post_ad" id="post_ad" placeholder="Enter Your Postal Address" >
					</div>
					<!-- postal_code -->
					<div class="form-group">
					<br />
					<label for="post_cd">Postal Code :</label>
					<input type="number" name="post_cd" id="post_cd" placeholder="Enter Your Post Code" >
					</div>
					<!-- email -->
					<div class="form-group">
					<br />
					<label for="email">Email :</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address" >
					</div>
					<!-- password -->
					<div class="form-group">
					<br />
					<label for="password">Password :</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" >
					</div>
					<!-- more_about_user -->
					<div class="form-group">
					<br />
					<label for="more">About You:</label>
					<input type="text" name="more" id="more" placeholder="Enter More Details About Your " >
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
		$id = $_POST['id'];
		$name = $_POST['name'];
		$l_name = $_POST['l_name'];
		$gender = $_POST['gender'];		
		$age = $_POST['age'];
		$post_ad = $_POST['post_ad'];
		$post_cd = $_POST['post_cd'];
		$more = $_POST['more'];	
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "UPDATE users SET name='$name',l_name='$l_name',gender='$gender',age='$age',post_ad='$post_ad',post_cd='$post_cd',more='$more',email='$email',password='$password'
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