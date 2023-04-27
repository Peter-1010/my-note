$(function () {

    $('h2.saved').fadeIn(1000).delay(5000).fadeOut(800);

    $('a.delete').hover(function () {
       $(this).addClass('fa-shake');
    });

    $('a.delete').mouseleave(function () {
        $(this).removeClass('fa-shake');
    })

    $('#calc_button').click(function () {
       $('#calc_form').toggle(800);
    });

});