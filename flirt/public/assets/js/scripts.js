$(document).ready(function() {
    $(".one_four_margin li:nth-of-type(4n)").css("margin-right", "0");
    $(".one_mini_four_margin li:nth-of-type(4n)").css("margin-right", "0");
    $(".one_two_margin li:nth-of-type(2n)").css("margin-right", "0");
    $(".title").after("<span class='after'></span>");
    $(".title").before("<span class='before'></span>");

    $(".accordion h2").each(function() {
        $(this).click(function() {
            $(".accordion div").slideUp();
            $(this).next("div").slideDown();
        });
    });
    $(".navigation li").hover(function() {
        $(this).children("ul").stop().slideDown();
    }, function() {
        $(this).children("ul").stop(true, true).slideUp();
    });

    $('.bxslider').bxSlider({
        minSlides: 5,
        maxSlides: 5,
        slideWidth: 188,
        slideMargin: 0,
        pager: 0,
        controls: true
    });

    /* LOGIN VALIDATION ----------------------------------------------------- */
    $("form#login-form").submit(function(e) {
        var process = true;
        var username = $("#login-username");
        var password = $("#login-password");

        if (username.val() === "") {
            username.addClass("error");
            process = false;
        }

        if (password.val() === "") {
            password.addClass("error");
            process = false;
        }

        if (!process) {
            e.preventDefault();
        }
    });

    $("form#login-form .required").focus(function() {
        $(this).removeClass("error");
    });
    /* ---------------------------------------------------------------------- */

    /* FORGOT PASSWORD VALIDATION ------------------------------------------- */
    $("form#forgotpassword-form-password").submit(function(e) {
        var input = $("#forgot-input");

        if (input.val() === "") {
            input.addClass("error");
            e.preventDefault();
        }
    });
    $("form#forgotpassword-form-email").submit(function(e) {
        var input = $("#forgot-input");
        if (input.val() === "" || !isEmail(input.val())) {
            input.addClass("error");
            e.preventDefault();
        }
    });

    $("form#forgotpassword-form .required").focus(function() {
        $(this).removeClass("error");
    });
    /* ---------------------------------------------------------------------- */
});

function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}

function redirect(url){
    setTimeout(function(){
        window.location.href = '';
    }, 3000);
}