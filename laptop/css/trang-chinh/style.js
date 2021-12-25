$(document).ready(function() {
    $('.content-small').slideUp();
    $('.title-big').on('click', function(event){
        event.preventDefault();
        $(this).next().slideToggle();
    })
});