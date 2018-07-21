<?php
/*
Plugin Name: Shortcodes editor selector
Plugin URI: http://marquex.es/387/adding-a-select-box-to-wordpress-tinymce-editor
Description: Creates a button to the wordpress tinymce editor to add shortcodes easily.
Version: 0.1
Author: Javier Marquez 
Author URI: http://marquex.es
*/


class chloe_ShortcodesEditorSelector{

	var $buttonName = 'ShortcodeSelector';
	function chloe_addSelector(){
		// Don't bother doing this stuff if the current user lacks permissions
		if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
			return;
	 
	   // Add only in Rich Editor mode
	    if ( get_user_option('rich_editing') == 'true') {
	      add_filter('mce_external_plugins', array($this, 'chloe_registerTmcePlugin'));
	      //you can use the filters mce_buttons_2, mce_buttons_3 and mce_buttons_4 
	      //to add your button to other toolbars of your tinymce
	      add_filter('mce_buttons', array($this, 'chloe_registerButton'));
	    }
	}
	
	function chloe_registerButton($buttons){
		array_push($buttons, "separator", $this->buttonName);
		return $buttons;
	}
	
	function chloe_registerTmcePlugin($plugin_array){
		$plugin_array[$this->buttonName] = get_template_directory_uri() . '/framework/functions/shortcodes-editor-selector/editor_plugin.js.php';
		if ( get_user_option('rich_editing') == 'true') 
		return $plugin_array;
	}
}


if(!isset($shortcodesES)){
	$shortcodesES = new chloe_ShortcodesEditorSelector();
	add_action('admin_head', array($shortcodesES, 'chloe_addSelector'));
}