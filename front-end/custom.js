$(function() {

    $('.form-check').on('click', function() {
        $('.form-check').removeClass('form-check--active');
        $(this).addClass('form-check--active');
    });

});