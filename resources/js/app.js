require('./bootstrap');

$(document).ready(function () {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 10) {
            $("#navbar").addClass('menuScroll');
            $("#img-logo").attr("src","/img/lalo-codes-white.png");
        } else {
            $("#navbar").removeClass('menuScroll');
            $("#img-logo").attr("src","/img/lalo-codes-black.png");
        }
    });

    $("#lc-btn-navbar").on('click', function(){
        $("#lc-hamburguer").toggleClass('lc-hamburguer-active');
    });

    $(".nav-item").on('click', function(){
        if ($(window).width() <= 991) {
            $("#lc-btn-navbar").click();
        }
    });

    var about = $('#about').offset().top,
        portfolio = $('#portfolio').offset().top,
        contact = $('#contact').offset().top;

    $('#btn-about').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: about
        }, 1000);
    });

    $('#btn-portfolio').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: portfolio
        }, 1000);
    });

    $('#btn-contact').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({
            scrollTop: contact
        }, 1000);
    });
});