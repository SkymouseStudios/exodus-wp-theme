$(function() {
    $('.cross').hide();
    $('.menu').hide();
    
    $('.hamburger').click(function() {
        $('.mobile-navigation').show('fast', function() {
            $('.hamburger').hide();
            $('.cross').show();
        });
    });

    $('.cross').click(function() {
        $('.mobile-navigation').hide('fast', function() {
            $('.cross').hide();
            $('.hamburger').show();
        });
    });

    $('.nl-accordion').each(function() {
        $('ul li:first-child input[type=radio]').attr('checked', 'checked');
    });
});
