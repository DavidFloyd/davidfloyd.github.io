<?php
/**
 * piclectic functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package piclectic
 */
 
/**
 * register the theme update
 */ 
require 'theme-updates/theme-update-checker.php';
$MyThemeUpdateChecker = new ThemeUpdateChecker(
'piclectic', //Theme slug. Usually the same as the name of its directory.
'http://modernthemes.net/updates/?action=get_metadata&slug=piclectic' //Metadata URL.
);  
 

if ( ! function_exists( 'piclectic_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function piclectic_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on piclectic, use a find and replace
	 * to change 'piclectic' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'piclectic', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'piclectic-gallery-square', 600, 600, array( 'center', 'center' ) ); 

	// This theme uses wp_nav_menu() in one location. 
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'piclectic' ),
		'social'  => esc_html__( 'Social', 'piclectic' ), 
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	
	/*
	 * Add Image post format support
	 */
	add_theme_support( 'post-formats', array( 'image' ) );
	
	/* Editor styles. */
	add_editor_style( piclectic_get_editor_styles() ); 
	
	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
	
	// Set logo support
    add_theme_support( 'custom-logo', array(
		'flex-width'  => true,
	) );


	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'piclectic_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	)));
	
	
	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts' => array(
        	'home' => array(
            	'template' => 'template-page-home.php',
        	),
        	'image-1' => array(
            	'post_type' => 'post',
            	'post_title' => _x( 'Linear Fragments', 'Theme starter content', 'piclectic' ),
            	'thumbnail' => '{{image-image-1}}',
				'terms' => array( 'post-format-image' ),
        	),
			'image-2' => array(
            	'post_type' => 'post',
            	'post_title' => _x( 'Fresh Pair of Kicks', 'Theme starter content', 'piclectic' ),
            	'thumbnail' => '{{image-image-2}}',
				'terms' => array( 'post-format-image' ),
        	),
			'image-3' => array(
            	'post_type' => 'post',
            	'post_title' => _x( 'Coastal Curves', 'Theme starter content', 'piclectic' ),
            	'thumbnail' => '{{image-image-3}}',
				'terms' => array( 'post-format-image' ),
        	),
    	),
		
		// Create the custom image attachments used as post thumbnails for pages.
		'attachments' => array(
			'image-1' => array(
				'post_title' => _x( 'Waves', 'Theme starter content', 'piclectic' ),
				'file' => 'assets/images/image-1.jpg', // URL relative to the template directory.
			),
			'image-2' => array(
				'post_title' => _x( 'Lines', 'Theme starter content', 'piclectic' ),
				'file' => 'assets/images/image-2.jpg',
			),
			'image-3' => array(
				'post_title' => _x( 'Feet', 'Theme starter content', 'piclectic' ),
				'file' => 'assets/images/image-3.jpg',
			),
		),

		// Default to a static front page and assign the front and posts pages.
		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),
		
		// Set the front page section theme mods to the IDs of the core-registered pages.
		'theme_mods' => array(
			'piclectic_home_overview' => esc_html__( 'Piclectic is an image sharing WordPress theme designed to blend simplicity and style.', 'piclectic' ),
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "top" location.
			'primary' => array(
				'name' => esc_html__( 'Main Menu', 'piclectic' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
				),
			),

			// Assign a menu to the "social" location.
			'social' => array(
				'name' => esc_html__( 'Social Links', 'piclectic' ),
				'items' => array(
					'link_facebook',
					'link_twitter',
					'link_instagram',
				),
			),
		),
	);

	$starter_content = apply_filters( 'piclectic_starter_content', $starter_content );

	add_theme_support( 'starter-content', $starter_content );
	
}
endif;
add_action( 'after_setup_theme', 'piclectic_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function piclectic_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'piclectic_content_width', 640 );
}
add_action( 'after_setup_theme', 'piclectic_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function piclectic_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'piclectic' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'piclectic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'piclectic_widgets_init' );


if ( ! function_exists( 'piclectic_body_fonts_url' ) ) :

function piclectic_body_fonts_url() {

	$body_font = esc_html( get_theme_mod('body_fonts' ));
	
	$body_font_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
		
	if( $body_font ) :
		
		$fonts[] = $body_font;
		
	else :
		
		$fonts[] = 'Heebo:300,400,700';
		
	endif;

	
	if ( $fonts ) {
		
		$body_font_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
			
	}

	return $body_font_url;
	
}

endif;


if ( ! function_exists( 'piclectic_headings_fonts_url' ) ) :

function piclectic_headings_fonts_url() {
	
	$headings_font = esc_html( get_theme_mod('headings_fonts' ));
	
	$headings_font_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';
	
	if( $headings_font ) :
		
		$fonts[] = $headings_font;
		
	else :
		
		$fonts[] = 'Heebo:300,400,700';
		
	endif;

	
	if ( $fonts ) {
		
		$headings_font_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
			
	}

	return $headings_font_url;
	
}

endif;



/**
 * Enqueue scripts and styles.
 */
function piclectic_scripts() {
	wp_enqueue_style( 'piclectic-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'piclectic-headings-google-fonts', piclectic_headings_fonts_url(), array(), null ); 
	
	wp_enqueue_style( 'piclectic-body-google-fonts', piclectic_body_fonts_url(), array(), null );

	wp_enqueue_style( 'piclectic-sidr', get_template_directory_uri() . '/css/jquery.sidr.css' );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/fonts/font-awesome.css' ); 

	wp_enqueue_script( 'piclectic-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'piclectic-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'piclectic-sidr', get_template_directory_uri() . '/js/jquery.sidr.js', array('jquery'), false, true ); 

	wp_enqueue_script( 'piclectic-sidr-script', get_template_directory_uri() . '/js/sidr.script.js', array(), false, true );
	
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.js', array(), false, true );
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );

	if ( is_page_template( 'template-page-home.php' ) ) {
		
	wp_enqueue_style( 'piclectic-animsition-css', get_template_directory_uri() . '/css/animsition.css' );
		
	wp_enqueue_script( 'piclectic-animsition', get_template_directory_uri() . '/js/animsition.js', array('jquery'), false, true ); 

	wp_enqueue_script( 'piclectic-animsition-script', get_template_directory_uri() . '/js/animsition.script.js', array(), false, true );

	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'piclectic_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_parent_theme_file_path( '/inc/custom-header.php' );

/**
 * Custom template tags for this theme.
 */
require get_parent_theme_file_path( '/inc/template-tags.php' );

/**
 * Custom functions that act independently of the theme templates.
 */
require get_parent_theme_file_path( '/inc/extras.php' );
require get_parent_theme_file_path( '/inc/gfonts.php' );

/**
 * Customizer additions.
 */
require get_parent_theme_file_path( '/inc/customizer.php' );
require get_parent_theme_file_path( '/inc/piclectic-styles.php' );
require get_parent_theme_file_path( '/inc/piclectic-sanitize.php' );

/**
 * Load Jetpack compatibility file.
 */
require get_parent_theme_file_path( '/inc/jetpack.php' );

/**
 * Include additional custom admin panel features. 
 */
require get_parent_theme_file_path( '/panel/functions-admin.php' );
require get_parent_theme_file_path( '/panel/piclectic-theme-admin-page.php' ); 

// allow skype names in social menu
function piclectic_allow_skype_protocol( $protocols ){
    $protocols[] = 'skype';
    return $protocols;
}
add_filter( 'kses_allowed_protocols' , 'piclectic_allow_skype_protocol' );

/**
 * get out of that loop
 */
function piclectic_exclude_post_formats_from_blog( $piclectic_blog_query ) {

	if( $piclectic_blog_query->is_main_query() && $piclectic_blog_query->is_home() ) {
		$piclectic_tax_query = array( array(
			'taxonomy' => 'post_format',
			'field' => 'slug',
			'terms' => array( 'post-format-image' ),
			'operator' => 'NOT IN',
		) );
		$piclectic_blog_query->set( 'tax_query', $piclectic_tax_query ); 
	}

}
add_action( 'pre_get_posts', 'piclectic_exclude_post_formats_from_blog' ); 