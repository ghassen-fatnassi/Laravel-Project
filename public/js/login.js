var nameError = true,
    emailError = true,
    phoneError=true,
    passwordError = true,
    passConfirmError = true,
    positionError =true;

$(document).ready(function () {
"use strict";

// Detect browser for css purpose
if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
    $('.form form label').addClass('fontSwitch');
}


//hide and unhide password
$('.toggle-password').click(function() {
    $(this).toggleClass('password-reveal');
    var input = $($(this).prev('input'));
    if (input.attr('type') === 'password') {
      input.attr('type', 'text');
      $(this).find('i').removeClass('fa-eye-slash').addClass('fa-eye');
    } else {
      input.attr('type', 'password');
      $(this).find('i').removeClass('fa-eye').addClass('fa-eye-slash');
    }
  });

// Label effect
$("input").focus(function () {
    $(this).siblings("label").addClass("active");
});



// Form validation 
$("input").blur(function () {

    if ($(this).hasClass("position")) {
        validatePosition();
    }

    // Full Name
    if ($(this).hasClass("name")) {
        if ($(this).val().trim() ===""){
            $(this)
                .siblings("span.error")
                .text("Please enter your full name")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            nameError = true;
        }else if (/^\s|\s\s+|\s$/.test($(this).val()) || !/^(?:[A-Z][a-z]*)(?: [A-Z][a-z]*)*$/.test($(this).val().trim()) || $(this).val().trim().length <= 5 || $(this).val().trim().length > 100 ) {
            $(this)
                .siblings("span.error")
                .text("Invalid full name")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            nameError = true;
        } else {
            $(this)
                .siblings(".error")
                .text("")
                .fadeOut()
                .parent(".form-group")
                .removeClass("hasError");
            nameError = false;
        }
    }
    

    // Email 
    if ($(this).hasClass("email") || $(this).hasClass("loginEmail")) {
        var email = $(this).val();
        var emailRegex = /^(?!\.)(?!.*\.$)[a-zA-Z0-9.]+@[a-zA-Z0-9.]+\.[a-zA-Z0-9.]+(?!.*\.$)(?<!\.)$/;
    
        if (email.trim() === "") {
            $(this)
                .siblings("span.error")
                .text("Please enter your email address")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            emailError = true;
        } else if (!emailRegex.test(email) || $(this).val().trim().length <= 4 || $(this).val().trim().length > 254) {
            $(this)
                .siblings("span.error")
                .text("Invalid email address")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            emailError = true;
        } else {
            $(this)
                .siblings(".error")
                .text("")
                .fadeOut()
                .parent(".form-group")
                .removeClass("hasError");
            emailError = false;
        }
    }
    

    // Phone number 
    if ($(this).hasClass("phone")) {
        var phoneNumber = $(this).val();

        if (phoneNumber.trim() === "") {
            $(this)
                .siblings("span.error")
                .text("Please enter your phone number")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            phoneError = true;
        } else if (!/^[1-9]\d{7}$/.test(phoneNumber) || $(this).val().trim().length != 8 ) {
            $(this)
                .siblings("span.error")
                .text("Invalid phone number")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            phoneError = true;
        } else {
            $(this)
                .siblings(".error")
                .text("")
                .fadeOut()
                .parent(".form-group")
                .removeClass("hasError");
            phoneError = false;
        }
    }


    // Password 
    if ($(this).hasClass("password") || $(this).hasClass("loginPassword")) {
        var password = $(this).val();
        var passwordStrengthRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*_?&])[A-Za-z\d@$!%*_?&]{8,}$/;
        
        if (password.trim() ==="") {
            $(this)
                .siblings("span.error")
                .text("Please enter your password")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            passwordError = true; 
        
        }else if(password.trim().length < 8) {
            $(this)
                .siblings("span.error")
                .text("Password must be at least 8 characters long")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            passwordError = true;

        } else if (password.trim().length > 50) {
            $(this)
                .siblings("span.error")
                .text("Password is too long")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            passwordError = true; 
        
        }else if (!passwordStrengthRegex.test(password)) {
            $(this)
                .siblings("span.error")
                .text("Password must contain uppercase letter(s), lowercase letter(s), number(s), and special caracter(s)") 
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            passwordError = true;
        } else {
            $(this)
                .siblings(".error")
                .text("")
                .fadeOut()
                .parent(".form-group")
                .removeClass("hasError");
            passwordError = false;
        }
    }

    // Password confirmation
    if ($(this).hasClass("password_confirmation")) {
        var confirmPassword = $(this).val();
        var password = $(".password").val();

        if (confirmPassword.trim() ==="") {
            $(this)
                .siblings("span.error")
                .text("Please confirm your password")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            passConfirmError = true; 
        }else if (confirmPassword.trim() !== password.trim()) {
            $(this)
                .siblings(".error")
                .text("Passwords don't match")
                .fadeIn()
                .parent(".form-group")
                .addClass("hasError");
            passConfirmError = true;
        } else {
            $(this)
                .siblings(".error")
                .text("")
                .fadeOut()
                .parent(".form-group")
                .removeClass("hasError");
            passConfirmError = false;
        }
    }

    // label effect
    if ($(this).val().length > 0) {
        $(this).siblings("label").addClass("active");
    } else {
        $(this).siblings("label").removeClass("active");
    }


});

// form switch
$('a.switch').click(function (e) {
    $(this).toggleClass('active');
    e.preventDefault();

    // Reset form fields when switching
    resetFormFields();

    // Toggle between login and signup forms
    if ($('a.switch').hasClass('active')) {
        $(this).parents('.form-peice').addClass('switched').siblings('.form-peice').removeClass('switched');
    } else {
        $(this).parents('.form-peice').removeClass('switched').siblings('.form-peice').addClass('switched');
    }
});

// Form submit
$('form.signup-form').submit(function (event) {
    validatePosition();

    if (nameError || emailError || phoneError || passwordError || passConfirmError || positionError){
        event.preventDefault();
        $('.name, .password_confirmation, .email, .phone, .password').blur();
    } else {
        $('.signup, .login').addClass('switched');

        setTimeout(function () { $('.signup, .login').hide(); }, 700);
        setTimeout(function () { $('.brand').addClass('active'); }, 300);
        setTimeout(function () { $('.heading').addClass('active'); }, 600);
        setTimeout(function () { $('.success-msg p').addClass('active'); }, 900);
        setTimeout(function () { $('.success-msg a').addClass('active'); }, 1050);
        setTimeout(function () { $('.form').hide(); }, 700);
    }
});

// View articles link
$('a.profile').on('click', function () {
    location.reload(true);
});

//Login  Form submit
$('form.login-form').submit(function (event) {
   
    if (emailError || passwordError ){
        event.preventDefault();
        $('.loginEmail, .loginPassword').blur();
    } 
});

// Forget password Form submit
$('form.forgot_password-form').submit(function (event) {
    
    if (emailError){
        event.preventDefault();
        $('.email').blur();
    } 
});


});


// Validate position 
$(document).on("change", function (event) {
var $target = $(event.target);

// Check if the input event occurred on the position select element
if ($target.hasClass("position")) {
    validatePosition();
}
});


// Function to validate position 
function validatePosition() {
var selectedPosition = $(".position").val();
var validPositions = ['junior', 'senior', 'bureau', 'alumini'];


if (!selectedPosition){
    $(".position")
        .siblings("span.error")
        .text("Please select your position")
        .fadeIn()
        .parent(".form-group")
        .addClass("hasError");
    positionError = true;
}else if (!validPositions.includes(selectedPosition)) {
    $(".position")
        .siblings("span.error")
        .text("Invalid position selected")
        .fadeIn()
        .parent(".form-group")
        .addClass("hasError");
    positionError = true;
} else {
    $(".position")
        .siblings(".error")
        .text("")
        .fadeOut()
        .parent(".form-group")
        .removeClass("hasError");
    positionError = false;
}
}

// Function to reset form fields
function resetFormFields() {
$('form').find('input[type=text], input[type=email], input[type=password], select').val('').removeClass('hasError');
$('form').find('label').removeClass('active');
$('form').find('.error').text('').fadeOut().parent(".form-group").removeClass('hasError');
}


