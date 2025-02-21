<?php

/**
 * Proper way to enqueue scripts and styles
 */

function wpdocs_shopy_theme_scripts() {
    wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'templatemo', get_template_directory_uri() . '/assets/css/templatemo.css' );
    wp_enqueue_style( 'google_font', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.min.css' );

	wp_enqueue_script( 'jequery', get_template_directory_uri() . '/assets/js/jquery-1.11.0.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jequery_megrate', get_template_directory_uri() . 'assets/js/jquery-migrate-1.2.1.min.js', array('jequery'), '1.0.0', true );
    wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array('jequery'), '1.0.0', true );
    wp_enqueue_script( 'templatemo', get_template_directory_uri() . '/assets/js/templatemo.js', array('jequery'), '1.0.0', true );
    wp_enqueue_script( 'custom_js', get_template_directory_uri() . '/assets/js/custom.js', array('jequery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_shopy_theme_scripts' );

?>

