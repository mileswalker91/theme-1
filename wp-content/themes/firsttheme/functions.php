<?php

add_action( 'wp_enqueue_scripts', 'wordpress_scripts' );

function wordpress_scripts() {

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.2.1.slim.min.js');
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js', array( 'jquery' ) );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array() );



}



add_action('wp_print_styles', 'wordpress_google_fonts');

function wordpress_google_fonts() {
				wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800');
				wp_enqueue_style( 'OpenSans');
		}



add_action( 'wp_enqueue_scripts', 'jgc_enqueue_material_icons' );
function jgc_enqueue_material_icons() {

	wp_enqueue_style( 'material-icons', '//fonts.googleapis.com/icon?family=Material+Icons', array(), CHILD_THEME_VERSION );

}
function register_header_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_header_menu' );

require_once('wp_bootstrap_navwalker.php');

// Bootstrap navigation
function bootstrap_nav()
{
	wp_nav_menu( array(
            'theme_location'    => 'header-menu',
            'depth'             => 2,
            'container'         => 'false',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker())



    );
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();
	acf_add_options_sub_page('contact');
	acf_add_options_sub_page('footer');
	acf_add_options_sub_page('colors');
}

add_action( 'wp_enqueue_scripts', 'firsttheme_slick_enqueue_scripts_styles' );

function firsttheme_slick_enqueue_scripts_styles() {
	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), true );
	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'jquery' ), true );

	wp_enqueue_style( 'slickcss', get_stylesheet_directory_uri() . '/slick/slick.css', 'all');
	wp_enqueue_style( 'slickcsstheme', get_stylesheet_directory_uri(). '/slick/slick-theme.css', 'all');

}

add_action( 'wp_enqueue_scripts', 'slick_lightbox' );

function slick_lightbox() {
	wp_enqueue_script( 'slickLightbox', get_stylesheet_directory_uri() . '/lightbox/slick-lightbox.js', array( 'jquery' ), true );
	wp_enqueue_style( 'slickLightbox', get_stylesheet_directory_uri() . '/lightbox/slick-lightbox.css', 'all');

}

add_action( 'wp_enqueue_scripts', 'lightbox' );

function lightbox() {
	wp_enqueue_script( 'Lightbox', get_stylesheet_directory_uri() . '/js/lightbox.js', array( 'jquery' ), true );

}

add_action( 'wp_enqueue_scripts', 'custom_styles' );

function custom_styles() {
	wp_enqueue_style( 'site', get_stylesheet_directory_uri() . '/css/site.min.css' );

}
