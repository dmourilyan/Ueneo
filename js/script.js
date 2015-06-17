/* 
*	Custom jQuery.
*	Other script located in the EightDegree Shortcodes Plugin. 
*	ueneo-shortcodes/js/ueneo-shortcodes-script.js 
*/
	
jQuery(document).ready(function($) {
"use strict";  

	
	/*Fit Vids*/
	$(".grid > div, article .c12, article .c12 p").fitVids();
	$('.fluid-width-video-wrapper').show();


/*-----------------------------------------------------------------------------------*/
/* Navigation
/*===================================================================================*/

	var mainNav = $('.mainnav'),
		superSliderHome = $('#superslider_home'),
		home = $('#main > div:first-child'),
		about = $('#main > div:nth-child(2)'),
		xMove, barWidth, realtop, aboveHeight, halfHeight;	
		$(".mainnav").removeClass('mainnavhide');	
	

	
	/*Setup External Links*/

	$('.nav-links li a').addClass('external');
 	$('.nav-links li.active-children > a').removeClass('external');
    $('.nav-links li.current-menu-item > a').removeClass('external');
 	$('.nav-links li.page-section-parent > a').removeClass('external');
 
	
 	/*Remove Empty Containers*/
	$('.grid').each(function(){
		if($(this).html() == false){
			$(this).remove();
		}
	});
	
	/*Smooth Scrolling*/
	$('.nav-links').onePageNav({
		currentClass: 'nav-active',
		scrollThreshold: 0.5,
		scrollSpeed: 800,
		scrollOffset: 69,
		filter: ':not(.external)'
	}); 
	if($('body').hasClass('home')){
		$('.mainLogo a, .footerLogo').click(function(event){
			 event.preventDefault();
			$('html, body').animate({scrollTop: 0}, 800);
		});
	}
	$('.button').click(function(event){
		var link = $(this).attr('href');
		if(link.indexOf("#") >= 0){
			event.preventDefault();
			$('html, body').animate({scrollTop: $(link).offset().top - 70}, 800);
		}
	});
	$('#scroll-top').click(function(){
		$('html, body').animate({scrollTop: 0}, 800);
	});

	$('.share-wrap i').click(function(){
		$(this).parent().toggleClass('open');
	});

	/*Mobile Navigation Dropdown*/
	$(".standard #menubutton").click(function(){
		$(".nav-links").slideToggle();
	});

	$(".standard .nav-links a").click(function(){
		if($(window).width() <= 768) {
			$(".nav-links").css('display','none');
		}
	});

	$('.toggle-networks').click(function(){
		$(this).toggleClass('network-open');
		$('.mainnav .social-networks li').slideToggle(200);
	});



	/*Side Menu*/

	$('.side-menu .menu-item-has-children ul, .side-menu .page_item_has_children ul').before('<span class="toggle-menu"></span>');
	$('.side-menu .sub-menu li, .side-menu .children li').slideUp();
	$('.toggle-menu').click(function(){
		$(this).next().children().slideToggle(200);
		$(this).toggleClass('toggle-menu-open');
		$(this).next().toggleClass('menu-open');
	});

	$('.side-menu-btn, .side-menu a').click(function(){
		$('.side-menu, .side-menu-btn').toggleClass('open');
	});



	$('#main, #mainLogo, #primary').click(function(){
		if($('.side-menu').hasClass('open')){
			$('.side-menu, .side-menu-btn').toggleClass('open');
		}	
	});
	function sideMenuPos(){
		
		if($('#wpadminbar').length){
			var headHeight = $('.mainnav').outerHeight() + $('#wpadminbar').outerHeight();
		}
		else{
			headHeight = $('.mainnav').outerHeight();
		}
		if (/iPhone|iPad|iPod/i.test(navigator.userAgent) ){
		
			var menuHeight = $(window).outerHeight() - headHeight;
			var mobileHeight = menuHeight + 100 + 'px';
			$('.side-menu').css({'top': headHeight + 'px', 'height' : mobileHeight});
		}
		else{
			var menuHeight = $(window).outerHeight() - headHeight + 'px';
			$('.side-menu').css({'top': headHeight + 'px', 'height' : menuHeight});
		}
	

	}
	sideMenuPos();
	

	/*Masonary Blog*/
	
	$('.masonry-container').waitForImages(function() {
		$('.masonry-container').fadeIn().isotope({
			itemSelector: '.masonry-item',
			layoutMode: 'masonry',
		});
	});


	var running = true;
	$('.loadmore').on('click', 'a' ,function(e)  {
		e.preventDefault();
		if (running) { 
	      
			var link = $(this).attr('href');
			$(this).fadeOut( 300, function() {
				$(this).remove();
			});
			$('.loadmore i').addClass('fa-spin');

			$.get(link, function( data ) {
				var $response=$(data),
				 	dataToday = $response.find('#main').children().filter('article'),
				 	dataTommorow = $response.find('.loadmore a');
				$('.masonry-container').isotope( 'on', 'layoutComplete', function() {
				  	if(dataTommorow.length){
						$('.loadmore').append(dataTommorow);
						$('.loadmore i').removeClass('fa-spin');
					}
					else{
						$('.loadmore i').hide();
					}

		 			FB.XFBML.parse();
		 			twttr.widgets.load();
		 			gapi.plusone.go();
			
		 			running = true;
				
			 	});
				dataToday.each(function(){
					var elem = $(this);
					elem.waitForImages(function() {
						$('.masonry-container').append(elem).isotope( 'appended', elem);
							elem.find('.share-wrap i').click(function(){ $(this).parent().toggleClass('open'); });
					
					});
				});

			});
		}		
	running = false;

	});


	$(window).resize(function() {
		sideMenuPos();
		if($(window).width() > 768) {
			$(".nav-links").removeAttr("style");

		}
		
	});


});










