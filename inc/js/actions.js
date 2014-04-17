
/* START | Menu de Categorias */
$(function() {
	$("ul.sub-category-hide").hide();
    $('.nav-menu-toogle li').click(function() {
        $(this).find('ul.sub-category-hide').slideToggle('fast', function() {
            $(this).find('ul.sub-category-hide').toggleClass('aberto');
        });
        return false;
    });
});
/* END | Menu de Categorias */