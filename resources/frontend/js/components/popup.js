// $(function () {
/*$(document).on('click', '.popup-open', function (event) {
     event.preventDefault();
     $('.popup-bg').fadeIn(300);
 });

 $(document).on('click', '.popup-close', function () {
    $('.popup-bg').fadeOut(300);
 });*/

// });

$(function () {
    $(document).on('click', '.auth__wrap-cross', function (e) {
        e.preventDefault();
        $('.auth').fadeOut(300);
    });

    $(document).on('click', '.popup-open', function (e) {
        e.preventDefault();
        $('.auth').fadeIn(300);
    });
})
