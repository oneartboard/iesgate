
	
	 
//   tab

$('.tabgroup > div').hide();

$('.tabgroup > div:first-of-type').show();


$('.tabs a').click(function(e){
  e.preventDefault();
	var $this = $(this),
	
        tabgroup = '#'+$this.parents('.tabs').data('tabgroup'),
        others = $this.closest('li').siblings().children('a'),
        target = $this.attr('href');
    others.removeClass('active');
    $this.addClass('active');
    $(tabgroup).children('div').hide();
    $(target).show();
  
})



	
	var swiper = new Swiper('.swiper-container.pcr', {
		spaceBetween: 10,

		pagination: {
		  el: '.swiper-pagination',
		  dynamicBullets: false,
	clickable: true,
		},

		autoplay: {
			delay: 1500,
			disableOnInteraction: false,
		  },
		  
	  });

	  
	var swiper = new Swiper('.swiper-container.pcr2', {
		spaceBetween: 10,
		pagination: {
		  el: '.swiper-pagination',
		  dynamicBullets: false,
	clickable: true,
		},
		autoplay: {
			delay: 1500,
			disableOnInteraction: false,
		  },

	  });


var swiper = new Swiper('.swiper-container.testimonial', {
	spaceBetween: 10,
  pagination: {
	el: '.swiper-pagination',
	dynamicBullets: false,
	clickable: true,
  },
});


MicroModal.init();

  Splitting(); 

var mySwiper = new Swiper('.swiper-container.hero-banner', {
  speed: 400,
  spaceBetween: 50,
  effect: 'fade',
  autoplay: {
    delay: 1500,
    disableOnInteraction: false,
  },
  pagination: {
    clickable: true,
    el: '.swiper-pagination-hero-banner',
    type: 'bullets',
  },
});





  $('.drop').click(function () {
	$(this).toggleClass('open').siblings().removeClass('open');
})

$('.drop-menu li').each(function() {
var delay = $(this).index() * 100 + 'ms';

$(this).css({
	'-webkit-transition-delay': delay,
	'-moz-transition-delay': delay,
	'-o-transition-delay': delay,
	'transition-delay': delay
});                  
});

$('.mobile-menu').click(function () {
	$('.navbar-items').toggleClass('open');
})


$('.accordian .accordian-title').click(function() {
	$(this).parent('li').toggleClass('active');
	$(this).parents('li').find('.ac-detail-item').slideToggle();
});



ScrollOut({

  });
  

  var swiper = new Swiper('.swiper-container.swiper-sq', {
	  spaceBetween: 10,
	pagination: {
	  el: '.swiper-pagination.custom',
	  dynamicBullets: false,
	  clickable: true,
	},

	autoplay: {
		delay: 100,
	  },


  });




  var swiper = new Swiper('.swiper-container.swiper-sq2', {
	spaceBetween: 10,
  pagination: {
	el: '.swiper-pagination.custom',
	dynamicBullets: false,
	clickable: true,
  },
  autoplay: {
	delay: 1500,
	disableOnInteraction: false,
  },
});



  
  var swiper = new Swiper('.swiper-container.swiper-sq3', {
	spaceBetween: 10,
  pagination: {
	el: '.swiper-pagination',
	dynamicBullets: false,
	clickable: true,
  },
  autoplay: {
	delay: 1500,
	disableOnInteraction: false,
  },
});





ScrollOut({
	cssProps: {
	  visibleY: true,
	  viewportY: true
	},
	targets: ".scrollable-pane",
  });
  


  $('.c-accr .accr-heading').click(function () {
	$('.accr-li').find('.accr-item').slideUp();
	$(this).parent('.accr-li').find('.accr-item').slideToggle();
})



$('.simple-menu .menu-icon').click(function () {
	$(this).parents('.simple-menu').find('.menu-item').slideToggle();
})



$('#news-ticker').marquee({

	// enable the plugin
	enable : true,  //plug-in is enabled

	// scroll direction
	// 'vertical' or 'horizontal'
	direction: 'vertical',

	// children items
	itemSelecter : 'li', 

	// animation delay
	delay: 1000,

	// animation speed
	speed: 1,

	// animation timing
	timing: 1,

	// mouse hover to stop the scroller
	mouse: true

	});  


	$('.vtab-content').hide();

	$('.vtab-content:first-of-type').show();
	
	(function($) {

		var tabs =  $(".vtabs li a");
	  
		tabs.click(function() {
			var content = this.hash.replace('/','');
			tabs.removeClass("active");
			$(this).addClass("active");
		$("#content").find('.vtab-content').hide();
		$(content).fadeIn(200);
		});
	
	})(jQuery);