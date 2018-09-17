<?php
/**
 * Enqueue scripts and styles.
 */
function strappress_scripts() {
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Raleway');
	wp_enqueue_style( 'strappress-style', get_stylesheet_directory_uri() . '/style.min.css', array(), '1.0.0' );

	wp_enqueue_script( 'strappress-js', get_template_directory_uri() . '/js/dist/scripts.min.js', array('jquery'), ' ', true );

	wp_enqueue_script( 'strappress-fa', 'https://use.fontawesome.com/releases/v5.2.0/js/all.js', array(), '5.2.0' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'strappress_scripts' );


/**
 * Filter the HTML script tag of `leadgenwp-fa` script to add `defer` attribute.
 *
*/
function strappress_defer_scripts( $tag, $handle, $src ) {
	// The handles of the enqueued scripts we want to defer
	$defer_scripts = array( 
		'strappress-fa'
	);
    if ( in_array( $handle, $defer_scripts ) ) {
        return '<script src="' . $src . '" defer></script>';
    }
    return $tag;
}
add_filter( 'script_loader_tag', 'strappress_defer_scripts', 10, 3 );