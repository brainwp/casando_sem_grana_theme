
/* START | Menu de Categorias */
jQuery(function() {
	var jQuerylinks = jQuery('.nav-menu-toogle .active-toggle');
	jQuerylinks.click(function(){
		
		jQuery('.sub-category-hide').fadeOut(300);
		jQuery('ul#child-' + jQuery(this).data('category')).slideToggle('slow');
	});
});
/* END | Menu de Categorias */

/* Mobile START | Menu de Categorias */
jQuery(function() {
	var jQuerylinks = jQuery('.navbar-nav .dropdown');
	jQuerylinks.click(function(){
		jQuery('.sub-category-hide').fadeOut(300);
		jQuery('ul#child-' + jQuery(this).data('category')).slideToggle('slow');
	});
	jQuery( '.navbar-toggle' ).click(function(){
		jQuery('.sub-category-hide').hide(300);
		//$('ul#child-' + $(this).data('category')).slideToggle('slow');
	});
	jQuery('.sub-category-hide .esconder').click(function(){
		jQuery('.sub-category-hide').hide(300);
	})
});
/* Mobile END | Menu de Categorias */
