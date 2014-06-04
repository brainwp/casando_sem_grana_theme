jQuery(document).ready(function() {
    var max = 0;
    jQuery(".father-category").each(function(){
        if (jQuery(this).height() > max)
		max = jQuery(this).height(); 
    });
    /*jQuery(".father-category").height(max);*/
    jQuery(".link-anchor").on("click",function(event){
	event.preventDefault();
        jQuery("html,body").animate({scrollTop:jQuery(this.hash).offset().top}, 1000);
	})
});