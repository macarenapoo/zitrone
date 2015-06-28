var breakpoint_lg = '1024';
var breakpoint_md = '800';
var breakpoint_sm = '480';

$(document).ready( function(){
	$('.clients-slider').css('display', 'block');
	mobile_menu();
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
		responsive: [
	    {
	      breakpoint: breakpoint_md,
	      settings: {
	        slidesToShow: 3,
	        slidesToScroll: 3
	      }
	    },
	    {
	      breakpoint: breakpoint_sm,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
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
		swipe: false,
		adaptiveHeight: true
	});
}

function homepage_form(){
	$('form .form_checkbox li').on('click', function(){
		$(this).toggleClass('checked');
	});
}

function mobile_menu(){
	$('#mobile-menu-icon').on('click', function(){
		$('#mobile-menu-js').slideToggle();
	});
}