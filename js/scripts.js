(function ($, root, undefined) {

	$(function () {

		'use strict';

		$('.icon').on('click' ,function(){
			$('#sideMenu').toggleClass('visible')
		})

		$('.searchIcon').on('click' ,function(){
			$('.searchFormHeader').toggleClass('visible')
			$('.searchFormHeader input').toggleClass('visible')
		})


	});

})(jQuery, this);
