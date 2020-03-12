<!--
registration_form_1000024
-->


<!--head-->
	<?php include_once 'template/head.php' ?>
<!--//head-->

<!--header-->
	<?php include_once 'template/header.php' ?>
<!--//header-->

<!--nav-bar-->
	<?php include_once 'template/nav-bar.php' ?>
<!--//nav-bar-->
	
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Register<span> Form</span></h3>
			<p>Stay Signed In with Lindisfarne Safari Park <br /> Stay Connected with Nature </p>
		</div>
					
	 

	
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Already have an Account ?<a href="signin.php">  Sign In »</a> </h4>
			</div>
			
			
			
			<div class="login-body">
				<form action="" method="POST">
					<!-- first_name -->
					<div class="form-group">
					<label for="name">User Name *:</label>
					<input type="text" name="name" id="name" placeholder="Enter Your First Name" required="">
					</div>
					<!-- last_name -->
					<div class="form-group">
					<label for="l_name">Full Name *:</label>
					<input type="text" name="l_name" id="l_name" placeholder="Enter Your Last Name" required="">	
					</div>
					<!-- gender -->						
					<div class="form-group">
						<label for="gender" required="">Gender *:</label>
						<input type="radio" name="gender" value="M" <?php echo (isset($gender) && $gender == "M") ? 'checked="checked"' : ''; ?>/> Male
						<input type="radio" name="gender" value="F" <?php echo (isset($gender) && $gender == "F") ? 'checked="checked"' : ''; ?>/> Female	
						<input type="radio" name="gender" value="O" <?php echo (isset($gender) && $gender == "O") ? 'checked="checked"' : ''; ?>/> Other	
					</div>
					<!-- age -->
					<div class="form-group">
					<label for="age">Age *:</label> <br />
					<input type="number" name="age" id="age" placeholder="Enter Your Age" required="">
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
					<label for="post_cd">Postal Code *:</label>
					<input type="number" name="post_cd" id="post_cd" placeholder="Enter Your Post Code" required="">
					</div>
					<!-- email -->
					<div class="form-group">
					<br />
					<label for="email">Email *:</label>
					<input type="email" name="email" id="email" class="form-control" placeholder="Enter Your Email Address" required="">
					</div>
					<!-- password -->
					<div class="form-group">
					<br />
					<label for="password">Password *:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Enter Your Password" required="">
					</div>
					<!-- more_about_user -->
					<div class="form-group">
					<br />
					<label for="more">About You:</label>
					<input type="text" name="more" id="more" placeholder="Enter More Details About Your " >
					</div>
					<!-- submit_button -->
					<button type="submit" class="btn btn-default">Register</button>
					<p>Note: Please make sure your details are correct before submitting form and that all fields marked with * are completed!.</p>
				</form>
			
				
	<?php	
		if($_POST){
		$name = $_POST['name'];
		$l_name = $_POST['l_name'];
		$gender = $_POST['gender'];
		$age = $_POST['age'];
		$post_ad = $_POST['post_ad'];
		$post_cd = $_POST['post_cd'];
		$more = $_POST['more'];
		$email = $_POST['email'];
		$password = $_POST['password'];
				
		
		
	 
		
		
		
		if(!isset($_SESSION['role']) || (isset($_SESSION['role'])&& $_SESSION['role'] == 1)){	
			$sql = "INSERT INTO users(user_type,name,l_name,gender,age,post_ad,post_cd,more,email,password)
			VALUES (1,'$name','$l_name','$gender','$age','$post_ad','$post_cd','$more','$email','$password');";
		}else{	
			$sql = "INSERT INTO users(name,l_name,gender,age,post_ad,post_cd,more,email,password)
				VALUES ('$name','$l_name','$gender','$age','$post_ad','$post_cd','$more','$email','$password');";
		}
		include_once 'dbCon.php';	
		$con = connect();
		if ($con->query($sql) === TRUE) {
			echo "Your data has been created successfully on Lindisfarne Database";
		} else {
			echo "Error: " . $sql . "<br>" . $con->error;
		}
	}
	
	?>
				
			</div>
		</div>
		
	</div>
	<!--//login-->
	
		
	<!--footer-->
		<?php include_once 'template/footer.php' ?>
	<!--//footer-->	