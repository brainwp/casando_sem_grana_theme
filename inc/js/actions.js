
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

