	const form = document.getElementById('loginForm');
	

	//clear input while refresh
	window.onload = function() {
		form.reset();
	};

form.addEventListener('submit', (event) => {
    event.preventDefault();
    const username= document.getElementById("username").value.trim();
    const password= document.getElementById("password").value.trim();
    const usernameErr = document.getElementById("usernameError");
    const passwordErr = document.getElementById("passwordError");

    // validate username input not blank
    if (!username) {
        usernameErr.innerText = "Please enter username.";
    } else {
        usernameErr.innerText = "";
    }

    // validate password not blank
    if (!password) {
        passwordErr.innerText = "Please enter password.";
    } else {
        passwordErr.innerText = "";
    }

    // check if both username and password are entered
    if (username && password) {
        // submit the form
        form.submit();
    }
});

//show or hide password
function togglePassword() {
    var passwordInput = document.getElementById("password");
    var showPasswordCheckbox = document.getElementById("show-password");
	if (showPasswordCheckbox.checked) {
		passwordInput.type = "text";
	} else {
		passwordInput.type = "password";
	}
}

//show/hide form function of the button
function showLoginForm() {
	var form = document.getElementById("loginForm");
	if (form.style.display === "block") {
		form.style.display = "none";
	} else {
		form.style.display = "block";
	}
}

