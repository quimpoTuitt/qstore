$(document).ready( () => {
	function validate_registration_form() {
		let errors = 0;
		let username = $("#username").val();
		let password = $("#password").val();
		let firstname = $("#firstname").val();
		let lastname = $("#lastname").val();
		let email = $("#email").val();
		let address = $("#address").val();


		//username should be greater than or equal to 10 chars
		if(username.length < 10) {
			$("#username").next().html("Username should be at least 10 characters");
			errors++;
		} else {
			$('#username').next().html(' ');
		}


		if(errors > 0) {
			return false; //this means there are errors
		} else {
			return true;
		}

	}











	$("#add_user").click( (e) => {
		if(validate_registration_form()) {
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
					if(data == "user_exists") {
						$("#username").next().html("Username already exists");
					} else {
						alert("user created successfully");
						//redirect broswer
						window.location.replace("../../index.php")
					}
				}
			});
		}

	});







});