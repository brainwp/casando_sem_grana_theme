

jQuery(function($) {
	$('#categorychecklist input[type="checkbox"]').click(function () {
		$(this).parents('li').find('ul.children').toggle(this.checked);
	});
});