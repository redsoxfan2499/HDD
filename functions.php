<?php
/**
 * StrapPress functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package StrapPress
 */

if ( ! function_exists( 'hdd_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function hdd_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on StrapPress, use a find and replace
	 * to change 'strappress' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'hdd', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'hdd' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'hdd_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'hdd_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function hdd_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'hdd_content_width', 640 );
}
add_action( 'after_setup_theme', 'hdd_content_width', 0 );

// Custom excerpt length 
function hdd_custom_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'hdd_custom_excerpt_length', 999 );

// add more link to excerpt
function hdd_custom_excerpt_more($more) {
   global $post;
   return '';
}
add_filter('excerpt_more', 'hdd_custom_excerpt_more');

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function hdd_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'hdd' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
	register_sidebar(array (
		'name'			=> __('Footer One', 'hdd'),
		'id'			=> 'footer-one-widget-area',
		'description'	=> __('The first footer widget area', 'dir'),
		'before_widget'	=> '',
		'after_widget'	=> '',
		) 
	);
	register_sidebar(array (
		'name'			=> __('Footer Two', 'hdd'),
		'id'			=> 'footer-two-widget-area',
		'description'	=> __('The second footer widget area', 'dir'),
		'before_widget'	=> '',
		'after_widget'	=> '',
		) 
	);
	register_sidebar(array (
		'name'			=> __('Footer Three', 'hdd'),
		'id'			=> 'footer-three-widget-area',
		'description'	=> __('The third footer widget area', 'dir'),
		'before_widget'	=> '',
		'after_widget'	=> '',
		) 
	);
}
add_action( 'widgets_init', 'hdd_widgets_init' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Homepage Settings',
		'menu_title'	=> 'Homepage',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

/**
 * Add CSS/JS Scritps
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Register Widget Areas
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Bootstrap Walker.
 */
require get_template_directory() . '/inc/bootstrap-walker.php';
