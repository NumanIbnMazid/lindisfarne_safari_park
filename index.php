<!--
Numan Ibn Mazid
NCC ID: 00160542
-->

	<!--head-area-->
		<?php include_once 'template/head.php' ?>
	<!--//head-area-->
	
	<!--header-area-->
		<?php include_once 'template/header.php'; ?>
	<!--//end-header-area-->
	
	<!--nav-bar-area-->
		<?php include_once 'template/nav-bar.php'; ?>
	<!--//end-nav-bar-area-->
	
	<!--banner-->
		<?php include_once 'template/banner.php' ?>			
	<!--//banner-->

	<!--side-bar-area-->
		<?php include_once 'template/sidebar.php'; ?>
	<!--//end-side-bar-area-->
	
	<!--Page Content-->
	<div class="container">

        <div class="row">
           
            <div class="col-md-9">
				
                
                <div class="row">
					<?php 
						// Get all products from database to show 
						$sql = "SELECT * FROM product;";
						
						include_once 'dbCon.php';	
						$con = connect();
						$result = $con->query($sql);
					?>
					
					<?php 
					foreach($result as $row){ ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?=BASE_URL?>images/uploads/<?=$row['image']?>" alt="">
                            <div class="caption">
                                <h4 class="pull-right price"><?=$row['price']?></h4>
                                <h4><a href="#"><?=$row['name']?></a>
                                </h4>
                                <p><?=$row['description']?> </p>
                            </div>
                             <p class="pull-right"><button onclick="addToCart(<?=$row['id']?>)"
							 class="btn btn-xs btn-primary btn-add-cart">Add to Cart</button></p>
                        </div>
                    </div>
					<?php } ?>
                </div>
            </div>
        </div>
	<!--Currency Converter-->
	<span> <h2>Currency Converter:</h2></span>
	<select name="currencyList" id="currencyList">
		<option value="GBP">GBP</option>
		<option value="USD">USD</option>
		<option value="EUR">EUR</option>
		<option value="BDT">BDT</option>
	</select>
	<input type="hidden" id="fromCurr" value="GBP"/>
    </div>
	<!--//Page Content-->
	
	<script>
		function addToCart(id){
			//$('#btn_save').hide();
			//$('#btn_update').show();
			
			$.ajax({
			   url:"addToCart.php",
			   type:"POST",
			   data:{"id":id,},
			   success:function(data){
				   //alert(data);
				   var count = $.parseJSON(data);
				   $('.cart').html(count.count);
				   //$('#name').val(category[0].name);
				   //$('#desc').val(category[0].description);
				   //$('#parentid').val(category[0].parent_category_id);
			   }
			});
		}
		
		
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
						priceObj.html(data);
					}
				});
			});
			

		});
		
	</script>
	
	<!--footer-->
		<?php include_once 'template/footer.php' ?>
	<!--//footer-->		
				

