<?php
/**
 * Template Name: About 
 * The template for displaying all pages
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HDD
 */

get_header(); 

?>
	<div class="container">
		<div class="row">
			<!-- <div id="primary" class="content-area"> -->
				<!-- <main id="main" class="site-main" role="main"> -->
					<?php
						while ( have_posts() ) : the_post();
					?>

					<div class="about">

						<div class="content">
							<img src="<?php the_field('profile_image'); ?>" />
							<?php the_field('about_content'); ?>
						</div>

						<div class="technologies">
							<div class="accordion" id="accordionExample">

								<div class="card">
									<div class="card-header" id="headingOne">
										<h5 class="mb-0">
											<button class="btn btn-trans" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											Present Technologies
											</button>
										</h5>
									</div>

									<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
										<div class="card-body">
											<?php the_field('present_technologies'); ?>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingTwo">
										<h5 class="mb-0">
											<button class="btn btn-trans collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											Past Technologies
											</button>
										</h5>
									</div>
									<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
										<div class="card-body">
											<?php the_field('past_technologies'); ?>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingThree">
										<h5 class="mb-0">
											<button class="btn btn-trans collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											Future Technologies
											</button>
										</h5>
									</div>
									<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
										<div class="card-body">
											<?php the_field('future_technologies'); ?>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingFour">
										<h5 class="mb-0">
											<button class="btn btn-trans collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											No Experience Technologies
											</button>
										</h5>
									</div>
									<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
										<div class="card-body">
											<?php the_field('no_experience_technologies'); ?>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" id="headingFive">
										<h5 class="mb-0">
											<button class="btn btn-trans collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											IDEs and other Software
											</button>
										</h5>
									</div>
									<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
										<div class="card-body">
											<?php the_field('ides_other_software'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
		</div>
					<?php
						endwhile; // End of the loop.
					?>

				
            
            
<?php
//get_sidebar();
get_footer();