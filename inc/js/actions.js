
/* START | Menu de Categorias */
$(function() {
	var $links = $('.nav-menu-toogle .active-toggle');
	$links.click(function(){
		$('.sub-category-hide').fadeOut(300);
		$('ul#child-' + $(this).data('category')).slideToggle('slow');
	});
});
/* END | Menu de Categorias */

