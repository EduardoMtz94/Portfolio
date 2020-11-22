$(document).ready(function () {
    $('.title').css({
        opacity: 0,
        margintTop: 0
    });

    $('.title').animate({
        opacity: 1,
        margintTop: '150px'
    }, 2500);
});