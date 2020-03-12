	<!--head-area-->
		<?php include_once 'template/head.php' ?>
	<!--//head-area-->
	
	<!--header-area-->
		<?php include_once 'template/header.php'; ?>
	<!--//end-header-area-->
	
	<!--nav-bar-area-->
		<?php include_once 'template/nav-bar.php'; ?>
	<!--//end-nav-bar-area-->
	
	<?php 
		if(!isset($_SESSION['isLoggedIn'])){ 
		}
	?>
	
    <!-- Navigation -->
    <?php include_once 'template/nav-bar.php'; ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Side Bar -->
			<?php include_once 'template/sidebar.php'; ?>

			<?php 
				if($_POST){		
					$productid 		= $_POST['productID'];
					$order_total 	= $_POST['grand_total'];
					$userId			= $_SESSION['id'];
					$dateOfPurchase = date('Y-m-d H:i:s');
					//echo $dateOfPurchase;exit;
					//print_r($productid);exit;
					
					
					
					$sql = "INSERT INTO orders(order_total,date_of_purchase,customer_id)
						VALUES ($order_total,'$dateOfPurchase',$userId);";
					
					include_once 'dbCon.php';	
					$con = connect();
					if ($con->query($sql) === TRUE) {
						$msg= "New record created successfully <br>";
					} else {
						$msg= "Error: " . $sql . "<br>" . $con->error;
					}
					
					$orderId = $con->insert_id;
					//echo $orderId;exit;
					 foreach($productid as $id => $qtty){
						
						if($qtty >0){
							$sql = "SELECT * FROM product WHERE id = $id";
						
							$product = $con->query($sql);
							foreach($product as $pd){
								$singleProduct = $pd;
							}
								
							//print_r($singleProduct); 
							$unit_price = $singleProduct['price'];
							$sub_total = $unit_price * $qtty;
							$sql = "INSERT INTO order_details(order_id,product_id,unit_price,order_quantity,subtotal) 
							VALUES ($orderId,$id,$unit_price,$qtty,$sub_total)";
							$con->query($sql);
						}
					}
					//$qtty = $_POST['qtty'];
					
					include 'mailSender.php';
					$mail->Body = 'Dear '.$_SESSION['name'].',\nYour Order Successfully Received.\n 
									Order Price: '.$order_total;
					$mail->addAddress($_SESSION['email'], $_SESSION['name']);
	
					if(!$mail->send()) {
						echo 'Sorry The mail not sent';exit;
					}
					
				}
				
				// Get all category from database to show in drop down 
				$sql = "SELECT * FROM product;";
				
				include_once 'dbCon.php';	
				$con = connect();
				$result = $con->query($sql);
					
			?>
			
            <div class="col-md-5">				
				<form action="" method="POST"  enctype="multipart/form-data">
					<?php foreach($result as $row){ ?>
						<div class="form-group">
							<label for="email"><?=$row['name']?>--(<span class="price"><?=$row['price']?></span>)GBP</label>
							<select name="productID[<?=$row['id']?>]" class="form-control qtty" price="<?=$row['price']?>" >
								<option >0</option> 
								<option >1</option> 
								<option >2</option> 
								<option >3</option> 
								<option >4</option> 
							</select>
						</div>
					<?php } ?>
					<div class="form-group">
						<label for="date_of_purchase">Date of Booking :</label> <br />
						<input type="date" name="date_of_purchase" id="date_of_purchase" placeholder="Enter Booking Date" >
					</div>
					<input type="hidden" name="grand_total" class="gt" />
				  <button type="submit" class="btn btn-info">Submit</button>
				</form>
			</div>
			
			<div class="col-md-4-2">
				<h1>Total Cost: <span class="grand_total">0</span></h1>
				<?php if(isset($msg)) {echo $msg; unset($msg); }?>
			</div>
        </div>

    </div>
	<!--Currency Converter-->
	<div class="converter">
	<span> <h2>Currency Converter:</h2></span>
	<select name="currencyList" id="currencyList">
		<option value="GBP">GBP</option>
		<option value="USD">USD</option>
		<option value="EUR">EUR</option>
		<option value="BDT">BDT</option>
	</select>
	<input type="hidden" id="fromCurr" value="GBP"/>
    </div>
	
    <!-- /.container -->
<?php	include_once 'template/footer.php'; ?>

<script>
	/*
		function calculate(){
			$('.qtty').
			var qtty = obj.val();
			var price = obj.attr('price');
			var subTotal = price * qtty;
			var grandTotal = parseInt($('.grand_total').html());
			//$('.grand_total').html('')
			grandTotal = grandTotal + subTotal;
			$('.grand_total').html(grandTotal);
			//alert(subTotal);
		}
	*/	
		$(document).ready(function(){
			$(".qtty").change(function(){
				var grandTotal = 0;
				$('.qtty').each(function() {
					var qtty = $(this).val();
					var price = $(this).attr('price');
					var subTotal = price * qtty;
					grandTotal = grandTotal + subTotal;
				});
				$('.grand_total').html(grandTotal);
				$('.gt').val(grandTotal);
			});
		});
		
		$(document).ready(function(){
			$(".qtty").change(function(){
				calculate();
			});
		
			$('#currencyList').change(function(){
				var toCurrency = $(this).val();
				var fromCurr = $('#fromCurr').val();
				$('#fromCurr').val(toCurrency);
				
				$('.price').each(function(){
					var priceObj = $(this);
					var amount = priceObj.html();
					$.ajax({
						url:"currencyConverter.php",
						type:"POST",
						data:{"fromCurr":fromCurr,"toCurr":toCurrency,"amount":amount},
						success:function(data){
							data = parseFloat(data).toFixed(2);
							priceObj.html(data);
							priceObj.parent().next('select').attr('price',data);
						}
					});					
				});
				calculate();
			});
		
			
		});
	</script>
	
	
	