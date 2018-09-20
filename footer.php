<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package StrapPress
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="row prefooter">
				<div class="col-md-3 donate">
					<?php
							if(is_active_sidebar('footer-one-widget-area')){
							dynamic_sidebar('footer-one-widget-area');
							}
					?>
				</div>
				<div class="col-md-3 recent-posts">
					<?php
							if(is_active_sidebar('footer-two-widget-area')){
							dynamic_sidebar('footer-two-widget-area');
							}
					?>
				</div>
				<div class="col-md-6 technology">
					<?php
							if(is_active_sidebar('footer-three-widget-area')){
							dynamic_sidebar('footer-three-widget-area');
							}
					?>
				</div>
			</div>
		</div><!--  .container -->
		<div class="frow social">
			<div class="fcolumn logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/img/hdLogosmall.png" />
				</a>
			</div>

			<div class="fcolumn icons">
				<ul id="socialicons">
						<li><a href="https://www.facebook.com/"><i class="fab fa-twitter fa-2x"></i></a></li>

						<li><a href="https://twitter.com/"><i class="fab fa-bitbucket fa-2x"></i></a></li>

						<li><a href="#"><i class="fab fa-github fa-2x"></i></a></li>

						<li><a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in fa-2x"></i></a></li>
				</ul>
			</div>
		</div>
		<div class="frow subfooter">
			<div class="col-md-4 copyright">
				<?php the_field('sub_footer_area_one', 'option'); ?><?php echo '&nbsp;' . date('Y'); ?>
			</div>
			<div class="col-md-4 seal">
				<?php the_field('sub_footer_area_two', 'option', false, false); ?>
			</div>
			<div class="col-md-4 legal">
				<?php the_field('sub_footer_area_three', 'option', false, false); ?>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
