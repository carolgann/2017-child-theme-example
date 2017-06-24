<?php

/**
 * functions.php for the 2017-child-theme-example
*/

/**
 * Add a section in the customizer to allow the user to change a setting to
 * only show excerpts on archive pages.
 */
add_action( 'customize_register', 'ptron_customize_register' );
function ptron_customize_register( WP_Customize_Manager $wp_customize ) {
	$wp_customize->add_section( 'section_archives', array(
		'title' => __( 'Archives', 'twenty-seventeen-child-example' ),
	) );
	$wp_customize->add_setting( 'show_excerpts_in_archives', array(
		'type'      => 'theme_mod',
		'transport' => 'refresh',
	) );
	$wp_customize->add_control( new WP_Customize_Control(
		$wp_customize,
		'show_excerpts_in_archives_control',
		array(
			'label'    => __( 'Only show excerpts on archive pages', 'twenty-seventeen-child-example' ),
			'section'  => 'section_archives',
			'settings' => 'show_excerpts_in_archives',
			'type'     => 'checkbox',
		)
	) );
}

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

    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
?>
