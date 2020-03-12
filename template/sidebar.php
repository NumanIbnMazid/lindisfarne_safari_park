<div class="col-md-3">

		<a href="calendar.php" class="list-group-item"><h3>Calendar</h3></a>
			
		<?php if(isset($_SESSION['role'])&& $_SESSION['role'] == 0){ ?>
			<a href="addProduct.php" class="list-group-item"><h3>Add Ticket</h3></a>
			<a href="addItemtoGallery.php" class="list-group-item"><h3>Add Animal to Gallery</h3></a>
		<?php } ?>
		
		<?php if(isset($_SESSION['role'])&& $_SESSION['role'] == 1){ ?>
	
		<?php } ?>
		
	</div>
</div>