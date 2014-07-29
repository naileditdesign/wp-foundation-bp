<?php
if (!current_user_can('manage_options'))  {
	wp_die( __('You do not have sufficient permissions to access this page.') );
}
?>
<div>
<h2><?php echo TPT_ADMIN_NAV_HEADER; ?></h2>
<form method="post" action="">
<?php 
$types = tpt_all_post_types();

global $TPT_EXCLUDE_TYPES;

$archive_types = array('tag','category','author','date');
		
if($_POST) {
	foreach($types as $type=>$type_obj) {
		if(in_array($type, $TPT_EXCLUDE_TYPES)) {
			continue;
		}
		foreach($archive_types as $archive_type) {
			if(isset($_POST[$archive_type]) && array_key_exists($type, $_POST[$archive_type])) {
				tpt_set_option(TPT_OPTION_PREFIX.$archive_type.'_'.$type,'1');
				$has_option = true;
			}
			else {
				tpt_set_option(TPT_OPTION_PREFIX.$archive_type.'_'.$type,'0');
			}
		}
	}
	echo "<div id='message' class='updated'><p>" . __("Options updated successfully.") . "</p></div>";
}
foreach($archive_types as $archive_type) {
	echo "<p style='margin-bottom:0;'>";
	printf(__("Post types to include in %s archives:"), $archive_type);
	echo "</p>";
	foreach($types as $key=>$value) {
		if(in_array($key, $TPT_EXCLUDE_TYPES)) {
			continue;
		}
		$id = $key;
		$html_id = $archive_type.'_'.$id;
		$name = $value->labels->name;
		$option = tpt_get_option(TPT_OPTION_PREFIX.$archive_type.'_'.$id);
		$checked = ' ';
		if($option) {
			$checked = " checked='checked' ";
		}
		echo "<div class=''><input type='checkbox' name='{$archive_type}[{$id}]' id='{$html_id}' value='{$id}' {$checked} /><label for='{$html_id}'>{$name}</label></div>";
	}
}
?>
<p style='font-weight:bold'><?php _e("Please note that if no post type for an archive is enabled, it will still show the default (usually just 'posts')."); ?></p>
<p style='font-weight:bold'><?php _e("Including the Media type in some rare cases can cause additional unexpected results to appear, so please verify that your archives are working correctly if Media is selected."); ?></p>
<?php settings_fields(TPT_OPTIONS_ID); ?>
<?php do_settings_sections(TPT_PLUGIN_ID); ?>
<input type="submit" value="<?php _e('Save Changes') ?>" />
</form>
</div>