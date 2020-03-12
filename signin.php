<!--
sign_in_form_1000024
-->

<!--head-area-->
	<?php include_once 'template/head.php' ?>
<!--//head-area-->

<!--header-area-->
	<?php include_once 'template/header.php'; ?>
<!--//end-header-area-->

<!--nav-bar-->
	<?php include_once 'template/nav-bar.php' ?>
<!--//nav-bar-->
	
	<!--login-->	
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">SignIn<span> Form</span></h3>
			<p>Stay Signed In with Lindisfarne Safari Park to stay Connected with Nature </p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Welcome back to Lindisfarne Safari Park ! <br> Not a Member? <a href="register.php">  Register Now »</a> </h4>
			</div>
		
			
			<div class="login-body wow fadeInUp animated" >
			
				<form action="loginChecker.php" method="POST" >
				
				<!-- Email Address -->
				<div class="form-group">
				<label for="email">Email address:</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required="">
				</div>	
				<!-- Password -->
				<div class="form-group">
				<label for="password">Password:</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password" required="">
				</div>	
				<!-- Sign In Button -->
					<button type="submit" class="btn btn-default" onclick="return validate_empty();">Sign In</button>
									
				</form>				
			</div>
			<div class="col-md-4" id="msg">
				<?php 
					// Passing error message using session 
					if(isset($_SESSION['errorMsg'])){
						echo '<span class="text-danger">'.$_SESSION['errorMsg'].'</span>';
						unset($_SESSION['errorMsg']);
					}
					
					// Passing error message using get request
					if(isset($_GET['errorMsg'])){
						echo $_GET['errorMsg'];
					}
					$a =1;
				?>
			</div>
        </div>

    </div>
    <!-- /.container -->
	<script>
		var a=1;
		var msg;
		//alert(a);
		var msgDiv = document.getElementById('msg');
		
		function validate_empty(){
			a = document.getElementById('email').value;
			if(a==""){ 
				msg = '<span class="text-danger"> Please type your email</span>';
				msgDiv.innerHTML = msg;
				return false;
			}
			else {
				msg = '<span class="text-success">Thank you</span>';
				msgDiv.innerHTML = msg;
				//alert(msg);
				return true;
			}
			return false;
		}
	</script>
<?php 

	include_once 'template\footer.php'; 
?>