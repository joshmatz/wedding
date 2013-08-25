<?php 

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.0.0' );

//* Enqueue Lato Google font
add_action( 'wp_enqueue_scripts', 'genesis_sample_google_fonts' );
function genesis_sample_google_fonts() {
	wp_enqueue_style( 'google-font-lato', '//fonts.googleapis.com/css?family=Lato:700', array(), CHILD_THEME_VERSION );
}

//* Add HTML5 markup structure
add_theme_support( 'html5' );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Add post support for the following
add_theme_support( 'post-formats', array('gallery', 'link', 'image', 'quote', 'video', 'audio') );


//add_action('init', 'flush_post_rules' );
function flush_post_rules() {
	flush_rewrite_rules(); 
}

@include_once( get_stylesheet_directory() . '/includes/woocommerce.php' );
@include_once( get_stylesheet_directory() . '/includes/metaboxes.php' );