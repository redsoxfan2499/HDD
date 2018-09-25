<?php
/**
 * Template Name: Shop 
 * The template for displaying all pages
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HDD
 */

get_header(); 

$args = array(
    'fields' => 'ids',
    'post_type' => 'download',
    'posts_per_page' => 18,
    'post_status' => 'publish'
);

$downloads = get_posts( $args );

//print_r($downloads);
?>

	<div class="container">
		<div class="row">
			<!-- <div id="primary" class="content-area"> -->
				<main id="main" class="site-main" role="main">

					<?php
					// while ( have_posts() ) : the_post();

                        // get_template_part( 'template-parts/content', 'shop' );
                        
                    //print_r($downloads);
                    foreach ( $downloads as $key => $download_id ) {
                        $download = new EDD_Download( $download_id );
                        var_dump($download);
                    ?>

                    <article id="post-<?php echo $download->ID; ?>" <?php post_class(); ?>>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('full', array('class' => 'rounded')); ?>
                            </div><!--  .post-thumbnail -->
                        <?php endif; ?>

                        <header class="entry-header">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </header><!-- .entry-header -->

                        <div class="entry-content">
                            <?php
                                the_content();

                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'strappress' ),
                                    'after'  => '</div>',
                                ) );
                            ?>
                        </div><!-- .entry-content -->

                        <?php if ( get_edit_post_link() ) : ?>
                            <footer class="entry-footer">
                                <?php
                                    edit_post_link(
                                        sprintf(
                                            /* translators: %s: Name of current post */
                                            esc_html__( 'Edit %s', 'strappress' ),
                                            the_title( '<span class="screen-reader-text">"', '"</span>', false )
                                        ),
                                        '<span class="edit-link">',
                                        '</span>'
                                    );
                                ?>
                            </footer><!-- .entry-footer -->
                        <?php endif; ?>
                    </article><!-- #post-## -->
                    <?php 
                    }

					?>

				</main><!-- #main -->
			
        </div><!--  .row -->
	</div><!--  .container -->
<?php

get_footer();
