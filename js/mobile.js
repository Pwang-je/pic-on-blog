//The Document is loaded
$(document).ready(function() {
	//Mobile Menu Script
	$('.side-open').click(function() {

		$('.side-menu').slideToggle(500);
	});
});

$(document).ready(function(){
	$('.nav-icon').click(function(){
		$(this).toggleClass('open');
	});
});

$(document).ready(function(){
	$('.device-hide').hide();
	$('.device-open').click(function(){
		$(this).next('.device-hide').slideToggle(500);
		// $('.device-hide').show();
	});
});


/* 'Aside' Scroll then Fixed aside menu script */
// $(window).scroll(function(){
//     if ($(this).scrollTop() > 635) {
//         $('.aside').addClass('fixed');
//     } else {
//         $('.aside').removeClass('fixed');
//     }
// });
