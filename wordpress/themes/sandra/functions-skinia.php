<?php
/**
 * Skinia functions and definitions
 * *
 * @package WordPress
 * @subpackage Skinia
 * @since 1.0.0
 */

if ( ! function_exists( 'skinia_setup' ) ) :
	function skinia_setup(){

		load_theme_textdomain( 'skinia', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);

		//Custom title
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'audio',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for responsive embeds.
		add_theme_support( 'responsive-embeds' );

		//Menu
		register_nav_menus( array(
			'main-menu' => __( 'main-menu' )
		));

		//Support custom logo
		add_theme_support(
			'custom-logo', 
			array(
				'height'      => 93,
				'width'       => 155,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' )
			)
		);

		//custom-background
		add_theme_support(
			'custom-background',
			array(
				'default-color'          => '',
				'default-image'          => '',
				'wp-head-callback'       => '_custom_background_cb',
				'admin-head-callback'    => '',
				'admin-preview-callback' => ''
			)
		);

		//Enable support for Post Thumbnails on posts and pages.
		add_theme_support( 'post-thumbnails' );

	}
endif;
add_action( 'after_setup_theme', 'skinia_setup' );


// tel number validation for cf7
function custom_filter_wpcf7_is_tel( $result, $tel ) { 
  $result = preg_match( '/^((\+48)+([0-9]){10})$/', $tel );
  return $result; 
}
add_filter( 'wpcf7_is_tel', 'custom_filter_wpcf7_is_tel', 13, 2 );

/**
 * Flushing rewrite rules
 */
add_action( 'after_switch_theme', 'flush_rewrite_rules' );

/**
 * Styles & Scripts
 */
function my_scripts(){
	wp_enqueue_style( 'bootstrap-css', get_bloginfo( 'template_directory' ) . '/assets/css/bootstrap.min.css',
		false, null );

	// wp_enqueue_style( 'font-awesome', get_bloginfo( 'template_directory' ) . '/assets/css/font-awesome.min.css',
	// 	false, null );
	// wp_enqueue_style( 'bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css',
	// 	false, null );
	// font awesome
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
	// custom styles
	wp_enqueue_style( 'custom-style', get_template_directory_uri() . '/assets/css/main.min.css' );
	// wp_enqueue_script( 'my-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(),
	// 	false, true );

	wp_enqueue_script( 'jquery-min', get_template_directory_uri() . '/assets/js/jquery.min.js', array(),
		false, true );
	wp_enqueue_script( 'hamburger', get_template_directory_uri() . '/assets/js/hamburger.js', array(),
		false, true );
	wp_enqueue_script( 'scroll', get_template_directory_uri() . '/assets/js/scroll.js', array(),
		false, true );
	wp_enqueue_script( 'bootstrap-bundle-js',
		get_bloginfo( 'template_directory' ) . '/assets/js/bootstrap.bundle.min.js', array(), false, true );
}
add_action('wp_enqueue_scripts', 'my_scripts');



add_theme_support( 'custom-header' );
function skinia_custom_header_setup() {
	$defaults = array(
		'default-image'         => false,
		'header-text'           => 'Русскоязычная Христианская Церковь "СКИНИЯ" в Варшаве',
		'default-text-color'        => 'fff',
		'width'             => 1920,
		'height'            => 1063,
		'random-default'        => false,
		'uploads'       => false,
		'wp-head-callback'      => 'wphead_cb',
		'admin-head-callback'       => 'adminhead_cb',
		'admin-preview-callback'    => 'adminpreview_cb',
	);
}
add_action( 'after_setup_theme', 'skinia_custom_header_setup' );


/**
 * Register footer widget area.
 */
function footer_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'skinia' ),
			'id'            => 'footer-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'skinia' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'footer_widgets_init' );

/**
 * Register header widget area.
 */
function header_widgets_init() {
    register_sidebar( array(
        'name'          => 'Header',
        'id'            => 'header-1',
        'description'   => __( 'Add Google Analytics script here.', 'skinia' ),
        'before_widget' => '<div class="hdr-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="hdr-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'header_widgets_init' );

add_filter( 'widget_text', 'do_shortcode' );