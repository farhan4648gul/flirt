$(document).ready(function() {
    $(".numeric_only").forceNumericOnly();

    $("form#register_form").submit(function(e) {
        var process = true;

        process = checkUsername();
        process = checkEmail();
        process = checkPassword();
        process = checkRepeatPassword();
        process = checkDOB();
        process = checkCountry();
        process = checkZip();
        process = checkCaptcha();

        $("form#register_form .required").each(function() {
            if ($(this).val() === "") {
                $(this).addClass("error");
                process = false;
            }
        });

        if (!process) {
            e.preventDefault();
        }
    });

    $("form#register_form .required").focus(function() {
        $(this).removeClass("error");
    });

    $("form#register_form .email").focus(function() {
        if ($(this).hasClass("error")) {
            $(this).keydown(function() {
                if (isEmail($(this).val())) {
                    $(this).removeClass("error");
                }
            });
        }
    });

    $("form#register_form .required").focusin(function() {
        $(this).removeClass("error");
    });

    $("form#register_form  .required").focusout(function() {
        if ($(this).val() === "") {
            $(this).addClass("error");
        } else {
            $(this).removeClass("error");
        }
    });

    $("#register_email").focusin(function() {
        $(this).removeClass("error");
    });
    $("#register_email").focusout(checkEmail);


    $("#register_username").focusin(function() {
        $(this).removeClass("error");
    });
    $("#register_username").focusout(checkUsername);

    $("#register_password").focusin(function() {
        $(this).removeClass("error");
    });
    $("#register_password").focusout(checkPassword);

    $("#register_password_repeat").focusin(function() {
        $(this).removeClass("error");
    });
    $("#register_password_repeat").focusout(checkRepeatPassword);
    
    $("#register_day, #register_month, #register_year").change(checkDOB);
    $("#register_country").change(checkCountry);
    $("#register_zip").focusout(checkZip);
    $("#register_captcha").focusout(checkCaptcha);
});

function checkPassword() {
    var registerPassword = $("#register_password");
    var registerPasswordError = $("#password_error");
    var value = registerPassword.val();

    if (value === "") {
        registerPassword.addClass("error");
        registerPasswordError.removeClass("success").addClass("error");
        registerPasswordError.text("Cannot be empty.");
        return false;
    } else if (value.length < 6) {
        registerPassword.addClass("error");
        registerPasswordError.removeClass("success").addClass("error");
        registerPasswordError.text("Minimum 6 characters.");
        return false;
    } else {
        registerPassword.removeClass("error");
        registerPasswordError.removeClass("error").addClass("success");
        registerPasswordError.text("Password OK.");
        return true;
    }
}

function checkRepeatPassword() {
    var registerPasswordRepeat = $("#register_password_repeat");
    var registerPasswordError = $("#password_repeat_error");
    var value = registerPasswordRepeat.val();

    if (value === "") {
        registerPasswordRepeat.addClass("error");
        registerPasswordError.removeClass("success").addClass("error");
        registerPasswordError.text("Cannot be empty.");
        return false;
    } else if (value.length < 6) {
        registerPasswordRepeat.addClass("error");
        registerPasswordError.removeClass("success").addClass("error");
        registerPasswordError.text("Minimum 6 characters.");
        return false;
    } else if (value !== $("#register_password").val()) {
        registerPasswordRepeat.addClass("error");
        registerPasswordError.removeClass("success").addClass("error");
        registerPasswordError.text("Not equal passwords.");
        return false;
    } else {
        registerPasswordRepeat.removeClass("error");
        registerPasswordError.removeClass("error").addClass("success");
        registerPasswordError.text("Password OK.");
        return true;
    }
}

function checkUsername() {
    var registerUsername = $("#register_username");
    var registerUsernameErrors = $("#username_error");
    var value = registerUsername.val();

    if (value !== "") {
        $.ajax({
            url: "../check-username-exist",
            cache: false,
            type: "POST",
            data: "register_username=" + value,
            success: function(data) {
                if (data === "not-exist") {
                    registerUsername.removeClass("error");
                    registerUsernameErrors.removeClass("error").addClass("success");
                    registerUsernameErrors.text("Nick ist verfügbar.");
                    return true;
                } else {
                    registerUsername.addClass("error");
                    registerUsernameErrors.removeClass("success").addClass("error");
                    registerUsernameErrors.text("Dieser Nickname ist schon vergeben, bitte wähle ein anderen Nicknamen aus.");
                    return false;
                }
            }
        });
    } else {
        registerUsername.addClass("error");
        registerUsernameErrors.removeClass("success").addClass("error");
        registerUsernameErrors.text("Cannot be empty.");
        return false;
    }
}

function checkEmail() {
    var registerEmail = $("#register_email");
    var registerEmailError = $("#email_error");
    var value = registerEmail.val();

    if (value !== "" && isEmail(value)) {
        $.ajax({
            url: "../check-email-exist",
            cache: false,
            type: "POST",
            data: "register_email=" + value,
            success: function(data) {
                if (data === "not-exist") {
                    registerEmail.removeClass("error");
                    registerEmailError.removeClass("error").addClass("success");
                    registerEmailError.text("E-Mail ist ok.");
                    return true;
                } else {
                    registerEmail.addClass("error");
                    registerEmailError.removeClass("success").addClass("error");
                    registerEmailError.text("Diese Mail Adresse ist gesperrt. Damit kannst du dich nicht mehr anmelden.");
                    return false;
                }
            }
        });
    } else {
        registerEmail.addClass("error");
        registerEmailError.removeClass("success").addClass("error");
        registerEmailError.text("Das ist keine reale E-Mail adresse, bitte korregiere diese.");
        return false;
    }
}

function checkDOB(){
    var registerDay = $("#register_day");
    var registerMonth = $("#register_month");
    var registerYear = $("#register_year");
    var registerDateError = $("#date_error");
    
    if(registerDay.val() === "" || registerMonth.val() === "" || registerYear.val() === ""){
        registerDateError.removeClass("success").addClass("error");
        registerDateError.text("Date cannot be empty.");
        return false;
    }else{
        registerDateError.removeClass("error").addClass("success");
        registerDateError.text("Date OK.");
        return true;
    }
}

function checkCountry(){
    var registerCountry = $("#register_country");
    var registerCountryError = $("#register_country_error");
    if(registerCountry.val() === ""){
        registerCountryError.removeClass("success").addClass("error");
        registerCountryError.text("Country cannot be empty.");
        return false;
    }else{
        registerCountryError.removeClass("error").addClass("success");
        registerCountryError.text("Country OK.");
        return true;
    }
}

function checkZip(){
    var registerZip = $("#register_zip");
    var registerZipError = $("#register_zip_error");
    
    if(registerZip.val() === ""){
        registerZipError.removeClass("success").addClass("error");
        registerZipError.text("Cannot be empty.");
        return false;
    }else{
        registerZipError.removeClass("error").addClass("success");
        registerZipError.text("ZIP OK.");
        return true;
    }
}

function checkCaptcha(){
    var registerCaptcha = $("#register_captcha");
    var registerCaptchaError = $("#register_captcha_error");
    
    if(registerCaptcha.val() === ""){
        registerCaptchaError.removeClass("success").addClass("error");
        registerCaptchaError.text("Cannot be empty.");
        return false;
    }else{
        registerCaptchaError.removeClass("error").addClass("success");
        registerCaptchaError.text("");
        return true;
    }
}

$.fn.forceNumericOnly = function() {
    return this.each(function() {
        $(this).keydown(function(e) {
            var key = e.charCode || e.keyCode || 0;
            // allow backspace, tab, delete, arrows, numbers and keypad numbers ONLY
            // home, end, period, and numpad decimal
            return (
                    key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    key == 110 ||
                    key == 190 ||
                    (key >= 35 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
        });
    });
};

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}