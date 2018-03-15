
(function ($, root, undefined) {

	$(function () {

		'use strict';
		var body = $('#pageBody')
		var sideMenu = $('#sideMenu')
		var searchFormHeader = $('.searchFormHeader')
		var searchFormHeaderInput = $('.searchFormHeader input')
		var liWithSubMenu = $('.sideMenu ul li:has(ul)')
		var mainContainer = $('.mainContainer')
		var $window = $(window)
		var topMenu = $('.topMenu')

		var menuHeight = 60
		var logoHeight = 140
		var headerHeight = menuHeight + logoHeight

		//Show side menu
		$('.sideMenuToggle').on('click' ,function(){
			sideMenu.toggleClass('visible')
		})

		//Show search field
		$('.searchIcon').on('click' ,function(){
			searchFormHeader.toggleClass('visible')
			searchFormHeaderInput.toggleClass('visible')
		})

		//click on body hides layouts

		$('.pageContent').on('click' ,function(){
			sideMenu.removeClass('visible')
			searchFormHeader.removeClass('visible')
			searchFormHeaderInput.removeClass('visible')
		})

		// Side Menu Li that have sub items have an arrow
		liWithSubMenu.prepend("<span class='fa fa-chevron-left'> </span>")

		//defaults
		sideMenu.height(body.height() - headerHeight)

		window.addEventListener('resize', function () {
			sideMenu.height(body.height() - (headerHeight - $window.scrollTop()))
		})

		$window.on('scroll', function(e){

			var scroll = $window.scrollTop()

			if (scroll < logoHeight){
				sideMenu.height(body.height() - (headerHeight - scroll))
				sideMenu.css('top', (headerHeight - scroll))
				topMenu.removeClass('fixedOnTop')
				searchFormHeader.removeClass('fixedOnTop')
			} else {
				sideMenu.css('top', menuHeight)
				sideMenu.height(body.height() - menuHeight)
				topMenu.addClass('fixedOnTop')
				searchFormHeader.addClass('fixedOnTop')
			}
		})

		$("#topBanner > a:gt(0)").hide();

		setInterval(function() {
			$('#topBanner > a:first')
			.fadeOut(0)
			.next()
			.fadeIn(0)
			.end()
			.appendTo('#topBanner');
		}, 13000);

		$("#sideBannerBig > a:gt(0)").hide();

		setInterval(function() {
			$('#sideBannerBig > a:first')
			.fadeOut(0)
			.next()
			.fadeIn(0)
			.end()
			.appendTo('#sideBannerBig');
		}, 6000);

		$("#sideBannerSmall1 > a:gt(0)").hide();

		setInterval(function() {
			$('#sideBannerSmall1 > a:first')
			.fadeOut(0)
			.next()
			.fadeIn(0)
			.end()
			.appendTo('#sideBannerSmall1');
		}, 6000);

		$("#sideBannerSmall2 > a:gt(0)").hide();

		setInterval(function() {
			$('#sideBannerSmall2 > a:first')
			.fadeOut(0)
			.next()
			.fadeIn(0)
			.end()
			.appendTo('#sideBannerSmall2');
		}, 6000);


		$('.homeSlider').slick({

			slidesToShow: 1,
		  slidesToScroll: 1,
			infinite: true,
		  autoplay: true,
		  autoplaySpeed: 10000,
			dots: true,
			arrows: false,
			// fade: true

		});



	});

})(jQuery, this);
