$(function() {
    $('.nav-menu-toogle li').click(function() {
        $(this).find('ul.sub-category-hide').slideToggle('fast', function() {
            $(this).find('ul.sub-category-hide').toggleClass('aberto');
        });
        return false;
    });
});