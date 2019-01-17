<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { 
	global $conn;
	?>

	<div class="container">
		<div class="row">
			<a href="./new_item.php" class="btn btn-primary">Add New Item</a>
		</div>

		<?php 
		$sql = "SELECT * FROM items";
		$items = mysqli_query($conn, $sql);
		
		echo "<div class='row'>";
		foreach ($items as $item) { ?>
			<div class="col-sm-3 py-2">
				<div class="card h-100">
					<img src="image of the item" class="card-img-top">
					<div class="card-body">
						<h4 class="card-title"> item name </h4>
						<p class="card-text">item description</p>
						<p class="card-text"> Price: item price</p>

						<input type="hidden" value="id of the item">
					</div> <!-- end card body -->

					<div class="card-footer">
						<a href="./edit_item.php?id=item id" class="btn btn-primary"> Edit Item</a>
						<a href="./delete_item.php?id=item id" class="btn btn-danger"> Delete Item</a>
					</div>

				</div>
			</div> <!-- end of cols -->
		<?php }; ?>
		</div> <!-- end of row -->
	</div><!--  end container -->







<?php } ?>