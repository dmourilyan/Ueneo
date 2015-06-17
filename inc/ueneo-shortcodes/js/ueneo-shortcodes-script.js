


jQuery(document).ready(function($) {

"use strict";  
/*-----------------------------------------------------------------------------------*/
/* Scroll Animation
/*===================================================================================*/

	
	if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
       	var s = skrollr.init({
			smoothScrollingDuration:10,
			forceHeight:false
		});
    }
    else{
		$('html').addClass('noSkrollr');
    }


/*-----------------------------------------------------------------------------------*/
/* Skill Rating Bar
/*===================================================================================*/
	var	bar = $('.bar, .skilltitle');
	//Check if Elements are visible
	$.fn.visible = function(partial){
		var $t        = $(this),
		$w        = $(window),
		viewTop     = $w.scrollTop(),
		viewBottom    = viewTop + $w.height(),
		_top      = $t.offset().top,
		_bottom     = _top + $t.height(),
		compareTop    = partial === true ? _bottom : _top,
		compareBottom = partial === true ? _top : _bottom;
		return ((compareBottom <= viewBottom) && (compareTop >= viewTop));
	};
	function animateBar(){

		bar.each(function() {
		if( $(this).visible(true) ) {
		    $(this).addClass('enabled');
		  	} 
		else { $(this).removeClass('enabled'); }
		});
	};
/*-----------------------------------------------------------------------------------*/
/* CSS Animations
/*===================================================================================*/

	function cssAnimation(){
		$('.css-animation').each(function(){
			var animation = $(this).attr('class').split(" ");
	
			if($(this).visible(true)){
				$(this).children().addClass(animation[1] + ' animated');
			}
			$(this).removeClass(animation);

		});
	};	


/*-----------------------------------------------------------------------------------*/
/* Counter
/*===================================================================================*/

	if (!$('html').hasClass("noSkrollr")) {
		$('.counter-count').counterUp({
			delay: 10,
    		time: 1500,
		});
	}
	$('.counter').each(function(){
		$(this).parent().addClass('counter-holder');

	});
	$('.counter-holder').last().addClass('counter-last');



/*-----------------------------------------------------------------------------------*/
/* Superslides
/*===================================================================================*/

	$('.slides-container .slide-caption img').addClass('preserve');	
	$('.slide-caption').each(function(){
		$(this).children().not('.scrollanimation').wrapAll('<div class="captioninner"></div>');
	});

	function captionPosition(){
		$('#superslider_home .captioninner').each(function(){
			var captionHeight = $(this).outerHeight() / 2,
			captionTopMargin = '-' + (captionHeight + 25) + 'px',
			captionWidth = $(this).outerWidth() / 2,
			captionLeftMargin = '-' + captionWidth + 'px';
			$(this).css({'marginTop': captionTopMargin, 'marginLeft' : captionLeftMargin});
		});
	}
	if (typeof superslider_animation !== 'undefined') {
		$('#superslider_home').superslides({
			animation: superslider_animation,
			play: superslider_play, // Milliseconds for delay
			slide_speed: 1000,
			pagination: false,
			hashchange: false,
			scrollable: true // Allow scrollable content inside slide
			
		});
		if(superslider_animation == 'fade'){
			setTimeout(function() {
				if ( $('.slides-container').children().length > 1 ) {
		  			$(".slides-container, .slides-navigation").addClass('loaded');
		  		}
		  		else{
		  			$(".slides-container").addClass('loaded');
		  		}
		  		$("#superslider_loading").addClass('unloaded');
		  		captionPosition();
		  		superNavigation();
			}, 400);
		}
	}
	else{
		$('#superslider_home').superslides({
			scrollable: false // Allow scrollable content inside slide
		});
	}

	$('body, html').on('init.slides', function() {

  		if ( $('.slides-container').children().length > 1 ) {
  			$(".slides-container, .slides-navigation").addClass('loaded');
  		}
  		else{
  			$(".slides-container").addClass('loaded');
  		}
  		$("#superslider_loading").addClass('unloaded');
  		captionPosition();
	});

	function superNavigation(){
		var nextIndex = $('#superslider_home').superslides('next'),
			nextTitle = $('.slides-container li:nth-child(' + (nextIndex + 1) + ')').attr('data-tile'),
			prevIndex = $('#superslider_home').superslides('prev'),
			prevTitle = $('.slides-container li:nth-child(' + (prevIndex + 1) + ')').attr('data-tile');  

		$('.slides-navigation .next span').text(nextTitle);
		$('.slides-navigation .prev span').text(prevTitle);
		$('.slides-navigation a').removeClass('animating');
	
	}

	$('#superslider_home').on('animating.slides', function(){
		$('.slides-navigation a').addClass('animating');

	});
	$('#superslider_home').on('animated.slides', function(){
		superNavigation();
	});
	var headHeight = $('.mainnav').outerHeight();
	$('#superslider_home').css('padding-top',headHeight);

	


/*-----------------------------------------------------------------------------------*/
/* Portfolio
/*===================================================================================*/
 	if (typeof portfolio_layout !== 'undefined') {

		$('#portfolioinner').waitForImages(function() {
			$('#portfolioinner').fadeIn().isotope({
			  itemSelector: '.item',
			  layoutMode: portfolio_layout,
			});
			$('.filter').on( 'click', function() {
			  $(this).addClass('checked').siblings().removeClass('checked');
			  var filterValue = '.' + $(this).attr('data-filter');
			  $('#portfolioinner').isotope({ filter: filterValue });
			  if (!$('html').hasClass("noSkrollr")) { s.refresh(); }

			
			});
		});
	}
	else{
		$('#portfolioinner').waitForImages(function() {
			$('#portfolioinner').fadeIn().isotope({
			  itemSelector: '.item',
			  layoutMode: 'masonry',
			});
			$('.filter').on( 'click', function() {
			  $(this).addClass('checked').siblings().removeClass('checked');
			  var filterValue = '.' + $(this).attr('data-filter');
			  $('#portfolioinner').isotope({ filter: filterValue });
			  if (!$('html').hasClass("noSkrollr")) { s.refresh(); }
			
			});
		});
	}	

	$(".grid > div").fitVids();
	if( $('#main').length ){
		var	main = $('#main, #primary-nav, .footer');
	}
	else{
		var main = $('body').children().not( ".mfp-bg, .mfp-wrap" );
	}
		
	var	portfolio = $(".nav-links li a:contains('Portfolio') , .nav-links li a:contains('portfolio')"),
		scrollY;
	$('#portfolioinner').magnificPopup({
		delegate: '.item:visible a',
		tLoading: '<div class="spinner"><div class="double-bounce1"></div><div class="double-bounce2"></div></div>',
		closeMarkup:'<div class="loadernav"><button title="%title%" class="mfp-close"><i class="mfp-close-icn">&times;</i></button></div>', 
		closeBtnInside: false, 
		closeOnBgClick:false,
		type: 'ajax',
		fixedContentPos:false,
		mainClass: 'mfp-fade',
		midClick: true,
		gallery: {
			enabled: true, 
			preload: [0,2], 
			navigateByImgClick: true,
			tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
		},
		callbacks: {
			parseAjax: function(mfpResponse) {
              	mfpResponse.data = $(mfpResponse.data).siblings('.portfolios');
            },
			change: function() {
				if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
					$.magnificPopup.instance.next = function () {return false}; 
					$.magnificPopup.instance.prev = function () {return false}; 
				}
			},
			ajaxContentAdded: function() {

				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){
					$('.parallaxBackground').each(function(){
						if($(this).prev().html() == false){
							$(this).prev().remove();
						}
					});
					$(".grid > div").fitVids();
					initFlexSliders();
				}
				else{
					$('article').waitForImages(function() {
						$(".grid > div").fitVids();
						initFlexSliders();
						var loadernav = $('.loadernav');
						$(window).scrollTop(0);
						if (!$('html').hasClass("noSkrollr")) { s.refresh(); }
						$('.parallaxBackground').each(function(){
							if($(this).prev().html() == false){
								$(this).prev().remove();
							}
						});
						loadernav.animate({ marginTop: "0px" }, 200 );
						$.magnificPopup.instance.next = function () { 
							if (loadernav.is(':animated') || $('.mfp-container').hasClass('mfp-s-loading') ) {
						        return false;
						    }else{
							loadernav.animate({ marginTop: "-50px" }, 200 ); setTimeout(function(){ $.magnificPopup.proto.next.call(this); }, 200); };
							} 
						$.magnificPopup.instance.prev = function () { 
								if (loadernav.is(':animated') || $('.mfp-container').hasClass('mfp-s-loading') ) {
						        return false;
						    }else{
							loadernav.animate({ marginTop: "-50px" }, 200 ); setTimeout(function(){ $.magnificPopup.proto.prev.call(this); }, 200); };
							}
						$.magnificPopup.instance.close = function () { loadernav.animate({ marginTop: "-50px" }, 100 ); setTimeout(function(){ $.magnificPopup.proto.close.call(this); }, 100); };
					});
				}	
			},
			open: function() {
				if( $('.rev_slider').length ){
					$('.rev_slider').each(function(){
						var sliderID = '#' + $(this).attr('id');
						var revapi1 = $(sliderID).revolution();
						revapi1.revpause();

					});

				}
				
				if( $('#wpadminbar').length ){
					 var wpadminbar = $('#wpadminbar').outerHeight() + 'px';
					  $('.loadernav').css('top',wpadminbar);
				}
			   if($('.item:visible a').length > 1){
			    	$('.loadernav').append(this.arrowLeft.add(this.arrowRight));
			    }
				scrollY = window.pageYOffset || document.documentElement.scollTop;
				$('.mfp-wrap').css('top','0');
				$('.lt-ie8 body').css('overflow','auto');
				main.addClass('hide');
				
				if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ){ $.magnificPopup.instance.close = function () {return false}; }
			},
			close: function() {
	    		main.removeClass('hide');
	    		
	    		$('.lt-ie8 body').css('overflow','hidden');
			},
	    	afterClose: function() {
				if( $('.rev_slider').length ){
					$('.rev_slider').each(function(){
						var sliderID = '#' + $(this).attr('id');
						var revapi1 = $(sliderID).revolution();
						revapi1.revresume();
						revapi1.revredraw();

					});

				}
				$(window).scrollTop(scrollY);
		   		captionPosition();
		   		setTimeout(function(){ 
		   			if (!$('html').hasClass("noSkrollr")) { s.refresh(); }
		   			portfolio.parent().addClass('nav-active').siblings().removeClass('nav-active'); 

	    		}, 200);
	  		}
		}
	});



/*-----------------------------------------------------------------------------------*/
/* Team
/*===================================================================================*/
	$('.team-member .viewdetails:not(.current-member)').live('click', function(e)  {
		e.preventDefault();
		var link = $(this).attr('href'),
			currentember = $(this).closest('.team-member').find('.viewdetails');

		currentember.addClass('current-member');

		$('#team-loading').css('opacity','1');
		$( "#team-details" ).slideUp(400);


		$.get(link, function( data ) {
			var $response=$(data),
			 	dataToday = $response.filter('#primary').html();

				$( "#team-loading" ).css('opacity','0');
				$( "#team-details" ).empty().append( dataToday  ).slideDown(400, function(){
						setTimeout(function() {
							$('.bar, .skilltitle').addClass('enabled');
							if (!$('html').hasClass("noSkrollr")) { s.refresh(); }	
						}, 50);
				});
			if(!Modernizr.backgroundsize) {
				var backgrounds = $('.team-networks-wrap .social-networks li, #team-close');
					backgrounds.each(function(){
						var bg = $(this).css('background-image');
					        bg = bg.replace('url(','').replace(')','');
					    var	img = '<img src='+ bg + '/>';
						$(this).css('background-image','none');
						$(this).prepend(img)
					});
			}
			$('html,body').animate({ scrollTop: $("#team-details").offset().top - 150},400);

		});

		$( document ).ajaxComplete(function() {
			
			$("#team-close").click(function(e){
				e.preventDefault();
				$( "#team-details" ).slideUp(400, function(){
					$( "#team-details" ).empty();
					if (!$('html').hasClass("noSkrollr")) { s.refresh(); }	
				});
				$(".viewdetails").each(function(){
					$(this).removeClass('current-member');
				});
				
			});
		});
	});

	$('.current-member').live('click', function(e)  {
		e.preventDefault();
		$('html,body').animate({
        	scrollTop: $("#team-details").offset().top - 150},
        400);
	});

	$('.team-member .viewdetails').click(function(){
		if (!$(this).hasClass("current-member")) {
			$(".viewdetails").each(function(){
				$(this).removeClass('current-member');
			});
		}

	});






/*-----------------------------------------------------------------------------------*/
/* Googlemap - slightly modified code from http://aquagraphite.com/
/*===================================================================================*/
	function googleMap(){
		$('.googlemap').each( function() {
			var $map_id = $(this).attr('id'),
			$title = $(this).find('.title').val(),
			$location = $(this).find('.location').val(),
			$zoom = parseInt( $(this).find('.zoom').val() ),
			$hue = $(this).find('.hue').val(),
			$saturation = $(this).find('.saturation').val(),
			$lightness = $(this).find('.lightness').val(),
			$iconLink = $(this).find('.iconLink').val(),
			styledMap = $(this).find('.styledMap').val(),

			geocoder, map;
			var styles;
			if(styledMap == '1'){
				var styles = [
				  {
				    stylers: [
				      { hue: $hue },
				      { saturation: $saturation },
				      { lightness: $lightness}
				    ]
				  }
				];	
			}

			var mapOptions = {
				zoom: $zoom,
				scrollwheel: false,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles: styles
			};
			geocoder = new google.maps.Geocoder();
			geocoder.geocode( { 'address': $location}, function(results, status) {
				if (status == google.maps.GeocoderStatus.OK) {
					var mapOptions = {
						zoom: $zoom,
						scrollwheel: false,
						mapTypeId: google.maps.MapTypeId.ROADMAP,
						styles: styles
					};
					map = new google.maps.Map($('#'+ $map_id + ' .map_canvas')[0], mapOptions);
				
					//MAP IN TAB
					$('.tabs li a').click(function(){
						var content = $(this).attr('href');
						if($(content).find('.googlemap').length > 0){
							setTimeout(function() {
								google.maps.event.trigger(map, 'resize');
								map.setCenter(results[0].geometry.location);
							}, 0);
						}
					});



					map.setCenter(results[0].geometry.location);
					var marker = new google.maps.Marker({
					  map: map, 
					  position: results[0].geometry.location,
					  title : $location,
					  icon: $iconLink
	
					});
					var contentString = '<div class="map-infowindow">'+
						( ($title) ? '<h3>' + $title + '</h3>' : '' ) + 
						$location + '<br/>' +
						'<a href="https://maps.google.com/?q='+ $location +'" target="_blank">View on Google Map</a>' +
						'</div>';
					var infowindow = new google.maps.InfoWindow({
					  content: contentString
					});
					google.maps.event.addListener(marker, 'click', function() {
						infowindow.open(map,marker);
					});
				} else {
					$('#'+ $map_id).html("Geocode was not successful for the following reason: " + status);
				}
			});




		});
	};
/*-----------------------------------------------------------------------------------*/
/* Flex Slider
/*===================================================================================*/
	
function initFlexSliders() {	
	if (typeof flex_slider_animation !== 'undefined') {

		$('.testimonials').flexslider({
		    animation: 'fade',
		    controlNav: true,
		    directionNav: false,
			slideshowSpeed: 4000,
		    slideshow: testimonials_auto_play,
		    useCSS:false,


		});
		$('.flexslider:visible').flexslider({
			animation: flex_slider_animation,              				//String: Select your animation type, "fade" or "slide"
			direction: flex_slider_direction,        					//String: Select the sliding direction, "horizontal" or "vertical"
			startAt: 0,                     							//Integer: The slide that the slider should start on. Array notation (0 = first slide)
			slideshow: flex_slider_auto_play,              				//Boolean: Animate slider automatically
			slideshowSpeed: flex_slider_slideshowspeed,     			//Integer: Set the speed of the slideshow cycling, in milliseconds 
			initDelay: 0,                   							//{NEW} Integer: Set an initialization delay, in milliseconds
			useCSS: false,                   							//{NEW} Boolean: Slider will use CSS3 transitions if available
			touch: false,                    							//{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
			video: false,                   							//{NEW} Boolean: If using video in the slider, will prevent CSS3 3D Transforms to avoid graphical glitches
			controlNav: flex_slider_controlnav,               							//Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			prevText: "Previous",           							//String: Set the text for the "previous" directionNav item
			nextText: "Next",               							//String: Set the text for the "next" directionNav item
			keyboard: true,                 							//Boolean: Allow slider navigating via keyboard left/right keys
			multipleKeyboard: false,       								//{NEW} Boolean: Allow keyboard navigation to affect multiple sliders. Default behavior cuts out keyboard navigation with more than one slider present.
			mousewheel: false,              							//{UPDATED} Boolean: Requires jquery.mousewheel.js (https://github.com/brandonaaron/jquery-mousewheel) - Allows slider navigating via mousewheel
			pausePlay: false,               							//Boolean: Create pause/play dynamic element
			pauseText: 'Pause',             							//String: Set the text for the "pause" pausePlay item
			playText: 'Play',  
			start: function(){
				if (!$('html').hasClass("noSkrollr")) { s.refresh(); }

			} 
		});

	}
	else{
		$('.flexslider:visible, #testimonials').flexslider({
			useCSS:false
		});

	}
};

initFlexSliders();
$('.tabs li a').click(function(){
	setTimeout(function() {
		initFlexSliders();
	}, 150);
});
/*-----------------------------------------------------------------------------------*/
/* Clients
/*===================================================================================*/
$(".clients").each(function(){
	var owlItems = $(this).attr('data-items');
	$(this).owlCarousel({
		autoPlay: 3000, 
		items : owlItems,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		pagination:false,
		itemsScaleUp:true,
	});

}); 

/*-----------------------------------------------------------------------------------*/
/* IE8 Backgrounds
/*===================================================================================*/
/*if(!Modernizr.backgroundsize) {
	var backgrounds = $('.team-image, .testimonial-avatar, .social-networks li, .flex-next, .flex-prev');
	backgrounds.each(function(){
		var bg = $(this).css('background-image');
	        bg = bg.replace('url(','').replace(')','');
	    var	img = '<img src='+ bg + '/>';
		$(this).css('background-image','none');
		$(this).prepend(img)
	});
}
*/

/*-----------------------------------------------------------------------------------*/
/* Events
/*===================================================================================*/
		

	$(window).load(function(){
		if (!$('html').hasClass("noSkrollr")) { s.refresh(); }
		googleMap();
		captionPosition();
		cssAnimation();

	});
	
	$(window).scroll(function() {
		cssAnimation();
		animateBar();

	});


	$(window).resize(function() {

	  setTimeout(function() {
	    captionPosition();
	    if (!$('html').hasClass("noSkrollr")) { s.refresh(); }
	  }, 150);
	});


});//End Document Ready





