(function ($, root, undefined) {

	$(function () {

		'use strict';
		var sideMenu = $('#sideMenu')
		var searchFormHeader = $('.searchFormHeader')
		var searchFormHeaderInput = $('.searchFormHeader input')
		var liWithSubMenu = $('.sideMenu ul li:has(ul)')

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


		liWithSubMenu.prepend("<span class='fa fa-chevron-left'> </span>")


	});

})(jQuery, this);
