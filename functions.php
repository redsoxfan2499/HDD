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
// Register Custom Post Type
function hdd_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'hdd' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'hdd' ),
		'menu_name'             => __( 'Testimonials', 'hdd' ),
		'name_admin_bar'        => __( 'Testimonials', 'hdd' ),
		'archives'              => __( 'Item Archives', 'hdd' ),
		'attributes'            => __( 'Item Attributes', 'hdd' ),
		'parent_item_colon'     => __( 'Parent Item:', 'hdd' ),
		'all_items'             => __( 'All Testimonials', 'hdd' ),
		'add_new_item'          => __( 'Add New Testimonial', 'hdd' ),
		'add_new'               => __( 'Add New Testimonial', 'hdd' ),
		'new_item'              => __( 'New Testimonial', 'hdd' ),
		'edit_item'             => __( 'Edit Testimonial', 'hdd' ),
		'update_item'           => __( 'Update Testimonial', 'hdd' ),
		'view_item'             => __( 'View Testimonial', 'hdd' ),
		'view_items'            => __( 'View Testimonials', 'hdd' ),
		'search_items'          => __( 'Search Testimonial', 'hdd' ),
		'not_found'             => __( 'Testimonial Not found', 'hdd' ),
		'not_found_in_trash'    => __( 'Testimonial Not found in Trash', 'hdd' ),
		'featured_image'        => __( 'Featured Image', 'hdd' ),
		'set_featured_image'    => __( 'Set featured image', 'hdd' ),
		'remove_featured_image' => __( 'Remove featured image', 'hdd' ),
		'use_featured_image'    => __( 'Use as featured image', 'hdd' ),
		'insert_into_item'      => __( 'Insert into item', 'hdd' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'hdd' ),
		'items_list'            => __( 'Items list', 'hdd' ),
		'items_list_navigation' => __( 'Items list navigation', 'hdd' ),
		'filter_items_list'     => __( 'Filter items list', 'hdd' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'hdd' ),
		'description'           => __( 'testimonials from users', 'hdd' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => false,
	);
	register_post_type( 'testimonials', $args );

}
add_action( 'init', 'hdd_custom_post_type', 0 );
/**
 * Disable the emoji's
 */
function disable_emojis() {
 remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
 remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
 remove_action( 'wp_print_styles', 'print_emoji_styles' );
 remove_action( 'admin_print_styles', 'print_emoji_styles' );
 remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
 remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
 remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
 add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
 add_filter( 'wp_resource_hints', 'disable_emojis_remove_dns_prefetch', 10, 2 );
}
add_action( 'init', 'disable_emojis' );

/**
 * Filter function used to remove the tinymce emoji plugin.
 *
 * @param array $plugins
 * @return array Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
 if ( is_array( $plugins ) ) {
 return array_diff( $plugins, array( 'wpemoji' ) );
 } else {
 return array();
 }
}

/**
 * Remove emoji CDN hostname from DNS prefetching hints.
 *
 * @param array $urls URLs to print for resource hints.
 * @param string $relation_type The relation type the URLs are printed for.
 * @return array Difference betwen the two arrays.
 */
function disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
 if ( 'dns-prefetch' == $relation_type ) {
 /** This filter is documented in wp-includes/formatting.php */
 $emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );

$urls = array_diff( $urls, array( $emoji_svg_url ) );
 }

return $urls;
}
// add span to categories post count for categories widget
add_filter('wp_list_categories', 'cat_count_span');
function cat_count_span($links) {
  $links = str_replace('</a> (', '</a> <span class="count">', $links);
  $links = str_replace(')', '</span>', $links);
  return $links;
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
