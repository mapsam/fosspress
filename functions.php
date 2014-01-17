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

	// instantiate aod theme customization register
	function aod_theme_customizer( $wp_customize ) {
		// remove default static_front_page register
		$wp_customize->remove_section( 'static_front_page' );

	// SITE TITLE & TAGLINE - no need for code since this is default :)

	// HERO
		// hero text
		$wp_customize->add_setting( 'aod_hero_text', array(
			'default' 		=> 'Attention!',
		) );
		$wp_customize->add_control( 'aod_hero_text', array(
			'label' 		=> 'Hero / Attention Text',
			'section' 		=> 'aod_hero',
			'priority' 		=> 1,
		) );
		// hero hyperlink text
		$wp_customize->add_setting( 'aod_hero_link_text', array(
			'default' 		=> 'Learn More',
		) );
		$wp_customize->add_control( 'aod_hero_link_text', array(
			'label' 		=> 'Hero / Attention Hyperlink Text',
			'section' 		=> 'aod_hero',
			'priority' 		=> 2,
		) );
		// hero hyperlink
		$wp_customize->add_setting( 'aod_hero_link', array(
			'default' 		=> 'http:// ...',
		) );
		$wp_customize->add_control( 'aod_hero_link', array(
			'label' 		=> 'Hero / Attention Hyperlink',
			'section' 		=> 'aod_hero',
			'priority' 		=> 3,
		) );
		// hero display button
		$wp_customize->add_setting('aod_hero_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('aod_hero_display', array(
	        'settings' 		=> 'aod_hero_display',
	        'label'    		=> 'Hide Hero',
	        'section'  		=> 'aod_hero',
	        'type'     		=> 'checkbox',
	        'priority'		=> 4,
	    ));
		// description section
		$wp_customize->add_section( 'aod_hero', array(
	        'title' 		=> 'Hero',
	        'description' 	=> 'Hero section',
	        'priority' 		=> 100,
	    ) );

	// ABBREV. DESCRIPTION
		$wp_customize->add_setting( 'aod_desc_text', array(
			'default' 		=> 'aod description',
		) );
		$wp_customize->add_control( 'aod_desc_text', array(
			'label' 		=> 'Description below title',
			'section' 		=> 'aod_desc',
			'priority' 		=> 1,
		) );
		// description section
		$wp_customize->add_section( 'aod_desc', array(
	        'title' 		=> 'Description',
	        'description' 	=> 'Description section',
	        'priority' 		=> 105,
	    ) );

	// LANDING PAGE BUTTON
		// button hyperlink
		$wp_customize->add_setting( 'aod_button_link', array(
			'default' 		=> 'http:// ...',
		) );
		$wp_customize->add_control( 'aod_button_link', array(
			'label' 		=> 'Button link',
			'section' 		=> 'aod_button',
			'priority' 		=> 4,
		) );
		// button text
		$wp_customize->add_setting( 'aod_button_text', array(
			'default' 		=> 'Learn more',
		) );
		$wp_customize->add_control( 'aod_button_text', array(
			'label' 		=> 'Button text',
			'section' 		=> 'aod_button',
			'priority' 		=> 5,
		) );
		$wp_customize->add_section( 'aod_button', array(
	        'title' 		=> 'Homepage Button',
	        'description' 	=> 'Button on home page',
	        'priority' 		=> 120,
	    ) );
	}
	add_action( 'customize_register', 'aod_theme_customizer', 11 );
?>