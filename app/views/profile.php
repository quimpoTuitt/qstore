<?php require_once "../partials/template.php"; ?>
<?php function get_page_content(){
	global $conn;
 ?>
<?php $user = $_SESSION['user']; ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="list-group" id="list-tab" role="tablist">
					<a class="list-group-item" href="#profile" data-toggle="list" role="tab">
						User Information
					</a>
					<a class="list-group-item" href="#history" data-toggle="list" role="tab">
						Order History
					</a>
				</div>
			</div>
			<div class="col-lg-7">
				<div class="tab-content">
					<div class="tab-pane" id="profile" role="tabpanel">
						<h3>User Information</h3>
						<form id="update_user_details" action="../controllers/update_profile.php" method="POST">
							<div class="container">
								<input type="text" class="form-control" name="user_id" value="input the id of the current user" hidden>
								<label for="username">Username:</label>
								<input type="text" class="form-control" id="username" name="username" value="input the username of the current user" disabled>
								<span class="validation"></span><br>
								<label for="firstname">First Name</label>
								<input type="text" class="form-control" id="firstname" name="firstname" value="input the firstname of the current user">
								<span class="validation"></span><br>
								<label for="lastname">Last Name</label>
								<input type="text" class="form-control" id="lastname" name="lastname" value="input the lastname of the current user">
								<span class="validation"></span><br>
								<label for="email">E-mail Address</label>
								<input type="text" class="form-control" id="email" name="email" value="input the email of the current user">
								<span class="validation"></span><br>
								<label for="address">Address</label>
								<input type="text" class="form-control" id="address" name="address" value="input the address of the current user">
								<span class="validation"></span><br>
								<br>
								<button type="button" class="btn btn-primary mb-5" id="update_info">Update Info</button>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="history" role="tabpanel">
						<div class="row">
							<div class="col-md-6">
								<h3>Order History</h3>
							</div>
						</div>
						<div class="table-responsive">
							<table class="table table-striped">
								<thead>
									<tr class="text-center">
										<th>Transaction Number</th>
										<th>Purchase Date</th>
										<th>Status</th>
										<th>Payment Mode</th>
									</tr>
								</thead>
								<tbody>
									<?php

									//retrieve trasaction code
									//retrieve purchase date
									//retrive payment mode


                                        // $transactions = mysqli_query($conn, $sql);
                                        // foreach($transactions as $transaction) { ?>
                                          	<tr>
                                          		<td>transaction code</td>
                                          		<td>purchase date</td>
                                          		<td>status</td>
                                          		<td>payment mode</td>
                                          	</tr>
                                        <?//php  }  
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php } ?>