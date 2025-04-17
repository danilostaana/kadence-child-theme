<?php
/**
 * Enqueue child and parent styles.
 */
function child_enqueue_styles() {
    // Load the parent theme’s stylesheet first
    wp_enqueue_style( 'kadence-style', get_template_directory_uri() . '/style.css' );
    
    // Then load the child theme’s stylesheet
    wp_enqueue_style( 'kadence-child-style', get_stylesheet_uri(), array('kadence-style'), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles' );

/**
 * Add custom functions below this line.
 */
