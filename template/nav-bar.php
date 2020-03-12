<!--navbar-header-->
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Lindisfarne Safari Park</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if(!isset($_SESSION['role']) || (isset($_SESSION['role'])&& $_SESSION['role'] == 1)){ ?>
					
                    <li>
                        <a href="gellary.php">Animals</a>
                    </li>  
					
					<li>
						<?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) { ?>
							<a href="order.php">Book Ticket</a>
						<?php }else {?>
							<a href="signin.php">Book Ticket</a>
						<?php } ?>
                    </li>
					
					<li>
                        <a href="about.php">About</a>
                    </li>
					<li>
                        <a href="contact.php">Contact</a>
                    </li>
					<li>
                        <a href="faq.php">FAQ</a>
                    </li>
					<li>
                        <a href="register.php">Register</a>
                    </li>
					
					<?php } ?>
					
					<?php if(isset($_SESSION['role'])&& $_SESSION['role'] == 0){ ?>
						<li>
							<a href="gellary.php">Animals</a>
						</li>
						<li>
							<a href="userList.php">Users</a>
						</li>
						<li>
							<a href="ticketList.php">Booked Tickets</a>
						</li>							
					<?php } ?>
					
					<li>
						<?php if(isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn']) { ?>
							<a href="logout.php"><?=$_SESSION['name']?>-(Logout)</a>
						<?php }else {?>
							<a href="signin.php">Sign In</a>
						<?php } ?>
                    </li>
					
					
                </ul>
				
				<span class="navbar-text pull-right">Cart has <span class="label label-inverse cart">0</span> 
				Items || <button class="btn btn-xs btn-danger" onclick="removeAllProduct();">Remove all product</button></span>
            </div>
            <!-- /.navbar-collapse -->
        </div>
		<!-- /.container -->
	</nav>
	<!--//navbar-header-->
	
		<script>
			function removeAllProduct(){
				$.ajax({
				   url:"clearCart.php",
				   type:"POST",
				   success:function(data){
					   $('.cart').html(0);
				   }
				});
			}
		</script>
        
    
					