<?php

function apparenza() {
	wp_enqueue_style('custom-fonts' , '//fonts.googleapis.com/css?family=Roboto&display=swap');
	wp_enqueue_style('footfootfoot' , '//use.fontawesome.com/releases/v5.6.3/css/all.css');
	wp_enqueue_script('slider', get_stylesheet_directory_uri() . '/js/slider.js', NULL, '1.0.0', false);
	wp_enqueue_style('style' , get_stylesheet_uri());
}
add_action('wp_enqueue_scripts' , 'apparenza');
	


function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');



// Theme setup

function myWordPress_setup(){

//Navigation Menus



register_nav_menus(array(
	'primary' => __( 'Pimary Menu'),
	'secondary' => __( 'Footer Menu'),
	'social' => __( 'Social Menu'),
		));


		function themename_custom_logo_setup() {
			$defaults = array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
			);
			add_theme_support( 'custom-logo', $defaults );
		 }
		 add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



// Add featured image support
	add_theme_support('post-thumbnails');

// Add excerp
	add_post_type_support( 'page', 'excerpt' );

	// add post-formats support	
	add_theme_support( 'post-formats', array( 'aside') ); 
	  }


add_action('after_setup_theme','myWordPress_setup');

// Add a New Menu Location

function extra_setup() {
register_nav_menu ('primary mobile', __( 'Navigation Mobile', 'dehlix_simple' ));
}
add_action( 'after_setup_theme', 'extra_setup' );





// svg

// function add_file_types_to_uploads($file_types){
// 	$new_filetypes = array();
// 	$new_filetypes['svg'] = 'image/svg+xml';
// 	$file_types = array_merge($file_types, $new_filetypes );
// 	return $file_types;
// 	}
// 	add_action('upload_mimes', 'add_file_types_to_uploads');




// Option Page
// if( function_exists('acf_add_options_page') ) {
	
// 	acf_add_options_page();
	
// }
