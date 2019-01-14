<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() {
	global $conn;
 ?>

	<?php 
		if (!isset($_SESSION['user'])) {
			header("Location: ./login.php");
		}

	 ?>

	 <h1>This is the checkout page</h1>

	 <form method="POST" action="../controllers/placeorder.php">
	 	<div class="container mt-4">
	 		<div class="row">
	 			<div class="col-8">
	 				<h4>Shipping Address</h4>
		 			<div class="form-group">
		 				<input type="text" class="form-control" name="addressLine1" value="<?php echo $_SESSION['user']['address']; ?>">
		 			</div>
	 			</div> <!-- end col -->
	 		</div> <!-- end row -->
			
			<h4>Order Summary</h4>
			<div class="row">
				<div class="col-sm-6">
					<p> Total </p>
				</div>

				<div class="col-sm-6" id="total_price">
					<?php 
						$cart_total = 0;
						// var_dump($_SESSION['cart']);
						foreach($_SESSION['cart'] as $id => $qty) {
							$sql = "SELECT * FROM items WHERE id =$id";
							$result = mysqli_query($conn, $sql);
							$item = mysqli_fetch_assoc($result);

						// var_dump($_SESSION['cart'][$id]);
							$subTotal = $_SESSION['cart'][$id] * $item['price'];
						// $cart_total = $cart_total + $subTotal
							$cart_total += $subTotal;
						}
						echo $cart_total;
					 ?>
				</div> <!-- end total price -->
			</div> <!-- end row -->

	 	</div> <!-- end container -->
	 </form> <!-- end form -->





<?php } ?>