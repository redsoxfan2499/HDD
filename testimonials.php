<?php
/**
 * Template Name: Testimonials 
 * The template for displaying all pages
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HDD
 */

get_header(); 
$testimonials = new WP_Query( array(
    'post_type'     => 'testimonials',
    'post_status'   => 'publish',
    'no_found_rows' => true,
));
?>
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
                    <?php
                        if ( $testimonials->have_posts() ) :
                        while ( $testimonials->have_posts() ) : $testimonials->the_post();
					?>

					<div class="testimonials">
                        <div class="test-image">
                            <img src="http://localhost/hyperdrivedesigns/wp-content/themes/hdd/img/testimonials-user.png" />
                        </div>
                        <div class="test-title">
                            <h3 class="test-content"><?php echo get_field('testimonial_title', false, false); ?></h3>
                            <p class="test-content"><?php echo get_field('testimonial_content', false, false); ?></p>
                            <p class="test-user"><?php echo get_field('testimonial_user', false, false); ?></p>
                        </div>
                    </div>
                     
					
					<?php
                        endwhile; // End of the loop.
                        endif;
					?>
                    
                </main>
            </div>
            
            
<?php
get_sidebar();
get_footer();