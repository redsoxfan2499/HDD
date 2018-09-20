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
    <div class="items">
        <div class="container text-center d-flex justify-content-between">
            <div class="row">
                <div class="c1 col-sm">
                    <p class="widgets_icon"><?php the_field('technology_one_icon', 'option'); ?></p>
                    <p>
                        <?php the_field('technology_one_content', 'option'); ?>
                    </p>
                </div>
                <div class="c2 col-sm">
                    <p class="widgets_icon"><?php the_field('technology_two_icon', 'option'); ?></p>
                    <p>
                        <?php the_field('technology_two_content', 'option'); ?>
                    </p>
                </div>
                <div class="c3 col-sm">
                    <p class="widgets_icon"><?php the_field('technology_three_icon', 'option'); ?></p>
                    <p>
                        <?php the_field('technology_three_content', 'option'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="plugins">
        <div class="container text-center d-flex justify-content-between">
            <div class="row">
                <div class="p1 col-sm">
                    <p class="widgets_icon"><?php the_field('about_one_icon', 'option'); ?></p>
                    <p>
                        <?php the_field('about_one_content', 'option'); ?>
                    </p>
                </div>
                <div class="p2 col-sm">
                    <p class="widgets_icon"><?php the_field('about_two_icon', 'option'); ?></p>
                    <p>
                        <?php the_field('about_two_content', 'option'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="blogposts">
        <div class="container text-center d-flex justify-content-between">
            <div class="row bprow">
                <?php if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) : the_post();
                ?>
                <div class="bpcol col-sm-12 col-md-4">
                    <div class="card">
                        <?php if ( has_post_thumbnail() && is_single() ) : ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div><!--  .post-thumbnail -->
                            <?php else : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div><!--  .post-thumbnail -->
                        <?php endif; ?>
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h4>
                            <p class="card-text">
                            <?php
                                the_excerpt();                               
                            ?>
                            </p>
                            <p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Keep Reading...</a>
                            </p>                           
                        </div>
                    </div>
                     <div class="card-footer text-muted">
                        <?php hdd_entry_footer(); ?>
                    </div>
                </div>   
                <?php
                endwhile;
					the_posts_navigation();
                endif; 
            ?>
            </div>
        </div>
    </div>
<?php
get_footer();
