
/* Anima Toogle Menu - Home. */
$(function() {

    $("#toggler").hide();
    $("div.hover-cat").hide();
    $(".nav-menu-toogle").click(function() {
        $("#toggler").slideToggle('show');
    	//$("div.hover-cat").show();
    });
});





/*jQuery(document).ready(function(){

	jQuery('.hover-cat').find('span').each(function(){

		if( jQuery(this).hasClass('children')  ){

			jQuery(this).parent().find('a').addClass('parent'); 

		}

	});

})*/


