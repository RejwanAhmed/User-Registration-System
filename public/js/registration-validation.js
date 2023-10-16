$(document).ready(function () {
    $("#registration-form").submit(function (event) {
        // Password and Confirm Password validation
        var password = $("#password").val();
        var confirmPassword = $("#password_confirmation").val();

        if (password !== confirmPassword) {
            $("#error_password_confirmation").html(
                "Password Confirmation Does Not Match!!"
            );
            event.preventDefault(); // Prevent form submission
        }

        // Email format validation
        var email = $("#email").val();
        if (!isValidEmail(email)) {
            $("#error_email").html("Email Address Is Not Valid!!");
            event.preventDefault(); // Prevent form submission
        }
    });

    function isValidEmail(email) {
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+/;
        return emailRegex.test(email);
    }
});
