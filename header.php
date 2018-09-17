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
	    <nav class="navbar navbar-expand-md fixed-top">
	    	<div class="container">
			   	<div class="navbar-brand mb-0">
				   <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				   	<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/hdLogosmall.png" />
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
	<section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/herobgImage.svg');">
		<div class="jumbotron text-center align-self-center">
			<div class="container">
				<h1 class="jumbotron-heading">We Are WordPress / Laravel Enthusiasts!</h1>
				<p class="lead text-muted">
					We develop plugin, themes and anything else WordPress and Laravel Applications
				</p>
				<p>
					<a href="#" class="btn btn-primary my-2">Our Work</a>
				</p>
			</div>
		</div>
		<div class="shout">
			<div class="container text-center d-flex justify-content-center">
				<div class="row shout-content">
					<div class="c1 col-sm">
						<p>WordPress is what we do. Need some WordPress help. Need a website converted to WordPress. 
						Need to move a WordPress website. Need to update a WordPress site. Need Multisite Help. 
						Need some custom functionality. Need a new theme. Need API help.
						Laravel is also what we do. Need some Laravel help. Need a Laravel app. 
						Need to move a Laravel website. Need to update a Laravel site.
						Need some custom functionality. Need to create an API layer with Laravel.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div id="page" class="site">
		<div id="content" class="site-content">

			
		