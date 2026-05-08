$(document).ready(function () {
    $("#navbar-toggle").click(function () {
        $("#responsive-menu").stop().slideToggle();
    });

    function hide_responsive_menu() {
        $("#responsive-menu").stop().slideUp();
        $("#responsive-menu .sub-menu").stop().slideUp();
        $('.responsive-menu-toggle').removeClass('open');
    }

    $(window).resize(function() {
        hide_responsive_menu();
    });
    $(window).scroll(function() {
        hide_responsive_menu();
    });

    $('.responsive-menu-toggle').click(function() {
        // $(this).toggleClass("fa-angle-down fa-angle-up");
        $(this).toggleClass('open');
        $(this).next('.sub-menu').stop().slideToggle();
    });
});