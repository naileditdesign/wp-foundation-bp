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


  /* Social Feeds */

   $('.pinterest-feed').socialstream({
                socialnetwork: 'pinterest',
                limit: 4,
                username: 'vmrkela'
            })
        
            /* ================ DEVIANT ART FEED ================ */
            $('.deviant-feed').socialstream({
                socialnetwork: 'deviantart',
                limit: 4,
                username: 'pixel-industry'
            })
             
            /* ================ FLICKR FEED ================ */
            $('.flickr-feed').socialstream({
                socialnetwork: 'flickr',
                limit: 4,
                username: 'Mrky1'
            })
        
            /* ================ DRIBBBLE FEED ================ */
            $('.dribbble-feed').socialstream({
                socialnetwork: 'dribbble',
                limit: 4,
                username: 'envato'
            })
        
            /* ================ YOUTUBE FEED ================ */
            $('.youtube-feed').socialstream({
                socialnetwork: 'youtube',
                limit: 4,
                username: 'Envato'
            })
            
            /* ================ INSTAGRAM FEED ================ */
            $('.instagram-feed').socialstream({
                socialnetwork: 'flickr',
                limit: 4,
                username: 'Mrky1',
                overlay: true
            })
			
			 /* ================ PICASA FEED ================ */
			$('.picasa-feed').socialstream({
				socialnetwork: 'picasa',
				limit: 4,
				username: 'vmrkela1@gmail.com'
			});

  /* Social Share */

$('#shareme').sharrre({
  share: {
    twitter: true,
    facebook: true,
    googlePlus: true
  },
  template: '<div class="box"><div class="sharer"><a href="#" class="facebook">facebook</a><a href="#" class="twitter">twitter</a><a href="#" class="googleplus">google</a></div><div class="right">{total}</div></div>',
  enableHover: false,
  enableTracking: true,
  render: function(api, options){
  $(api.element).on('click', '.twitter', function() {
    api.openPopup('twitter');
  });
  $(api.element).on('click', '.facebook', function() {
    api.openPopup('facebook');
  });
  $(api.element).on('click', '.googleplus', function() {
    api.openPopup('googlePlus');
  });
}
});


}(window.jQuery);
