<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header d-flex justify-content-center" role="banner">
	    <nav class="navbar navbar-expand-md fixed-top <?php if(!is_home() or !is_front_page()) { echo 'navbar-hdd'; } ?>">
	    	<div class="container">
			   	<div class="navbar-brand mb-0">
				   	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				   		<img src="<?php the_field('site_logo', 'option'); ?>" />
					</a>
				</div>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
				</button>
		   		<div class="collapse navbar-collapse" id="navbarNav">
	            <?php
	            $args = array(
	              'theme_location' => 'primary',
	              'depth'      => 2,
	              'container'  => false,
	              'menu_class'     => 'navbar-nav ml-auto',
	              'walker'     => new Bootstrap_Walker_Nav_Menu()
	              );
	            if (has_nav_menu('primary')) {
	              wp_nav_menu($args);
	            }
	            ?>
	          </div>

	        </div>
		</nav>
	</header><!-- #masthead -->
	<?php 
	if(is_home() or is_front_page()) 
	{
	?>
	<section class="hero" style="background-image: url('<?php the_field('homepage_hero_image', 'option'); ?>">
		<div class="jumbotron text-center align-self-center">
			<div class="container">
				<h1 class="jumbotron-heading"><?php the_field('homepage_hero_heading', 'option'); ?></h1>
				<p class="lead text-muted">
					<?php the_field('homepage_hero_sub_heading', 'option'); ?>
				</p>
				<p>
					<a href="<?php the_field('homepage_hero_button_url', 'option'); ?>" class="btn btn-primary my-2"><?php the_field('homepage_hero_button_text', 'option'); ?></a>
				</p>
			</div>
		</div>
		<div class="shout">
			<div class="container text-center d-flex justify-content-center">
				<div class="row shout-content">
					<div class="c1 col-sm">
						<?php the_field('homepage_hero_content', 'option'); ?>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php 
	}
	?>
	<div id="page" class="site">
		<div id="content" class="site-content">

			
		