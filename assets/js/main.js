"user strict";
$(document).ready(function () {
    $("#login").on("click", function () {
        $(".account-wrapper h3").html("Login");
        $("#action").val("login");
        $("#submit-btn").html("Login Account");
    });
    $("#register").on("click", function () {
        $(".account-wrapper h3").html("Register");
        $("#action").val("Register");
        $("#submit-btn").html("Register Account");
    });

    $(".menu-item").on("click", function () {
        $(".helement").hide();
        var target = "#" + $(this).data("target");
        $(target).show();
    });
    $(".menu-item").on("click", function () {
        $(".helement").hide();
        var target = "#" + $(this).data("target");
        $(target).show();
    });
});
