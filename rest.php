<?php
/**
 * Template Name: Rest 
 *
 * This is the template that displays information from a web service.
 *
 * @package foundationwp
 */

get_header(); 
?>
	<div class="container">
        <div class="row">
        	<div id="primary" class="col-lg-12 col-md-12">
        		<main id="main" class="site-main" role="main">
							<?php if ( have_posts() ) : ?>
        
        			<?php /* Start the Loop */ ?>
        			<?php while ( have_posts() ) : the_post(); ?>
        
        				<?php
        				/** get page content **/
        				the_content();
        				?>
        
        			<?php endwhile; ?>
        
        		<?php endif; ?>
							
							<h3>WP_Http</h3>
							<p>
								This page is used for my WP HTTP API Tutorial.
								Check it out:   
								<a href="http://hyperdrivedesigns.com/simple-wp-http-api-tutorial/">
								WP HTTP API Tutorial
								</a>
							</p>
							<?php
								$url = 'https://api.bitbucket.org/1.0/user/';
								$username = 'dxladner@gmail.com';
								$password = 'bosTon2499';
								$headers = array( 'Authorization' => 'Basic ' . base64_encode( "$username:$password" ) );
								$request = wp_remote_get( $url, array( 'headers' => $headers ) );
								if(is_wp_error($request)) {
									return false;
								}

								$body = wp_remote_retrieve_body($request);

								$data = json_decode($body);

								if(!empty($data)) {

									echo '<ul>';
									foreach( $data->repositories as $repo ) { 

										echo '<li>';
											echo $repo->name;
										echo '</li>';
									}
									echo '</ul>';
								}				


								/*  working Pippins Plugin Example
								$request = wp_remote_get( 'https://pippinsplugins.com/edd-api/products' );

								if( is_wp_error( $request ) ) {
									return false; // Bail early
								}

								$body = wp_remote_retrieve_body( $request );

								$data = json_decode( $body );

								echo '<pre>';
								print_r($data);
								echo '</pre>';

								if( ! empty( $data ) ) {

									echo '<ul>';
									foreach( $data->products as $product ) {
										echo '<li>';
											echo '<a href="' . esc_url( $product->info->link ) . '">' . $product->info->title . '</a>';
										echo '</li>';
									}
									echo '</ul>';
								}
								*/	
								?>
							<br/><br/>
							</main><!-- #main -->
        	</div><!-- #primary -->
				</div><!-- end row -->
    </div> <!-- .container -->
<?php get_footer(); ?>