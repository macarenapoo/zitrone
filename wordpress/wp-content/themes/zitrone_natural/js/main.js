var breakpoint_lg = '1024';
var breakpoint_md = '800';
var breakpoint_sm = '480';

jQuery.noConflict();
(function( $ ) {
  $(function() {
    // More code using $ as alias to jQuery
  });
	$(document).ready( function(){
		$('.clients-slider').css('display', 'block');
		mobile_menu();
		homepage_form();
		init_slick();
		$('.unloaded').each(function(){
			$(this).removeClass('unloaded');
		});
    $('.list-checkbox-wrap input[type=checkbox]').iCheck();
	});

	// Fixed Submenu

	$(document).on('scroll', function fixedMenu(){

		var header_height = parseInt($('.js-header').css('height'));
		var scroll = $('body').scrollTop();

		if(scroll > header_height){
			$('body').addClass('fixed-submenu');
		}else{
			$('body').removeClass('fixed-submenu');
		}
	});

	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 64
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

	function init_slick(){
		$("#homepage-clients-slider-js").slick({
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
		        slidesToScroll: 1,
		        dots: false
		      }
		    }
		    // You can unslick at a given breakpoint now by adding:
		    // settings: "unslick"
		    // instead of a settings object
		  ]
		});

		$("#home_testimonials ul.testimonials").slick({
			infinite: true,
			speed: 1000,
			autoplay: true,
			autoplaySpeed: 7000,
			pauseOnHover: false,
			arrows: false
		});

    $("#clients_testimonials ul.testimonials").slick({
			infinite: true,
			speed: 1000,
			autoplay: true,
			autoplaySpeed: 7000,
			pauseOnHover: false,
			arrows: false,
      adaptiveHeight: true
		});

		$("#clients-slider-js").slick({
			autoplay: true,
			autoplaySpeed: 7000,
			speed: 1500,
			dots: true,
      arrows: true
		});


		$('.home-form').slick({
			nextArrow: '#home_form_next_btn',
			prevArrow: '#home_form_prev_btn',
			draggable: false,
			swipe: false,
			adaptiveHeight: true
		});

	  $('.js-tabs-panel-content').slick({
	  	accessibility: false,
	  	arrows: false,
	  	draggable: false,
	  	infinite: false
		});

		$('.js-tabs-panel-nav li').each(function(index){
			$(this).on('click', function(){
				if(window.matchMedia('(min-width: 0px) and (max-width: 800px)').matches){
					if($(this).children('.content-mobile').css('display') === 'none'){
						$('.js-tabs-panel-nav .content-mobile').slideUp();
						$(this).children('.content-mobile').slideToggle();
						$('.js-tabs-panel-nav li').removeClass('mobile-active');
						$(this).addClass('mobile-active');
					}
				}else{
					$('.js-tabs-panel-content').slick('slickGoTo', index);
					$('.js-tabs-panel-nav li.active').removeClass('active');
					$(this).addClass('active');
				}
			});
		});
	}

	function homepage_form(){
		$('form .form_checkbox li').on('click', function(){
			$(this).toggleClass('checked');
		});
	}

	function mobile_menu(){
		$('#mobile-menu-js').css('display', 'none');
		$('#mobile-menu-icon').on('click', function(){
			$('#mobile-menu-js').slideToggle();
		});
	}

	function init_odometer(){
		$('.odometer').each(function(){
			var data = $(this).data('value');
			if(data){
				$(this).html(data);
			}
		});
	}

	// gender stats animate when visible
	$(document).on('scroll', function(){
		if($('#gender-stats').length > 0){
			var section = $('#gender-stats').closest('section');
			var section_top = $(section).offset().top;
			var scroll = $(document).scrollTop();
			var window_height = $(window).height();
			if(scroll + window_height >= section_top){
				init_odometer();
			}
		}
	});
})(jQuery);
