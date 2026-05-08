$(document).ready(function () {
    $("#navbar-toggle").click(function () {
        $("#responsive-menu").stop().slideToggle();
    });

    function hide_responsive_menu() {
        $("#responsive-menu").stop().slideUp();
        $("#responsive-menu .sub-menu").stop().slideUp();
    }

    $(window).resize(function() {
        hide_responsive_menu();
    });
    $(window).scroll(function() {
        hide_responsive_menu();
    });
});