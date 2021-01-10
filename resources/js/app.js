$(document).ready(function () {
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll > 10) {
            $("#navbar").addClass('menuScroll');
        } else {
            $("#navbar").removeClass('menuScroll');
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

    $(".input").keyup(function() {
        if( $(this).val() ) {
            $(this).addClass('not-empty');
         } else {
            $(this).removeClass('not-empty');
         }
    });
});