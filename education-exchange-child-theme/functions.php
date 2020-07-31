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
	wp_enqueue_style( 'mainStyle', get_stylesheet_directory_uri() . '/custom-css/main.css', array() );
	wp_enqueue_style( 'responsiveStyle', get_stylesheet_directory_uri() . '/custom-css/responsive.css', array() );


	//User LogIn JS
	if (is_page(5397)) {
		wp_enqueue_script( 'userlogin', get_stylesheet_directory_uri() . '/custom-js/userLogin.js', array(), '', true );
	}	

	//Home Page JS
	if (is_page('home')) {
		wp_enqueue_script( 'homeJS', get_stylesheet_directory_uri() . '/custom-js/home.js', array(), '', true );
	}	
	
	//User Activity JS
	if (is_page(5722)) {
		wp_enqueue_script( 'userActivity', get_stylesheet_directory_uri() . '/custom-js/userActivity.js', array(), '', true );
	}
	
	//Non logged in users 
	if (is_page(array(4731, 5397, 5390))) {
		wp_enqueue_script( 'nonLoggedInJS', get_stylesheet_directory_uri() . '/custom-js/nonLoggedInJS.js', array(), '', true );
	}

	if ( is_bbpress() ){
		wp_enqueue_script( 'forumsJS', get_stylesheet_directory_uri() . '/custom-js/forums.js', array(), '', true );
	}	
	
	//Load this script last 
	wp_enqueue_script( 'customjs', get_stylesheet_directory_uri() . '/custom-js/app.js', array(), '1.0.0', true );


}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Custom Login

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
        background-image: url('http://gittheeducation.exchange/wp-content/uploads/2020/05/EducationExchange_MainLogo_White.png');
		height: 65px;
    	width: 320px;
    	background-size: 271px 135px;
    	background-repeat: no-repeat;
    	padding-bottom: 60px;
		}
		/* Body */
		body.login {
		background:#1B2342;
		color:#fff;
		}
		/* Log In Section */
		form#loginform,
		form#lostpasswordform,
		form#registerform {
 		   background: #1B2342;
    	   border: none;
		}
		.login #backtoblog a, .login #nav a {
    		color: #fff !important;
		}

		/* When you Sign up - success message */

		p.message {
			color: #1b2442 !important;
			font-weight: 700;
			text-align: center;
		}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

//remove the [...] on excerpt.
function new_excerpt_more( $more ) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

//Will this stop the pop up??? Log Out Session WordPress.

add_filter( 'auth_cookie_expiration', 'keep_me_logged_in_for_1_year' );
function keep_me_logged_in_for_1_year( $expirein ) {
    return 31556926; // 1 year in seconds
}