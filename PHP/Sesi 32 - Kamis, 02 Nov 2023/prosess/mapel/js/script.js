$(document).ready(function() {
    $('input').focus(function() {
        $(this).css('background-color', '#f9f2f4');
    });
    $('input').blur(function() {
        $(this).css('background-color', '#ffffff');
    });
});