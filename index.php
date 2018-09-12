<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package StrapPress
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
					<h1>test</h1>
					<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum libero iste 
						eligendi praesentium nihil? Neque earum, laborum, rerum voluptates ipsa nam 
						voluptatibus aut dignissimos eum ipsam reprehenderit magnam dicta consectetur.</p>
					<p>Ut cupiditate fuga sequi quia. Debitis in voluptatem sit? Incidunt, fugiat! 
						Recusandae, libero repudiandae! Laboriosam vero dolores illum architecto alias 
						facilis, voluptatem, explicabo quam quidem minus est id eum dicta?</p>
					<p>Totam magnam corrupti laboriosam excepturi earum fugiat non dolorum molestiae 
						quasi ad, labore iusto expedita beatae qui numquam quod consequatur quidem 
						distinctio in facilis? Optio laborum sequi beatae eaque autem.</p>
					<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>
						<p>Officia eos fugit, rem, ex sequi dolor nostrum, ab corrupti animi nulla neque 
						hic. Voluptatum praesentium beatae repellendus aliquam! Quam natus fuga 
						ducimus tempora necessitatibus officiis quaerat. Ea, optio eaque.</p>

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', get_post_format() );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
