<?php
/*
Plugin Name: Custom Post Type Archives
Plugin URI: http://innerdvations.com/plugins/custom-post-types-in-taxonomy-archives/
Description: Includes selected custom post types in archive pages (tag, category, date, author).
Version: 1.1
Author: Ben Irvin
Author URI: http://innerdvations.com/
Tags: custom post type, archive, tag, category, author, date, taxonomy
Wordpress URI: http://wordpress.org/extend/plugins/custom-post-type-taxonomy-archives/
License: GPLv3
*/

define('TPT_PLUGIN_BASE','tag_post_types');
define('TPT_PLUGIN_ID','tag_post_types');
define('TPT_OPTIONS_ID', 'tag_post_types_options');
define('TPT_OPTION_PREFIX','tag_post_types_');
define('TPT_ADMIN_NAV_NAME',__('Post Type Archives'));
define('TPT_ADMIN_NAV_HEADER',__('Post Type Archives'));
define('TPT_ADMIN_PERMISSION_REQUIRED', 'manage_options');
$TPT_EXCLUDE_TYPES = array('revision','nav_menu_item','dsn_note');

// Add translation support
$tpt_translation_dir = basename(dirname(__FILE__) ) . '/languages';
load_plugin_textdomain(TPT_PLUGIN_ID,null,$tpt_translation_dir);

// make tag and category archive pages work for other post types
function tpt_pre_get_posts($query) {
	// I'm not entirely sure why we check suppress_filters, but in the snippet that the core nugget of this plugin
	// came from, someone said that it was required to prevent interference with some other addon.
	if ((is_date() || is_tag() || is_category() || is_author()) && empty($query->query_vars['suppress_filters'])) {
		// make sure a post type isn't already specified
		$post_type = get_query_var('post_type');
		if(!$post_type) {
			$options = get_option(TPT_OPTIONS_ID);
			$types = tpt_all_post_types();
			$post_type = array();
			foreach($types as $type=>$type_obj) {
				if(
					(is_category() && isset($options[TPT_OPTION_PREFIX.'category_'.$type]) && $options[TPT_OPTION_PREFIX.'category_'.$type] == '1') 
					|| 
					(is_tag() && isset($options[TPT_OPTION_PREFIX.'tag_'.$type]) && $options[TPT_OPTION_PREFIX.'tag_'.$type] == '1')
					|| 
					(is_author() && isset($options[TPT_OPTION_PREFIX.'author_'.$type]) && $options[TPT_OPTION_PREFIX.'author_'.$type] == '1')
					|| 
					(is_date() && isset($options[TPT_OPTION_PREFIX.'date_'.$type]) && $options[TPT_OPTION_PREFIX.'date_'.$type] == '1')
				){
					// wordpress uses 'media' with get_post_types, but calls them 'attachments' in the db
					// there's also the problem that media are never 'published', they always 'inherit' their parent
					if($type == 'media' || $type == 'attachment') {
						$post_type[] = 'attachment';
						$post_type[] = 'media';
						$query->set('post_status',array('publish','inherit'));
					}
					else {
						$post_type[] = $type;
					}
				}
			}
		}
		$query->set('post_type',$post_type);
		return $query;
	}
}
add_filter('pre_get_posts', 'tpt_pre_get_posts');

// returns array of all post types registered with WP
function tpt_all_post_types() {
	$args = array();
	$output = 'objects';
	$operator = 'and';
	$types = get_post_types($args,$output, $operator);
	return $types;
}

// create the admin page
function tpt_admin_page() {
	if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	}
	require('inc.admin.php');
}

// add this page to the admin navigation
function tpt_admin_menu() {
	add_options_page(TPT_ADMIN_NAV_NAME, TPT_ADMIN_NAV_HEADER, TPT_ADMIN_PERMISSION_REQUIRED, TPT_PLUGIN_ID, 'tpt_admin_page');
}
add_action('admin_menu', 'tpt_admin_menu', 1, 2);

// set option in db
function tpt_set_option($name,$value) {
	$options = get_option(TPT_OPTIONS_ID);
	if(is_string($options)) {
		$options = unserialize($options);
	}
	$options[$name] = $value;
	update_option(TPT_OPTIONS_ID,$options);
}
// get option from db
function tpt_get_option($name) {
	$options = get_option(TPT_OPTIONS_ID);
	if(is_string($options)) {
		$options = unserialize($options);
	}
	$return = '';
	if(isset($options[$name])) {
		$return = $options[$name];
	}
	
	return $return;
}

// By default, if nothing is checked the default WP search is performed ('post' type only) but
// on activation we set the 'post' option anyway so that it's automatically checked in the admin page.
function tpt_activate() {
	$tpt_default_included = array('post');
	$options = get_option(TPT_OPTIONS_ID);
	if(is_string($options) && $options != '') {
		$options = unserialize($options);
	}
	foreach($tpt_default_included as $type) {
		if(!$options || $options[TPT_OPTION_PREFIX.'tag_'.$type]===NULL) {
			tpt_set_option(TPT_OPTION_PREFIX.'category_'.$type,'1');
			tpt_set_option(TPT_OPTION_PREFIX.'tag_'.$type,'1');
		}
	}	
}
register_activation_hook(WP_PLUGIN_DIR . '/custom-post-type-taxonomy-archives/custom-post-type-taxonomy-archives.php','tpt_activate'); 

// nothing to do on deactivation
function tpt_deactive() {
}
register_deactivation_hook(__FILE__,'tpt_deactive');

// on uninstall, delete options from the db
function tpt_uninstall() {
	delete_option(TPT_OPTIONS_ID);
}
register_uninstall_hook(__FILE__,'tpt_uninstall');

// if taxonomy searcg for a type is enabled, also add those meta boxes in the admin, since it's obviously going to be used.
function tpt_enable_taxonomy_as_needed() {
	$types = tpt_all_post_types();
	$options = get_option(TPT_OPTIONS_ID);
	foreach($types as $type=>$type_obj) {
		if(isset($options[TPT_OPTION_PREFIX.'tag_'.$type]) && $options[TPT_OPTION_PREFIX.'tag_'.$type] == '1') {
			register_taxonomy_for_object_type('post_tag', $type);
		}
		if(isset($options[TPT_OPTION_PREFIX.'date_'.$type]) && $options[TPT_OPTION_PREFIX.'tag_'.$type] == '1') {
			register_taxonomy_for_object_type('post_date', $type);
		}
		if(isset($options[TPT_OPTION_PREFIX.'author_'.$type]) && $options[TPT_OPTION_PREFIX.'tag_'.$type] == '1') {
			register_taxonomy_for_object_type('author_tag', $type);
		}
		if(isset($options[TPT_OPTION_PREFIX.'category_'.$type]) && $options[TPT_OPTION_PREFIX.'category_'.$type] == '1') {
			register_taxonomy_for_object_type('category', $type);
		}
	}
}
add_action('admin_init', 'tpt_enable_taxonomy_as_needed');

// add sickeningly greedy self-serving donate links to the wp plugin page entry
function tpt_extra_plugin_links($data, $page) {
	if ( $page == plugin_basename(__FILE__) ) {
		$flattr_url = "http://flattr.com/thing/391676/Custom-Post-Type-Archives";
		$paypal_url = "https://www.paypal.com/cgi-bin/webscr?business=donate@innerdvations.com&cmd=_donations&currency_code=EUR&item_name=Donation%20for%20Custom%20Post%20Type%20Archives";
		$data = array_merge($data,array(
			sprintf('<a href="%s" target="_blank">%s</a>',$flattr_url, esc_html__('Flattr', TPT_PLUGIN_ID)),
			sprintf('<a href="%s" target="_blank">%s</a>',$paypal_url, esc_html__('Donate', TPT_PLUGIN_ID))
		));
	}
	return $data;
}
add_filter('plugin_row_meta','tpt_extra_plugin_links',10,2);