<?php
define( 'THEME_DIR', get_stylesheet_directory() );
define( 'LIBS_DIR', THEME_DIR. '/functions' );

add_action( 'wp_enqueue_scripts', 'slider');
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
add_action( 'after_setup_theme', 'my_child_theme_locale' );
add_action( 'widgets_init', 'my_custom_sidebar' );
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
add_action( 'wp_ajax_submit_volunteer', 'submit_volunteer');

// add_action('wp_enqueue_scripts', 'slider_css');
function slider() {
    wp_enqueue_style( 'slider_css', get_stylesheet_directory_uri() . '/css/slippry.css');    
    wp_enqueue_script( 'slider_js', get_stylesheet_directory_uri() . '/js/slider.js', array( 'jquery' ), '1.0', true );
}

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array('slider_css') );
}

// Load translation files from your child theme instead of the parent theme
function my_child_theme_locale() {
    load_child_theme_textdomain( 'twentysixteen', get_stylesheet_directory() . '/languages' );
}

function my_custom_sidebar() {
    register_sidebar(
        array (
            'name' => __( 'Custom', 'your-theme-domain' ),
            'id' => 'custom-side-bar',
            'description' => __( 'Custom Sidebar', 'your-theme-domain' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}


function enqueue_scripts() {
	global $post;
	if ( ! empty( $post ) && is_page( $post ) ) {
		wp_enqueue_script( 'scripts_js', get_stylesheet_directory_uri() . '/js/scripts.js',  array( 'jquery' ));
        wp_localize_script( 'scripts_js', 'EE',
            array(
                'ajaxUrl' => admin_url( 'admin-ajax.php' ), //url for php file that process ajax request to WP
                'nonce' => wp_create_nonce( "unique_id_nonce" ),// this is a unique token to prevent form hijacking
                'someData' => 'extra data you want  available to JS'
            ));
	}
}

function submit_volunteer() {
    echo 'a';
    die();
}

// Widgets ----------------------------------------------------------------------
require_once( LIBS_DIR .'/widget-functions.php' );
require_once( LIBS_DIR .'/widget-social-networks.php' );
require_once( LIBS_DIR .'/widget-newsletter.php' );
require_once( LIBS_DIR .'/widget-login-forum.php' );

