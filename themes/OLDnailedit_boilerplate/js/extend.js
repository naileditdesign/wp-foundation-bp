// Add all your lovely no conflict Jquery extensions, you mutha!


!function ($) {

$(document).foundation();


//buttons
	
	$('button,.button').addClass('btn btn-default');
	
	$('.single_add_to_cart_button').addClass('btn btn-success');

	// navbar state demo
	$('.navbar ul').addClass('nav');
  
  /* Dropdown */


	$('.top-bar ul').parent('li').addClass('has-dropdown not-click');
	
	$('.top-bar li.has-dropdown ul').addClass('dropdown');


  /* Flexvideo iFrame Fix */

	$('iframe').wrap("<div class='flex-video'></div>");

  /* Cookie bar */

  $.cookieBar();

  $('#cookie-bar').wrap("<div class='row'><div class='large-12 columns'></div></div>");


}(window.jQuery);
