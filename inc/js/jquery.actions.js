JQuery(document).ready(function($) {
    $(".menu-hide-home").hide();
    $(".mtoggle").click(function() {
        $(".menu-hide-home").slideToggle();           
    });
});

/* START | Menu de Categorias */
$(function() {

	$('ul.sub-category-hide').hide();
    $('.nav-menu-toogle li.active-toggle').click(function() {
        $(this).find('ul.sub-category-hide').slideToggle('fast', function() {
            $(this).find('ul.sub-category-hide').toggleClass('aberto');
        });
        //return false;
    });
});
/* END | Menu de Categorias */

/* START | Menu de Categorias */
$(function() {
    //$('ul.sub-category-hide li').hide();
    var $links = $('.nav-menu-toogle .active-toggle');
    $links.click(function(){
        $('.sub-category-hide').fadeOut(300);
        //$links.removeClass('selected');
        $('ul#child-' + $(this).data('category')).slideToggle('slow');
        //$(this).addClass('selected');
        //$('ul#child-' + $(this).data('category')).toggleClass();
    });
});
/* END | Menu de Categorias */