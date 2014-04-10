JQuery(document).ready(function($) {
    $(".menu-hide-home").hide();
    $(".mtoggle").click(function() {
        $(".menu-hide-home").slideToggle();           
    });
});