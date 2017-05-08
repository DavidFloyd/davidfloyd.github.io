<?php
/**
 * piclectic Theme Customizer.
 *
 * @package piclectic
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function piclectic_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
//-------------------------------------------------------------------------------------------------------------------//
// Move and Replace
//-------------------------------------------------------------------------------------------------------------------// 
	
	//Colors
	$wp_customize->add_panel( 'piclectic_colors_panel', array(
    'priority'       => 40,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'General Colors', 'piclectic' ),
    'description'    => esc_html__( 'Edit your general color settings.', 'piclectic' ),
	));
	
	//Nav
	$wp_customize->add_panel( 'piclectic_nav_panel', array(
    'priority'       => 11,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => esc_html__( 'Navigation', 'piclectic' ),
    'description'    => esc_html__( 'Edit your theme navigation settings.', 'piclectic' ),
	));
	
	// colors
	$wp_customize->add_section( 'colors', array(
	'title' => esc_html__( 'Theme Colors', 'piclectic' ),   
	'priority' => '10', 
	'panel' => 'piclectic_colors_panel' 
	) );
	
	// Move sections up 
	$wp_customize->get_section('static_front_page')->priority = 8; 
	$wp_customize->get_section('title_tagline')->priority = 10;
	$wp_customize->remove_section('header_image');
	 
//-------------------------------------------------------------------------------------------------------------------//
// Navigation
//-------------------------------------------------------------------------------------------------------------------//

	//Navigation Colors
    $wp_customize->add_section( 'piclectic_nav_colors_section' , array(
	    'title'       => esc_html__( 'Navigation Colors', 'piclectic' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Set your theme navigation colors.', 'piclectic'),
		'panel' => 'piclectic_nav_panel',
	));
	
	$wp_customize->add_setting( 'piclectic_nav_link_color', array( 
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_nav_link_color', array(
        'label'	   => esc_html__( 'Navigation Link', 'piclectic' ),
        'section'  => 'piclectic_nav_colors_section',
        'settings' => 'piclectic_nav_link_color',
		'priority' => 20 
    )));
	
	$wp_customize->add_setting( 'piclectic_nav_link_hover_color', array(
		 'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_nav_link_hover_color', array(
        'label'	   => esc_html__( 'Navigation Link Hover', 'piclectic' ),
        'section'  => 'piclectic_nav_colors_section',
        'settings' => 'piclectic_nav_link_hover_color', 
		'priority' => 30 
    )));
	
	$wp_customize->add_setting( 'piclectic_nav_dropdown_bg_color', array(
		 'default'     => '#f9f9f9', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_nav_dropdown_bg_color', array(
        'label'	   => esc_html__( 'Navigation Dropdown Background', 'piclectic' ),
        'section'  => 'piclectic_nav_colors_section',
        'settings' => 'piclectic_nav_dropdown_bg_color', 
		'priority' => 35
    )));
	
	$wp_customize->add_setting( 'piclectic_mobile_menu_text', array(
		 'default'     => '#ffffff', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_mobile_menu_text', array(
        'label'	   => esc_html__( 'Mobile Menu Button Text', 'piclectic' ),
        'section'  => 'piclectic_nav_colors_section',
        'settings' => 'piclectic_mobile_menu_text', 
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'piclectic_mobile_menu_bg', array(
		 'default'     => '#111111', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_mobile_menu_bg', array(
        'label'	   => esc_html__( 'Mobile Menu Background', 'piclectic' ),
        'section'  => 'piclectic_nav_colors_section',
        'settings' => 'piclectic_mobile_menu_bg', 
		'priority' => 45
    )));
	
//-------------------------------------------------------------------------------------------------------------------//
// Home Section
//-------------------------------------------------------------------------------------------------------------------//
	
	function piclectic_home_tmpl_callback() {
         if( is_page_template( 'template-page-home.php' ))
         { return true; } else { return false; }
 	}
	
	//Home Hero Section
	$wp_customize->add_panel( 'piclectic_home_page_panel', array(
    	'priority'       => 20,
    	'capability'     => 'edit_theme_options',
    	'theme_supports' => '',
		'active_callback' => 'piclectic_home_tmpl_callback',
    	'title'          => esc_html__( 'Home Page Options', 'piclectic' ),
    	'description'    => esc_html__( 'Edit your home page options.', 'piclectic' ),
	));
	
	//Home Hero Section
    $wp_customize->add_section( 'piclectic_home_section' , array( 
		'title'       => esc_html__( 'Home Overview', 'piclectic' ),
	    'priority'    => 20,
	    'description' => esc_html__( 'Edit the options for the home page overview.', 'piclectic'),
		'panel'		  => 'piclectic_home_page_panel',
	));
	
	//Title
	$wp_customize->add_setting( 'piclectic_home_overview',
	    array(
	        'sanitize_callback' => 'piclectic_sanitize_text',  
	));
	
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'piclectic_home_overview', array(
		'label'    => esc_html__( 'Home Overview Text', 'piclectic' ), 
		'section'  => 'piclectic_home_section',
		'type' => 'textarea',
		'settings' => 'piclectic_home_overview',
		'priority'   => 20
	)));
	
	$wp_customize->add_setting( 'piclectic_hero_heading_color', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_hero_heading_color', array(
        'label'	   => esc_html__( 'Overview Text Color', 'piclectic' ),
        'section'  => 'piclectic_home_section',
        'settings' => 'piclectic_hero_heading_color',
		'priority' => 30 
    )));
	
//-------------------------------------------------------------------------------------------------------------------//
// Photo Gallery Options
//-------------------------------------------------------------------------------------------------------------------//

	//Images
	$wp_customize->add_section( 'piclectic_photo_options_section' , array(
    	'title' => esc_html__( 'Images', 'piclectic' ),
    	'priority' => 30, 
    	'description' => esc_html__( 'Edit options for your images.', 'piclectic' ),
		'panel'		  => 'piclectic_home_page_panel', 
	));
	
	//Which option
	$wp_customize->add_setting( 'piclectic_post_order_method', array(
		'default'	        => 'DESC',
		'sanitize_callback' => 'piclectic_sanitize_photo_order',
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'piclectic_post_order_method', array(
		'label' => esc_html__( 'Image Order', 'piclectic' ), 
		'description'    => esc_html__( 'Select to display your posts in descending, ascending, or random order.', 'piclectic' ),
		'section'  => 'piclectic_photo_options_section', 
		'settings' => 'piclectic_post_order_method',
		'type'     => 'radio',
		'priority'   => 10,
		'choices'  => array(
			'DESC' => esc_html__( 'Descending', 'piclectic' ),
			'ASC' => esc_html__( 'Ascending', 'piclectic' ),
			),
	)));
	
	//Hide Title
	$wp_customize->add_setting('active_random',
	    array(
	        'sanitize_callback' => 'piclectic_sanitize_checkbox', 
	));
	
	$wp_customize->add_control( 'active_random', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Random Order', 'piclectic' ),
        'section'  => 'piclectic_photo_options_section', 
		'priority'   => 15
    ));
	
	//View All
	$wp_customize->add_setting( 'piclectic_image_link_text',
	    array(
			'default' => esc_html__( 'View All', 'piclectic' ),
	        'sanitize_callback' => 'piclectic_sanitize_text',  
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'piclectic_image_link_text', array(
		'label'    => esc_html__( 'Image Link Text', 'piclectic' ), 
		'section'  => 'piclectic_photo_options_section', 
		'settings' => 'piclectic_image_link_text',  
		'priority'   => 20
	)));
	
	//Download Text
	$wp_customize->add_setting( 'piclectic_image_download_text',
	    array(
			'default' => esc_html__( 'Download', 'piclectic' ),
	        'sanitize_callback' => 'piclectic_sanitize_text',  
	));

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'piclectic_image_download_text', array(
		'label'    => esc_html__( 'Download Text', 'piclectic' ), 
		'section'  => 'piclectic_photo_options_section', 
		'settings' => 'piclectic_image_download_text',  
		'priority'   => 25
	)));
	
	$wp_customize->add_setting( 'piclectic_image_text_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_image_text_color', array(
        'label'	   => esc_html__( 'Image Text', 'piclectic' ),
        'section'  => 'piclectic_photo_options_section',
        'settings' => 'piclectic_image_text_color',
		'priority' => 35
    )));
	
	$wp_customize->add_setting( 'piclectic_link_button_color', array(
        'default'     => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_link_button_color', array(
        'label'	   => esc_html__( 'Image Link Button Background', 'piclectic' ),
      	'section'  => 'piclectic_photo_options_section', 
        'settings' => 'piclectic_link_button_color',
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'piclectic_link_button_text', array(
        'default'     => '#222222',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_link_button_text', array(
        'label'	   => esc_html__( 'Image Link Button Text', 'piclectic' ),
        'section'  => 'piclectic_photo_options_section', 
        'settings' => 'piclectic_link_button_text',
		'priority' => 45
    )));
	
//-------------------------------------------------------------------------------------------------------------------//
// Footer
//-------------------------------------------------------------------------------------------------------------------//
	
	//Nav
	$wp_customize->add_panel( 'piclectic_footer_panel', array(
    	'priority'       => 35,
    	'capability'     => 'edit_theme_options',
    	'theme_supports' => '',
    	'title'          => esc_html__( 'Footer', 'piclectic' ),
    	'description'    => esc_html__( 'Edit your theme Footer settings.', 'piclectic' ),
	));
	
	// Add Footer Section
	$wp_customize->add_section( 'footer-custom' , array(
    	'title' => esc_html__( 'Footer Settings', 'piclectic' ),
    	'priority' => 10,
    	'description' => esc_html__( 'Customize your footer area', 'piclectic' ),
		'panel' => 'piclectic_footer_panel',
	)); 
	
	// Footer Byline Text 
	$wp_customize->add_setting( 'piclectic_footerid',
	    array(
	        'sanitize_callback' => 'piclectic_sanitize_text',
	));
	 
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'piclectic_footerid', array(
    	'label' => esc_html__( 'Footer Byline Text', 'piclectic' ),
    	'section' => 'footer-custom', 
    	'settings' => 'piclectic_footerid',
		'priority'   => 10
	))); 
	
	//Hide Section 
	$wp_customize->add_setting('active_byline',
	    array(
			'sanitize_callback' => 'piclectic_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 'active_byline', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Footer Byline', 'piclectic' ),
        'section' => 'footer-custom',  
		'priority'   => 20
    ));
	
	$wp_customize->add_setting( 'piclectic_footer_text_color', array(  
        'default'     => '#404040', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_footer_text_color', array(
        'label'	   => esc_html__( 'Footer Text', 'piclectic'),  
        'section'  => 'footer-custom',
        'settings' => 'piclectic_footer_text_color', 
		'priority' => 30
    )));
	
	$wp_customize->add_setting( 'piclectic_footer_link_color', array(   
        'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_footer_link_color', array(
        'label'	   => esc_html__( 'Footer Link', 'piclectic'),  
        'section'  => 'footer-custom',
        'settings' => 'piclectic_footer_link_color', 
		'priority' => 40
    )));
	
	$wp_customize->add_setting( 'piclectic_footer_link_hover_color', array(  
        'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_footer_link_hover_color', array(
        'label'	   => esc_html__( 'Footer Link Hover', 'piclectic'),  
        'section'  => 'footer-custom', 
        'settings' => 'piclectic_footer_link_hover_color', 
		'priority' => 50
    )));
	
//-------------------------------------------------------------------------------------------------------------------//
// Social Icons
//-------------------------------------------------------------------------------------------------------------------//

	//Social Section
	$wp_customize->add_section( 'piclectic_settings', array(
    	'title'          => esc_html__( 'Social Media Icons', 'piclectic' ),
		'description'    => esc_html__( 'First create a Social Icon menu by reading the tutorial at https://modernthemes.net/piclectic-documentation/piclectic-social-icons/. Then edit your social media icon settings here.', 'piclectic' ),
		'panel' => 'piclectic_footer_panel',
    	'priority' => 20,
    ));
	
	//Hide Title
	$wp_customize->add_setting('active_social_icons',
	    array(
	        'sanitize_callback' => 'piclectic_sanitize_checkbox',
	)); 
	
	$wp_customize->add_control( 'active_social_icons', array(
        'type' => 'checkbox',
        'label' => esc_html__( 'Hide Social Icons', 'piclectic' ),
       	'section'     => 'piclectic_settings',  
		'priority'   => 10
    ));
	
	//Social Font Size
    $wp_customize->add_setting( 
    'piclectic_social_text_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '16',
    ));
	
    $wp_customize->add_control( 'piclectic_social_text_size', array(
        'type'        => 'number', 
        'priority'    => 15,
        'section'     => 'piclectic_settings', 
        'label'       => esc_html__('Social Icon Size', 'piclectic'), 
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 32, 
            'step'  => 1,
            'style' => 'margin-bottom: 10px;',
        ),
  	));
	
	//Social Icon Colors
	$wp_customize->add_setting( 'piclectic_social_color', array(
        'default'     => '#000000',
		'sanitize_callback' => 'sanitize_hex_color', 
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_social_color', array(
        'label'	   => esc_html__( 'Social Icon Color', 'piclectic' ),
        'section'  => 'piclectic_settings',
        'settings' => 'piclectic_social_color', 
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'piclectic_social_color_hover', array( 
        'default'     => '#000000',  
		'sanitize_callback' => 'sanitize_hex_color',  
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_social_color_hover', array(
        'label'	   => esc_html__( 'Social Icon Hover Color', 'piclectic' ), 
        'section'  => 'piclectic_settings',
        'settings' => 'piclectic_social_color_hover', 
		'priority' => 30
    )));
	
//-------------------------------------------------------------------------------------------------------------------//
// Blog
//-------------------------------------------------------------------------------------------------------------------//	
	
	//Blog Sidebar
    $wp_customize->add_section(
        'piclectic_layout_section',
        array(
            'title' => esc_html__( 'Blog', 'piclectic' ),   
            'priority' => 40,
    ));
	
	//Blog Colors
	$wp_customize->add_setting( 'piclectic_post_nav_bg', array( 
        'default'     => '#000000', 
		'sanitize_callback' => 'sanitize_hex_color', 
    )); 
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_post_nav_bg', array(
        'label'	   => esc_html__( 'Post Navigation Background', 'piclectic' ), 
        'section'  => 'piclectic_layout_section',
        'settings' => 'piclectic_post_nav_bg',
		'priority' => 40
    )));
	
	//Excluded Terms
	$wp_customize->add_setting( 'piclectic_post_nav_terms',
	    array(
	        'sanitize_callback' => 'piclectic_sanitize_text',
	));  

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'piclectic_post_nav_terms', array(
		'label'    => esc_html__( 'Post Navigation Excluded Categories', 'piclectic' ),
		'description'    => esc_html__( 'If you would like to exclude certain categories from the navigation at the bottom of single post pages, enter in the category numbers in the field below. Separate each number with a comma. For example: 15, 17, 18', 'piclectic' ),
		'section'  => 'piclectic_layout_section',   
		'settings' => 'piclectic_post_nav_terms', 
		'priority'   => 50
	)));
	
//-------------------------------------------------------------------------------------------------------------------//
// Colors
//-------------------------------------------------------------------------------------------------------------------//
	
	// Colors
	$wp_customize->add_setting( 'piclectic_text_color', array(
        'default'     => '#404040',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_text_color', array(
        'label'	   => esc_html__( 'Text Color', 'piclectic' ),
        'section'  => 'colors',
        'settings' => 'piclectic_text_color',
		'priority' => 10 
    )));
	
	// Colors
	$wp_customize->add_setting( 'piclectic_heading_color', array(
        'default'     => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_heading_color', array(
        'label'	   => esc_html__( 'Heading Color', 'piclectic' ),
        'section'  => 'colors',
        'settings' => 'piclectic_heading_color',
		'priority' => 15
    )));
	
    $wp_customize->add_setting( 'piclectic_link_color', array( 
        'default'     => '#000000',   
        'sanitize_callback' => 'sanitize_hex_color', 
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_link_color', array(
        'label'	   => esc_html__( 'Link Color', 'piclectic'),
        'section'  => 'colors',
        'settings' => 'piclectic_link_color', 
		'priority' => 20
    )));
	
	$wp_customize->add_setting( 'piclectic_hover_color', array( 
        'default'     => '#000000',  
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_hover_color', array(
        'label'	   => esc_html__( 'Hover Color', 'piclectic' ), 
        'section'  => 'colors',
        'settings' => 'piclectic_hover_color',
		'priority' => 25
    )));
	
	$wp_customize->add_setting( 'piclectic_site_title_color', array(
        'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color',
    )); 
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_site_title_color', array(
        'label'	   => esc_html__( 'Site Title Color', 'piclectic' ),  
        'section'  => 'colors',
        'settings' => 'piclectic_site_title_color',
		'priority' => 5
    )));
	
	
	//Page Colors
    $wp_customize->add_section( 'piclectic_page_colors_section' , array(  
	    'title'       => esc_html__( 'Page Colors', 'piclectic' ),
	    'priority'    => 20, 
	    'description' => esc_html__( 'Set your page colors.', 'piclectic'),
		'panel' => 'piclectic_colors_panel',
	));
	
	$wp_customize->add_setting( 'piclectic_entry', array(
        'default'     => '#000000', 
        'sanitize_callback' => 'sanitize_hex_color',
    ));
 
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_entry', array(
        'label'	   => esc_html__( 'Entry Title Color', 'piclectic' ), 
        'section'  => 'piclectic_page_colors_section',
        'settings' => 'piclectic_entry', 
		'priority' => 50 
    )));
	
	$wp_customize->add_setting( 'piclectic_button_color', array(  
        'default'     => '#000000',  
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_button_color', array(
        'label'	   => esc_html__( 'Comment Button Color', 'piclectic' ), 
        'section'  => 'piclectic_page_colors_section',
        'settings' => 'piclectic_button_color', 
		'priority' => 60
    )));
	
	$wp_customize->add_setting( 'piclectic_button_text_color', array(  
        'default'     => '#000000',  
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_button_text_color', array(
        'label'	   => esc_html__( 'Comment Button Text Color', 'piclectic' ), 
        'section'  => 'piclectic_page_colors_section',
        'settings' => 'piclectic_button_text_color',
		'priority' => 63
    )));
	
	$wp_customize->add_setting( 'piclectic_button_hover_color', array(  
        'default'     => '#000000',  
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_button_hover_color', array(
        'label'	   => esc_html__( 'Comment Button Hover Background Color', 'piclectic' ), 
        'section'  => 'piclectic_page_colors_section', 
        'settings' => 'piclectic_button_hover_color', 
		'priority' => 65 
    ))); 
	
	$wp_customize->add_setting( 'piclectic_button_hover_text_color', array(  
        'default'     => '#ffffff',  
		'sanitize_callback' => 'sanitize_hex_color',
    ));
	
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'piclectic_button_hover_text_color', array(
        'label'	   => esc_html__( 'Comment Button Hover Text Color', 'piclectic' ), 
        'section'  => 'piclectic_page_colors_section', 
        'settings' => 'piclectic_button_hover_text_color', 
		'priority' => 70 
    )));
	
	
//-------------------------------------------------------------------------------------------------------------------//
// Fonts
//-------------------------------------------------------------------------------------------------------------------//	
	
	
	// Fonts  
    $wp_customize->add_section(
        'piclectic_typography',
        array(
            'title' => esc_html__('Fonts', 'piclectic' ),   
            'priority' => 45, 
    ));
	
    $font_choices = 
        array(
			'', 
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Oswald:400,700' => 'Oswald',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
            'Droid Sans:400,700' => 'Droid Sans',
            'Lato:400,700,400italic,700italic' => 'Lato',
            'Arvo:400,700,400italic,700italic' => 'Arvo',
            'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif', 
            'PT Sans:400,700,400italic,700italic' => 'PT Sans',
            'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',  
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
            'Arimo:400,700,400italic,700italic' => 'Arimo',
            'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
            'Bitter:400,700,400italic' => 'Bitter',
            'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
            'Roboto:400,400italic,700,700italic' => 'Roboto',
            'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
            'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
            'Roboto Slab:400,700' => 'Roboto Slab',
            'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
            'Rokkitt:400' => 'Rokkitt', 
    );
	
	//body font size
    $wp_customize->add_setting(
        'piclectic_body_size',
        array(
            'sanitize_callback' => 'absint',
            'default'           => '18', 
        )
    );
	
    $wp_customize->add_control( 'piclectic_body_size', array(
        'type'        => 'number', 
        'priority'    => 10,
        'section'     => 'piclectic_typography',
        'label'       => esc_html__('Body Font Size', 'piclectic'),
        'input_attrs' => array(
            'min'   => 10,
            'max'   => 28,
            'step'  => 1,
            'style' => 'margin-bottom: 10px;',
        ),
  	));
    
    $wp_customize->add_setting(
        'headings_fonts',
        array(
            'sanitize_callback' => 'piclectic_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'headings_fonts',
        array(
            'type' => 'select',
			'default'           => '20', 
            'description' => esc_html__('Select your desired font for the headings. Helvetica Neue is the default Heading font.', 'piclectic'),
            'section' => 'piclectic_typography',
            'choices' => $font_choices
    ));
    
    $wp_customize->add_setting(
        'body_fonts',
        array(
            'sanitize_callback' => 'piclectic_sanitize_fonts',
    ));
    
    $wp_customize->add_control(
        'body_fonts',
        array(
            'type' => 'select',
			'default'           => '30', 
            'description' => esc_html__( 'Select your desired font for the body. Helvetica Neue is the default Body font.', 'piclectic' ), 
            'section' => 'piclectic_typography',  
            'choices' => $font_choices 
    )); 

	
}
add_action( 'customize_register', 'piclectic_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function piclectic_customize_preview_js() {
	wp_enqueue_script( 'piclectic_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'piclectic_customize_preview_js' );
