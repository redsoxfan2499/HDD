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
				<div class="col-md-3">
					test test 
				</div>
				<div class="col-md-3">
					<h5>Recent Posts</h5>
					<ul>
						<li>test</li>
						<li>test</li>
						<li>test</li>
					</ul>
				</div>
				<div class="col-md-6">
					<h5 style="text-align:center;">Proudly built using...</h5>
					<ul id="techicons">
						<li><i class="fab fa-html5 fa-lg"></i></li>
						<li><i class="fab fa-css3-alt fa-lg"></i></li>
						<li><i class="fab fa-sass fa-lg"></i></li>
						<li><i class="fab fa-js-square fa-lg"></i></li>
						<li><i class="fab fa-php fa-lg"></i></li>
						<li><i class="fab fa-wordpress fa-lg"></i></li>
						<li><i class="fab fa-laravel fa-lg"></i></li>
						<li><i class="fab fa-react fa-lg"></i></li>
						<li><i class="fas fa-code-branch fa-lg"></i></li>
						
					</ul>
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
				<p>Copyright <i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y'); ?> Hyperdrive Designs</p>
			</div>
			<div class="col-md-4 seal">
				<span id="siteseal">
					<script type="text/javascript" src="https://seal.godaddy.com/getSeal?sealID=Ri3x7GvXAxj9GpmERJc9TllYRLu56x5P5WwhfS5ZzbbNkM0jj6FSj3nHClP">
					</script>
					<!-- <img style="cursor:pointer;cursor:hand" src="https://seal.godaddy.com/images/3/en/siteseal_gd_3_h_d_m.gif" onclick="verifySeal();" alt="SSL site seal - click to verify"></span> -->
			</div>
			<div class="col-md-4 legal">
				<ul>
					<li><a href="/legal-stuff/customer-terms-of-service-agreement">Legal Stuff</a></li>
					<li><a href="/legal-stuff/privacy-policy">Privacy Policy</a></li>
					<li><a href="/sitemap.html">Site Map</a></li>
				</ul>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
