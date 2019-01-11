<?php 
	require './connect.php';

	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$address = $_POST['address'];

	$sql_insert = "INSERT INTO users(username, password, firstname, lastname, email, address) VALUES ('$username', '$password', '$firstname', '$lastname', '$email', '$address'); ";
	$result = mysqli_query($conn, $sql_insert);

	if($result === TRUE) {
		echo "success";
	} else {
		echo mysqli_error($conn);
	}






 ?>