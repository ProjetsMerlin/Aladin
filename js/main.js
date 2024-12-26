"use strict"
jQuery(function ($) {
	/* FAQ */
	if( $('.faq')) {
		$('.faq .faq_question').on('click', function(e) {
			$('.faq .faq_response').addClass('hidden')
			$(this).next(".faq_response").removeClass('hidden')
		})
	}

	if( $('#burger_menu')) {
		$('#burger_menu').on('click', function(e) {
			e.preventDefault()
			$('.header_menu').toggleClass('hidden open').parent().toggleClass('show_menu')
			$('body').toggleClass('overflow-y-hidden')
		})
	}
})