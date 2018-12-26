// Javascript for mobile
$(document).ready(function(){
	$('[data-toggle="tooltip"]').tooltip();
	$('a').attr('rel','external');
	$('a').attr('data-ajax','false');
	$('form').attr('rel','external');
	$('form').attr('data-ajax','false');
	$('input').attr('data-role','none');

	$('#newsList').newsTicker();

	$('#news-thumb1').owlCarousel({
		items:1,
		navigation : true,
		lazyLoad:true,
		loop:true,
		autoPlay: true,
		pagination : false,
		responsive: true
	});
	$('#news-thumb2').owlCarousel({
		items:1,
		navigation : true,
		lazyLoad:true,
		loop:true,
		autoPlay: true,
		pagination : false,
		responsive: true
	});
	$(window).scroll(function() {
		var posin = $(this).scrollTop();
	    if (posin >= 130) {
	        $('.to-top').fadeIn();
	    } else {
	        $('.to-top').fadeOut();
	    }
	});
	$(".to-top").click(function () {
	   $("html, body").animate({scrollTop: 0}, 1000);
	});
});
