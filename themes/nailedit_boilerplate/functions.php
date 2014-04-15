<?php

if ( function_exists( 'add_theme_support' ) ) { 
  add_theme_support( 'post-thumbnails' ); 
}

// Include this in functions.php or the theme
if( !is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("/wp-includes/js/jquery/jquery.js"));
    wp_enqueue_script('jquery');
}

function register_menus(){
register_nav_menus(
array(
'headertop-menu' =>__('Header Menu'),
'footer-menu' =>__('Footer Menu'),
)
);
}
add_action('init','register_menus');
 

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Right Sidebar',
'before_widget' => '<div class="side-nav">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Left Sidebar',
'before_widget' => '<div class="side-nav">',
'after_widget' => '</div>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar( array(
'name' => 'Footer Block',
'id' => 'footer_block',
'description' => 'Footer Block',
));


function string_limit_words($string, $word_limit)
{
  $words = explode(' ', $string, ($word_limit + 1));
  if(count($words) > $word_limit)
  array_pop($words);
  return implode(' ', $words);
}
function mySearchFilter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}

add_filter('pre_get_posts','mySearchFilter');


add_theme_support( 'woocommerce' );

add_filter( 'request', 'my_request_filter' );
function my_request_filter( $query_vars ) {
    if( isset( $_GET['s'] ) && empty( $_GET['s'] ) ) {
        $query_vars['s'] = " ";
    }
    return $query_vars;
}
;?>