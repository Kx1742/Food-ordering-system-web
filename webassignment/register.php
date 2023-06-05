<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="mystyle/restaurantStyle.css">
	<style>
	@keyframes animatePatternRTL {
		0% {
			margin-left: -10px;
		}
		100% {
			margin-right: -100px;
		}
	}

	@keyframes animatePatternLTR {
		0% {
			margin-right: 80px;
		}
		100% {
			margin-left: -100px;
		}
		
	}

	.pattern1 {
		animation: animatePatternLTR 3s infinite;
		animation-direction: alternate-reverse;
	}

	.pattern2 {
		animation: animatePatternRTL 3s infinite;
		animation-direction: alternate-reverse;
	}
	.cloud img
	{
		width:17em;
		height: auto;
		z-index: 2;
	}
	</style>
</head>
<body>
	<?php include ("conf.php");?>
	<img src = "background6.jpg" style = "z-index: 0;position: absolute; width: 100%; height: 170%; margin-top: -5em;">
	<div class = "register-page">
		<img src = "Shintasaya-Logo.png" style="width:fit-content;height:55px;">
		<h1>Registration Form</h1>

		<form action="registerAcc.php" method="post" id = "registerForm">
			<div class=register>
				<label for="username">Username:</label>
				<input type="text" id="username" name="username"><br>
				<div id="usernameError" class="error"></div>
			</div>
			<div class=register>
				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br>
				<div id="emailError" class="error"></div>
			</div>
			<div class=register>
				<label for="password">Password:</label>
				<input type="password" id="password" name="password"><br>
				<div id="passwordError" class="error"></div>
			</div>
			<div class=register>
				<label for="confirm_password">Confirm Password:</label>
				<input type="password" id="confirm_password" name="confirm_password"><br>
				<div id="confirmPasswordError" class="error"></div>
				<div id="validatePasswordError" class="error"></div>
			</div>
			<label style = "font-size:1.5em; margin-left:1.9em;margin-top:1em;"for="confirm1">I hereby all the information above is real and accurate. </label><br>
			<div style = "width:5%; margin-top:-2.3em;">
				<input style = "vertical-align: middle;position: relative;top: -1px;"type="checkbox" id="confirm-details" name="confirm1" value="confirm">
			</div>
			<div id="confirmError" class="error"></div>
			
			<div class = submit>
				<input type="submit" class = "submit-button" value="Register" name = "register">
			</div>
		</form>
		<div class="pattern1" >
			<div class="cloud"><img src = "pattern.png"></div>
		</div>

		<div class="pattern2" style = "float:right;">
			<div class="cloud"><img src = "pattern.png" style="width:20em; height:auto;"></div>
		</div>
	</div>
	<script>
		const form = document.getElementById("registerForm");

		form.addEventListener('submit', (event) => {
			event.preventDefault();
			const username = document.getElementById("username").value.trim();
			const email = document.getElementById("email").value.trim();
			const password = document.getElementById("password").value.trim();
			const confirm_password = document.getElementById("confirm_password").value.trim();
			const usernameErr = document.getElementById("usernameError");
			const emailErr = document.getElementById("emailError");
			const passwordErr = document.getElementById("passwordError");
			const confirmPasswordErr = document.getElementById("confirmPasswordError");

			// validate username input not blank and length
			if (!username) {
				usernameErr.innerText = "Please enter username.";
			} else if (username.length < 3 || username.length > 20) {
				usernameErr.innerText = "Username must be between 3 and 20 characters.";
			} else {
				usernameErr.innerText = "";
			}

			// validate email input not blank and valid format
			if (!email) {
				emailErr.innerText = "Please enter email address.";
			} else if (!/\S+@\S+\.\S+/.test(email)) {
				emailErr.innerText = "Please enter a valid email address.";
			} else {
				emailErr.innerText = "";
			}

			// validate password input not blank and length
			if (!password) {
				passwordErr.innerText = "Please enter password.";
			} else if (password.length < 6 || password.length > 20) {
				passwordErr.innerText = "Password must be between 6 and 20 characters.";
			} else {
				passwordErr.innerText = "";
			}

			// validate confirm password matches password
			if (password !== confirm_password) {
				confirmPasswordErr.innerText = "Passwords do not match.";
			} else {
				confirmPasswordErr.innerText = "";
			}

			// check if all fields are entered correctly
			if (username && email && password && confirm_password && password === confirm_password) {
				// submit the form
				form.submit();
			}
		});
		
		//show or hide password and confirm_password
		function togglePassword() {
			var passwordInput = document.getElementById("password");
			var confirmPasswordInput = document.getElementById("confirm_password");
			var showPasswordCheckbox = document.getElementById("show-password");
			if (showPasswordCheckbox.checked) {
				passwordInput.type = "text";
				confirmPasswordInput.type = "text";
			} else {
				passwordInput.type = "password";
				confirmPasswordInput.type = "password";
			}
		}
	</script>
</body>
</html>
