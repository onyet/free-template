// Yeah 
$(function () {
	$('[data-toggle="tooltip"]').tooltip();
	$('a').attr('rel','external');
	$('a').attr('data-ajax','false');
	$('form').attr('rel','external');
	$('form').attr('data-ajax','false');
	$('input').attr('data-role','none');
	$('#newsList').newsTicker();
	$(window).scroll(function() {
		var posin = $(this).scrollTop();
	    if (posin >= 316) {
	        $('.to-top').fadeIn();
	    } else {
	        $('.to-top').fadeOut();
	    }
	});
	$(".to-top").click(function () {
	   $("html, body").animate({scrollTop: 0}, 1000);
	});
	$('[data-toggle="fancy-kom"]').click(function(){
		var url = $(this).attr('src');
		var title = $(this).attr('title');
		$('#kominfo-fanci-image .modal-header .modal-title').html(title);
		$('#kominfo-fanci-image .modal-body').html('<img src="'+url+'" class="img-responsive">')
		$('#kominfo-fanci-image').modal();
	});
// Owl Carousel
	$('.kominfo-owl-carousel').owlCarousel({
		items:1,
		navigation : true,
		lazyLoad:true,
		loop:true,
		autoPlay: true,
		pagination : false,
		responsive: true
	});
	  var sync1 = $("#news-berita1");
	  var sync2 = $("#news-berita2");
	 
	  sync1.owlCarousel({
	    singleItem : true,
	    slideSpeed : 1000,
	    navigation: false,
	    pagination:false,
	    autoPlay: true,
	    transitionStyle : "fade",
	    afterAction : syncPosition,
	    responsiveRefreshRate : 200,
	  });
	 
	  sync2.owlCarousel({
	    items : 8,
	    itemsDesktop      : [1199,10],
	    itemsDesktopSmall     : [979,10],
	    itemsTablet       : [768,8],
	    itemsMobile       : [479,4],
	    pagination:false,
	    responsiveRefreshRate : 100,
	    afterInit : function(el){
	      el.find(".owl-item").eq(0).addClass("active");
	    }
	  });
	 
	  function syncPosition(el){
	    var current = this.currentItem;
	    $("#news-berita2")
	      .find(".owl-item")
	      .removeClass("active")
	      .eq(current)
	      .addClass("active")
	    if($("#news-berita2").data("owlCarousel") !== undefined){
	      center(current)
	    }
	  }
	 
	  $("#news-berita2").on("click", ".owl-item", function(e){
	    e.preventDefault();
	    var number = $(this).data("owlItem");
	    sync1.trigger("owl.goTo",number);
	  });
	 
	  function center(number){
	    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
	    var num = number;
	    var found = false;
	    for(var i in sync2visible){
	      if(num === sync2visible[i]){
	        var found = true;
	      }
	    }
	 
	    if(found===false){
	      if(num>sync2visible[sync2visible.length-1]){
	        sync2.trigger("owl.goTo", num - sync2visible.length+2)
	      }else{
	        if(num - 1 === -1){
	          num = 0;
	        }
	        sync2.trigger("owl.goTo", num);
	      }
	    } else if(num === sync2visible[sync2visible.length-1]){
	      sync2.trigger("owl.goTo", sync2visible[1])
	    } else if(num === sync2visible[0]){
	      sync2.trigger("owl.goTo", num-1)
	    }
	    
	  }

})