<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package StrapPress
 */

get_header(); ?>
<style>
    #page {
        width: 1390px;
    }
</style>
	<div class="container">
		<div class="row">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

				<?php
				while ( have_posts() ) : the_post();

                    ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php if ( has_post_thumbnail() && is_single() ) : ?>
                        <div class="post-thumbnail single-download">
                            <?php the_post_thumbnail('full', array('class' => 'rounded')); ?>
                        </div><!--  .post-thumbnail -->
                        <?php else : ?>
                            <div class="post-thumbnail single-download">
                            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                <?php the_post_thumbnail('full', array('class' => 'rounded')); ?>
                            </a>
                        </div><!--  .post-thumbnail -->
                    <?php endif; ?>

                    <header class="entry-header">
                        <?php
                        if ( is_single() ) :
                            the_title( '<h1 class="entry-title" style="text-align:center;padding:10px 0px;">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title" style="text-align:center;padding:10px 0px;"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;

                        if ( 'post' === get_post_type() ) : ?>
                        <div class="entry-meta">
                            <?php strappress_posted_on(); ?>
                        </div><!-- .entry-meta -->
                        <?php
                        endif; ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content" style="padding:10px 0px;">
                        <?php
                            the_content( sprintf(
                                /* translators: %s: Name of current post. */
                                wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'strappress' ), array( 'span' => array( 'class' => array() ) ) ),
                                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                            ) );

                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'strappress' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer" style="padding:10px 0px;">
                        <?php hdd_entry_footer(); ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->


                    <?php
					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>

				</main><!-- #main -->
			</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
