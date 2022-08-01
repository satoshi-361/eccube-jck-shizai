$(function() {
    $('.nav-tabs a').click(function() {
        $('.nav-tabs a').removeClass('active');
        $(this).addClass('active');
    });
    $('.side_show').click(function() {
        $('.hover_panel').addClass('show');
        $('#sidebar').addClass('show');
    })
    $('.hover_panel').click(function() {
        $(this).removeClass('show');
        $('#sidebar').removeClass('show');
    })
});