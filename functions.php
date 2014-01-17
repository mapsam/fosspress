<?php
	ob_start();
	add_theme_support( 'menus' );
	require_once('wp_bootstrap_navwalker.php');
	add_action( 'widgets_init', 'aod_widgets_init' );
	register_nav_menus( array(
	    'primary' => __( 'Primary', 'foss4g' ),
	) );
	function aod_widgets_init() {
		register_sidebar( array (
			'name' => __('Sidebar Widget Area', 'foss4g'),
			'id' => 'primary-widget-area',
			'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
			'after_widget' => "</li>",
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
			) );
	}
	function custom_excerpt_length( $length ) {
	return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	add_theme_support( 'post-thumbnails' );

	add_post_type_support('page', 'excerpt');

	// instantiate foss4g theme customization register
	function foss4g_theme_customizer( $wp_customize ) {
		// remove default static_front_page register
		$wp_customize->remove_section( 'static_front_page' );

	// SITE TITLE & TAGLINE - no need for code since this is default :)

	
	add_action( 'customize_register', 'foss4g_theme_customizer', 11 );
?>