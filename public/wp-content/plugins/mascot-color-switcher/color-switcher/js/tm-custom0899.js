
(function($) {
    "use strict";

	jQuery('.tm-color-switcher').on('change keyup', '.tm-custom-field', function(el) {

		var field = jQuery(this).data('field'),
			val = jQuery(this).val(),
			bodyStyles = window.getComputedStyle(document.body);

		document.documentElement.style.setProperty('--' + field, val);
		document.documentElement.style.setProperty('--main-darker', ltxColorLuminance(bodyStyles.getPropertyValue('--main'), -0.05));
	});


	jQuery(document).on('click', '.tm-font-selector', function(el) {

		var font = jQuery(this).data('font'),
			bodyStyles = window.getComputedStyle(document.body);

		console.log(jQuery(this).data('font-headers'));
		
		document.documentElement.style.setProperty('--font-headers', jQuery(this).data('font-headers'));
		document.documentElement.style.setProperty('--font-main', jQuery(this).data('font-main'));
	});



})(jQuery);