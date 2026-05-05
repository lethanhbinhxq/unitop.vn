$(document).ready(function () {
    $("#navbar-toggle").click(function () {
        $("#responsive-menu").stop().slideToggle();
    });

    function hide_responsive_menu() {
        $("#responsive-menu").stop().slideUp();
    }

    $(window).resize(function() {
        hide_responsive_menu();
    });
    $(window).scroll(function() {
        hide_responsive_menu();
    });

    $('#sub-menu-toggle').click(function() {
        $(this).find('i').toggleClass("fa-angle-down fa-angle-up");
        $('#responsive-menu .sub-menu').stop().slideToggle();
    });

    $('#main-menu li:first-child').mouseover(function() {
        $('#main-menu .sub-menu').stop().slideDown();
    });

    $('#main-menu .sub-menu').mouseout(function() {
        $(this).stop().slideUp();
    });
});