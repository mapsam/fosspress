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

	// DESCRIPTION
		$wp_customize->add_setting( 'foss4g2014_description', array(
			'default' 		=> 'foss4g2014 description',
		) );
		$wp_customize->add_control( 'foss4g2014_description', array(
			'label' 		=> 'Description Text',
			'section' 		=> 'foss4g2014_description',
			'priority' 		=> 10,
		) );
		$wp_customize->add_setting('foss4g2014_description_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_description_display', array(
	        'settings' 		=> 'foss4g2014_description_display',
	        'label'    		=> 'Hide Submission Info',
	        'section'  		=> 'foss4g2014_description',
	        'type'     		=> 'checkbox',
	        'priority'		=> 20,
	    ));
		// description section
		$wp_customize->add_section( 'foss4g2014_description', array(
	        'title' 		=> 'Description',
	        'description' 	=> 'Description section',
	        'priority' 		=> 120,
	    ) );

	// BUTTON ONE
		// button hyperlink text
		$wp_customize->add_setting( 'foss4g2014_button_one_text', array(
			'default' 		=> 'Button Text',
		) );
		$wp_customize->add_control( 'foss4g2014_button_one_text', array(
			'label' 		=> 'Text',
			'section' 		=> 'foss4g2014_button_one',
			'priority' 		=> 2,
		) );
		// button hyperlink
		$wp_customize->add_setting( 'foss4g2014_button_one_link', array(
			'default' 		=> 'http:// ...',
		) );
		$wp_customize->add_control( 'foss4g2014_button_one_link', array(
			'label' 		=> 'Link',
			'section' 		=> 'foss4g2014_button_one',
			'priority' 		=> 3,
		) );
		// button color
		$wp_customize->add_setting( 'foss4g2014_button_one_color', array(
			'default'		=> 'red',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_one_color', array(
			'label'        => __( 'Button Color', 'foss4g2014' ),
			'section'    => 'foss4g2014_button_one',
			'settings'   => 'foss4g2014_button_one_color',
		) ) );
		// button display button
		$wp_customize->add_setting('foss4g2014_button_one_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_button_one_display', array(
	        'settings' 		=> 'foss4g2014_button_one_display',
	        'label'    		=> 'Hide Button',
	        'section'  		=> 'foss4g2014_button_one',
	        'type'     		=> 'checkbox',
	        'priority'		=> 4,
	    ));

		// button section
		$wp_customize->add_section( 'foss4g2014_button_one', array(
	        'title' 		=> 'Button One',
	        'description' 	=> 'Landing Page Buttons',
	        'priority' 		=> 130,
	    ) );

	// BUTTON TWO
		// button hyperlink text
		$wp_customize->add_setting( 'foss4g2014_button_two_text', array(
			'default' 		=> 'Button Text',
		) );
		$wp_customize->add_control( 'foss4g2014_button_two_text', array(
			'label' 		=> 'Text',
			'section' 		=> 'foss4g2014_button_two',
			'priority' 		=> 2,
		) );
		// button hyperlink
		$wp_customize->add_setting( 'foss4g2014_button_two_link', array(
			'default' 		=> 'http:// ...',
		) );
		$wp_customize->add_control( 'foss4g2014_button_two_link', array(
			'label' 		=> 'Link',
			'section' 		=> 'foss4g2014_button_two',
			'priority' 		=> 3,
		) );
		// button color
		$wp_customize->add_setting( 'foss4g2014_button_two_color', array(
			'default'		=> '#c0c0c0',
		) );
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_two_color', array(
			'label'        => __( 'Button Color', 'foss4g2014' ),
			'section'    => 'foss4g2014_button_two',
			'settings'   => 'foss4g2014_button_two_color',
		) ) );
		// button display button
		$wp_customize->add_setting('foss4g2014_button_two_display', array(
	        'default' 		=> 0,
		    ));
	    $wp_customize->add_control('foss4g2014_button_two_display', array(
	        'settings' 		=> 'foss4g2014_button_two_display',
	        'label'    		=> 'Hide Button',
	        'section'  		=> 'foss4g2014_button_two',
	        'type'     		=> 'checkbox',
	        'priority'		=> 4,
	    ));

		// button section
		$wp_customize->add_section( 'foss4g2014_button_two', array(
	        'title' 		=> 'Button Two',
	        'description' 	=> 'Landing Page Buttons',
	        'priority' 		=> 140,
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
	        'priority' 		=> 150,
	    ) );

	

	
	}
	add_action( 'customize_register', 'foss4g2014_theme_customizer', 11 );

	function foss4g2014_customize_css()
	{
	    ?>
	         <style type="text/css">
	             #button-one { background-color:<?php echo get_theme_mod('foss4g2014_button_one_color'); ?>; }
	             #button-two { background-color:<?php echo get_theme_mod('foss4g2014_button_two_color'); ?>; }
	         </style>

	    <?php
	}
	add_action( 'wp_head', 'foss4g2014_customize_css');

?>