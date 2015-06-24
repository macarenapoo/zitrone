$(document).ready( function(){
	$('.clients-slider').css('display', 'block');
	homepage_form();
	init_slick();

});

function init_slick(){
	$("#clients-slider-js").slick({
		infinite: true,
		slidesToShow: 5,
		slidesToScroll: 3,
		speed: 600,
		dots: true,
	});

	$("#testimonials-slider-js").slick({
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 7000,
		pauseOnHover: false,
		arrows: false
	});

	$('.home-form').slick({
		nextArrow: '#home_form_next_btn',
		prevArrow: '#home_form_prev_btn',
		draggable: false,
		adaptiveHeight: true
	});
}

function homepage_form(){
	$('form .form_checkbox li').on('click', function(){
		$(this).toggleClass('checked');
	});
}