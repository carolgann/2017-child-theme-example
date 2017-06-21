<?php

/**
  * Here we add a new function to the wp_enqueue_scripts hook
  * to enqueue the parent stylesheet and then enqueue the
  * child theme style sheet with a dependency of the parent theme stylesheet
  */
add_action( 'wp_enqueue_scripts', 'ptron_theme_enqueue_styles' );
function ptron_theme_enqueue_styles() {

    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>
