<?php
	ob_start();
	add_theme_support( 'menus' );
	require_once('wp_bootstrap_navwalker.php');
	add_action( 'widgets_init', 'foss4g2014_widgets_init' );
	register_nav_menus( array(
	    'primary' => __( 'Primary', 'foss4g' ),
	) );
	function foss4g2014_widgets_init() {
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

	// instantiate foss4g2014 theme customization register
	function foss4g2014_theme_customizer( $wp_customize ) {
		// remove default static_front_page register and navigation
		$wp_customize->remove_section( 'static_front_page' );
		$wp_customize->remove_section( 'nav' );

	// SITE TITLE & TAGLINE - no need for code since this is default :)
		// show this first

	// LANDING PAGE DATES
		// main conference date
		$wp_customize->add_setting( 'foss4g2014_conference_title', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_conference_title', array(
			'label' 		=> 'Main Conference Text',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 10,
		) );
		$wp_customize->add_setting( 'foss4g2014_conference_date', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_conference_date', array(
			'label' 		=> 'Main Conference Dates',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 15,
		) );

		// workshop dates
		$wp_customize->add_setting( 'foss4g2014_workshop_title', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_workshop_title', array(
			'label' 		=> 'Workshop Text',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 20,
		) );
		$wp_customize->add_setting( 'foss4g2014_workshop_date', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_workshop_date', array(
			'label' 		=> 'Workshop Dates',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 25,
		) );
		$wp_customize->add_setting('foss4g2014_workshop_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_workshop_display', array(
	        'settings' 		=> 'foss4g2014_workshop_display',
	        'label'    		=> 'Hide Workshop Info',
	        'section'  		=> 'foss4g2014_header',
	        'type'     		=> 'checkbox',
	        'priority'		=> 26,
	    ));

		// registration deadlines
		$wp_customize->add_setting( 'foss4g2014_registration_title', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_registration_title', array(
			'label' 		=> 'Registration Text',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 30,
		) );
		$wp_customize->add_setting( 'foss4g2014_registration_date', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_registration_date', array(
			'label' 		=> 'Registration Deadline',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 35,
		) );
		$wp_customize->add_setting('foss4g2014_registration_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_registration_display', array(
	        'settings' 		=> 'foss4g2014_registration_display',
	        'label'    		=> 'Hide Registration Info',
	        'section'  		=> 'foss4g2014_header',
	        'type'     		=> 'checkbox',
	        'priority'		=> 36,
	    ));

		// submission deadlines
		$wp_customize->add_setting( 'foss4g2014_submission_title', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_submission_title', array(
			'label' 		=> 'Submission Text',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 40,
		) );
		$wp_customize->add_setting( 'foss4g2014_submission_date', array(
			'default' 		=> '',
		) );
		$wp_customize->add_control( 'foss4g2014_submission_date', array(
			'label' 		=> 'Submission Deadline',
			'section' 		=> 'foss4g2014_header',
			'priority' 		=> 45,
		) );
		$wp_customize->add_setting('foss4g2014_submission_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_submission_display', array(
	        'settings' 		=> 'foss4g2014_submission_display',
	        'label'    		=> 'Hide Submission Info',
	        'section'  		=> 'foss4g2014_header',
	        'type'     		=> 'checkbox',
	        'priority'		=> 46,
	    ));

		// register section for conference times
		$wp_customize->add_section( 'foss4g2014_header', array(
	        'title' 		=> 'Conference Date Information',
	        'description' 	=> 'Located under landing page headline and footer',
	        'priority' 		=> 110,
	    ) );

	// ABBREV. DESCRIPTION
		$wp_customize->add_setting( 'foss4g2014_desc_text', array(
			'default' 		=> 'foss4g2014 description',
		) );
		$wp_customize->add_control( 'foss4g2014_desc_text', array(
			'label' 		=> 'Description below title',
			'section' 		=> 'foss4g2014_desc',
			'priority' 		=> 1,
		) );
		// description section
		$wp_customize->add_section( 'foss4g2014_desc', array(
	        'title' 		=> 'Description',
	        'description' 	=> 'Description section',
	        'priority' 		=> 120,
	    ) );

	// HERO
		// hero text
		$wp_customize->add_setting( 'foss4g2014_hero_text', array(
			'default' 		=> 'Attention!',
		) );
		$wp_customize->add_control( 'foss4g2014_hero_text', array(
			'label' 		=> 'Hero / Attention Text',
			'section' 		=> 'foss4g2014_hero',
			'priority' 		=> 1,
		) );
		// hero hyperlink text
		$wp_customize->add_setting( 'foss4g2014_hero_link_text', array(
			'default' 		=> 'Learn More',
		) );
		$wp_customize->add_control( 'foss4g2014_hero_link_text', array(
			'label' 		=> 'Hero / Attention Hyperlink Text',
			'section' 		=> 'foss4g2014_hero',
			'priority' 		=> 2,
		) );
		// hero hyperlink
		$wp_customize->add_setting( 'foss4g2014_hero_link', array(
			'default' 		=> 'http:// ...',
		) );
		$wp_customize->add_control( 'foss4g2014_hero_link', array(
			'label' 		=> 'Hero / Attention Hyperlink',
			'section' 		=> 'foss4g2014_hero',
			'priority' 		=> 3,
		) );
		// hero display button
		$wp_customize->add_setting('foss4g2014_hero_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_hero_display', array(
	        'settings' 		=> 'foss4g2014_hero_display',
	        'label'    		=> 'Hide Hero',
	        'section'  		=> 'foss4g2014_hero',
	        'type'     		=> 'checkbox',
	        'priority'		=> 4,
	    ));
		// description section
		$wp_customize->add_section( 'foss4g2014_hero', array(
	        'title' 		=> 'Hero',
	        'description' 	=> 'Hero section',
	        'priority' 		=> 130,
	    ) );

	

	
	}
	add_action( 'customize_register', 'foss4g2014_theme_customizer', 11 );
?>