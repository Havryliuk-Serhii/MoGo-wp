<?php
show_admin_bar( false );
if ( ! function_exists( 'mogo_setup' ) ) :

	function mogo_setup() {

		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus( array(
			'header_menu' => esc_html__( 'Primary', 'mogo' ),
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


	}
endif;

add_action( 'after_setup_theme', 'mogo_setup' );

/**
 * Enqueue scripts and styles.
 */
function mogo_scripts() {
	// add styles
	wp_enqueue_style( 'mogo-style', get_stylesheet_uri() );
	wp_enqueue_style( 'mogo-grid', get_template_directory_uri() . '/css/bootstrap-grid.min.css');
  wp_enqueue_style( 'mogo-reboot', get_template_directory_uri() . '/css/bootstrap-reboot.min.css');
  wp_enqueue_style( 'mogo-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'mogo-fontawesome-style', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css', array(), '5.11.2' );
	wp_enqueue_style( 'mogo-main-style', get_template_directory_uri() . '/css/main.css');
// add scripts
	wp_enqueue_script( 'mogo-jquery-slim',  get_template_directory_uri() . '/js/jquery-3.4.1.slim.min.js', array(),'3.4.1', true);
	wp_enqueue_script( 'mogo-popper-script', get_template_directory_uri() . '/js/popper.min.js', array(), '', true );
	wp_enqueue_script( 'mogo-bootstrap-script', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '', true );
	wp_enqueue_script( 'mogo-main-script', get_template_directory_uri() . '/js/custom.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'mogo_scripts' );

require get_template_directory().'/inc/theme-functions.php';
