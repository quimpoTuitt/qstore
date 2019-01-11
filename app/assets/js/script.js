$(document).ready( () => {
	$("#add_user").click( (e) => {
		let username = $("#username").val();
		let password = $("#password").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();

		$.ajax({
			"url" : '../controllers/create_user.php',
			"method" : "POST",
			"data" : {
				'username' :username,
				'password' :password,
				'firstname' :firstname,
				'lastname' :lastname,
				'email' :email,
				'address' :address
			},
			"success":(data) => {
				alert("user created successfully");
				//redirect broswer
				window.location.replace("../../index.php")
			}
		});
	});







});