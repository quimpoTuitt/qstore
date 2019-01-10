<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>

<?php require_once '../controllers/connect.php'; 
	global $conn; //refers to the $conn outside the function 
?>

<div class="container">
	<div class="row">

		<!-- categories -->
		<div class="col-sm-2">
	

		</div> <!-- end categories -->
		
		<!-- items -->
		<div class="col-sm-10">
			<div class="container">
				<?php 
					$sql2 = "SELECT * FROM items";
					$items = mysqli_query($conn, $sql2);

					echo "<div class='row'>";

					foreach ($items as $item) { ?>
						<div class="col-sm-3 ">
							<div class="card h-100">
								<img class="card-img-top" src="<?php echo $item['image_path']; ?>">
								<div class="card-body">
									<h4 class="card-title">
										<?php echo $item['name']; ?>
									</h4>
									<p class="card-text">
										<?php echo $item['description']; ?>
										<br>
										<?php echo $item['price']; ?>
									</p>
								</div>
							</div> <!-- end card -->
						</div> <!-- end item col -->
					<?php } echo "</div>" ; ?> <!-- end of items row -->		
			</div> <!-- end items container -->
		</div> <!-- end items -->
	</div> <!-- end row -->


</div> <!-- end container -->





<?php }  ?>