<?php
/**
	Plugin Name: Basic Wordpress Plugin
	Plugin URI: http://stephenkarpath.com_addref
	Author URI:Stephen Karpathakis
	Version: 0.0.2
*/


$dwwp_plugin_debug = false;

//Dwwp = prefix Develop with Wordpress
//This is to avoid naming conflict with other plugins
 
 //Function to remove dashboard widget
 function dwwp_remove_dashboard_widget(){
	  remove_meta_box('dashboard_primary', 'dashboard', 'post_container_1');
 }
 
 //Function to add a custom menu item to WordPress
 function dwwp_add_custom_admin_menu(){
	global $wp_admin_bar;	
			
	if($dwwp_plugin_debug){
		//Displays Array Information for debug purposes
		echo "<pre>";
		var_dump($wp_admin_bar);
		echo "</pre>";
	}
			
	$wp_admin_bar->add_menu(array(
			
			'id'     => 'google_analytics',
			'title'  => 'google analytics',
			'href'   => 'http://google.com/analytics'
	) );
 }

 
 
//Adds the function based off of wordpress Hooks/Trigger state
add_action( 'wp_dashboard_setup', 'dwwp_remove_dashboard_widget');

//Adds menu items using hooks
add_action( 'wp_before_admin_bar_render', 'dwwp_add_custom_admin_menu');

?>