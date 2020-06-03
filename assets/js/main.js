 jQuery(document).ready(function(jQuery){
jQuery(".all-portfolios").isotope({
itemSelector : '.single-portfolio',

layoutMode: 'fitRows',
});
jQuery('ul.filter li').click(function(){
jQuery("ul.filter li").removeClass("active");
jQuery(this).addClass("active");
 
var selector = jQuery(this).attr('data-filter');
jQuery(".all-portfolios").isotope({
	
filter: selector,
animationOptions: {
duration: 750,
easing: 'linear',
queue: false,
}
});
return false;
});
});




jQuery(document).ready(function () {

	
/*----------------------------------------------------*/
/*  Animated Progress Bars
/*----------------------------------------------------*/

    jQuery('.skills li').each(function () {
        jQuery(this).appear(function() {
          jQuery(this).animate({opacity:1,left:"0px"},800);
          var b = jQuery(this).find(".progress-bar").attr("data-width");
          jQuery(this).find(".progress-bar").animate({
            width: b + "%"
          }, 1300, "linear");
        }); 
    });   

/*----------------------------------------------------*/
/* Crousel Team 
/*----------------------------------------------------*/
	jQuery('.all_team').owlCarousel({
		items:4,
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		smartSpeed:3000,
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:4
			}
		}
	})
	
/*----------------------------------------------------*/
/* Testimonial crousel 
/*----------------------------------------------------*/
	jQuery('.all_tstm').owlCarousel({
		items:1,
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
		smartSpeed:3000,	
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
	})
	
/*----------------------------------------------------*/
/* Happy Client crousel 
/*----------------------------------------------------*/
	jQuery('.al_clt').owlCarousel({
		items:6,
		loop:true,
		margin:30,
		nav:true,
		autoplay:true,
		smartSpeed:3000,	
		navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
		responsive:{
			0:{
				items:1
			},
			600:{
				items:6
			},
			1000:{
				items:6
			}
		}
	})

	
	
/*preloder*/
jQuery(window).load(function() { // makes sure the whole site is loaded
	jQuery('#status').fadeOut(); // will first fade out the loading animation
	jQuery('#loader-wrapper').delay(200).fadeOut('slow'); // will fade out the white DIV that covers the website.
	jQuery('body').delay(200).css({'overflow-x':'hidden'});
})	
	
	
	
});

