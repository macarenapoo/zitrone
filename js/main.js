$(document).ready( function(){

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
		adaptiveHeight: true,
		infinite: true,
		speed: 1000,
		autoplay: true,
		autoplaySpeed: 7000,
		pauseOnHover: false,
		arrows: false
	});
}