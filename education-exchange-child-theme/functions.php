<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );


	//New Scripts & Styles
	//wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/custom-js/app.js', array(), '1.0.0', true );
	//wp_enqueue_style( 'mainStyle', get_stylesheet_directory_uri() . '/custom-css/main.css', array() );



	//Scroll Plugin JS

	if (is_page(4110)) {
		wp_enqueue_script( 'ms01', get_stylesheet_directory_uri() . '/scroll/jquery.multiscroll.js', array(), '', true );
		wp_enqueue_script( 'ms02', get_stylesheet_directory_uri() . '/scroll/jquery.multiscroll.min.js', array(), '', true );
		wp_enqueue_script( 'msEasing', get_stylesheet_directory_uri() . '/scroll/vendors/jquery.easings.min.js', array(), '', true );
		//Scroll Plugin CSS
		wp_enqueue_style( 'ms01style', get_stylesheet_directory_uri() . '/scroll/jquery.multiscroll.css', array(), true );
	}
	
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );



