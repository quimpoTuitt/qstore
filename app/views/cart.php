<?php require_once '../partials/template.php'; ?>

<?php function get_page_content() { ?>
	<div class="container my-4">
		<div class="row">
			<div class="col-12">
				<h1>Cart Page</h1>
			</div>
		</div> <!-- end row -->
		<hr>

		<div class="table-responsive">
			<table class="table table-striped table-bordered">
				<thead>
					<tr class="text-center">
						<th>Item Name</th>
						<th>Item Price</th>
						<th>Item Quantity</th>
						<th>Item Subtotal</th>
						<th>Actions</th>
					</tr>
				</thead>

				<tbody>
					<?php 

						if(isset($_SESSION['cart']) && count($_SESSION['cart']) !=0) {
							// echo 'may laman ang cart';
						} else {
							echo 'No items in the cart';
						}
					 ?>		
						<tr>
							<td class="item_name"> Item Name</td>
							<td class="item_price"> Item Price</td>
							<td class="item_quantity"> Item Quantity</td>
							<td class="item_subtotal"> Item Subtotal</td>
							<td class="item_action text-center">
								<button class="btn btn-danger item-remove">Remove from cart</button>
							</td>
						</tr>
				</tbody>

				<tfoot>
					<tr>
						<td class="text-right font-weight-bold" colspan="4">Total</td>
						<td class="text-right font-weight-bold" id="total_price">Total Price</td>
					</tr>
				</tfoot>
			</table>
		</div>		


	</div> <!-- end contianer -->


	


<?php } ?>