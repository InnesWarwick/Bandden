document.addEventListener("DOMContentLoaded", function() {
    var submitButton = document.querySelector('.submitButton');
    submitButton.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default form submission
        validateForm();
    });
});

function validateForm() {
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var query = document.getElementById("query").value;
    var fnameError = document.getElementById("fnameError");
    var lnameError = document.getElementById("lnameError");
    var emailError = document.getElementById("emailError");
    var queryError = document.getElementById("queryError");
    var isValid = true;

    // Reset errors and remove error class
    fnameError.innerHTML = "";
    lnameError.innerHTML = "";
    emailError.innerHTML = "";
    queryError.innerHTML = "";
    
    fnameError.classList.remove("error");
    lnameError.classList.remove("error");
    emailError.classList.remove("error");
    queryError.classList.remove("error");

    // Validate first name
    if (firstname === "") {
        fnameError.innerHTML = "Please enter your first name";
        fnameError.classList.add("errorc");
        isValid = false;
    }

    // Validate last name
    if (lastname === "") {
        lnameError.innerHTML = "Please enter your last name";
        lnameError.classList.add("errorc");
        isValid = false;
    }

    // Validate email
    if (email === "") {
        emailError.innerHTML = "Please enter your email";
        emailError.classList.add("errorc");
        isValid = false;
    } else {
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(email)) {
            emailError.innerHTML = "Please enter a valid email address";
            emailError.classList.add("errorc");
            isValid = false;
        }
    }

    // Validate query
    if (query === "") {
        queryError.innerHTML = "Please enter your query";
        queryError.classList.add("errorc");
        isValid = false;
    }

    if (isValid) {
        // If form is valid, submit the form
        document.getElementById("contactForm").submit();
    }
}
