//clear input after refresh page
window.onload = function() {
	document.getElementById("theForm").reset();
};
		
//prompt after form submitted
function showSubmit() {
	alert("Thank you for your feedback. We will reply soon");
    return true;
};
		
//validate form input
function validateForm() {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const enquiry = document.querySelector('input[name="enquiry"]:checked');
    const subject = document.getElementById("feedback").value.trim();

    let isValid = true;
    // Validate name field
    const nameError = document.getElementById("nameError");
    if (name === "") {
        nameError.innerText = "Name is required";
        isValid = false;
    } else {
        nameError.innerText = "";
    }

    // Validate email field
	var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const emailError = document.getElementById("emailError");
    if (email === "") {
        emailError.innerText = "Email is required";
        isValid = false;
    } else if (!emailRegex.test(email)) {
        emailError.innerText = "Please enter a valid email";
        isValid = false;
    } else {
        emailError.innerText = "";
    }

    // Validate phone field
    const phoneError = document.getElementById("phoneError");
    if (phone === "") {
        phoneError.innerText = "Phone is required";
        isValid = false;
    } else if(phone.length<10 || phone.length>11){
		phoneError.innerText = "Please enter a valid phone number";
        isValid = false;
	}
	else {
        phoneError.innerText = "";
    }

    // Validate enquiry field
    const enquiryError = document.getElementById("enquiryError");
    if (!enquiry) {
        enquiryError.innerText = "Please select an enquiry type";
        isValid = false;
    } else {
        enquiryError.innerText = "";
    }

    // Validate subject field
    const subjectError = document.getElementById("subjectError");
    if (subject === "") {
        subjectError.innerText = "Subject is required";
        isValid = false;
    } else {
        subjectError.innerText = "";
    }	
    return isValid;
}