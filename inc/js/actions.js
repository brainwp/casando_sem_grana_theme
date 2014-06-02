
/* START | Menu de Categorias */
$(function() {
	var $links = $('.nav-menu-toogle .active-toggle');
	$links.click(function(){
		
		$('.sub-category-hide').fadeOut(300);
		$('ul#child-' + $(this).data('category')).slideToggle('slow');
	});
});
/* END | Menu de Categorias */

/* Mobile START | Menu de Categorias */
$(function() {
	var $links = $('.navbar-nav .dropdown');
	$links.click(function(){
		$('.sub-category-hide').fadeOut(300);
		$('ul#child-' + $(this).data('category')).slideToggle('slow');
	});
	$( '.navbar-toggle' ).click(function(){
		$('.sub-category-hide').hide(300);
		//$('ul#child-' + $(this).data('category')).slideToggle('slow');
	});
	$('.sub-category-hide .esconder').click(function(){
		$('.sub-category-hide').hide(300);
	})
});
/* Mobile END | Menu de Categorias */
