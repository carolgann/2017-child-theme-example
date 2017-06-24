<?php

/**
  * Here we are adding 1 additional widget section in the footer
  */
add_action( 'widgets_init', 'ptron_footer_widgets_init' );
function ptron_footer_widgets_init() {
	register_sidebar( array(
		'id'            => 'sidebar-4',
		'name'          => __( 'Footer 3', 'twenty-seventeen-child-example' ),
		'description'   => __( 'Widgets placed here appear in on the right side of your footer.', 'twenty-seventeen-child-example' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
}


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
