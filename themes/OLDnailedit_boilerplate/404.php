<?php get_header(); ?>
<div class="row">
	<div class="full-12 columns">
   <div class="full-8 columns">
   	<h1 style="font-size:5em;">Oh Dear</h1>
   	<h2>It's one of the 404 errors!</h2>
     
     <p>Sorry, but you seem to be a little lost, never mind, <a href="/">click here</a> to get back on track</p>
     
     
     
   </div>
   <div class="full-4 columns">
  		<h4 class="regular">Looking for these?</h4>
  		<p><strong>We recently had a bit of a refit, so one or two doors might not lead to Narnia!</strong> (at least on this page didn't). Try one the pages below to get back on your way.</p>
  		 <?php wp_nav_menu(array('theme_location'=>'headertop-menu'));?>
  	</div>
   
   </div>
    </div>
<?php get_footer(); ?>