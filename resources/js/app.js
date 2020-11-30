$(document).ready(function () {
    $('.title').css({
        opacity: 0,
        margintTop: 0
    });

    $('.title').animate({
        opacity: 1,
        margintTop: '150px'
    }, 2500);

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