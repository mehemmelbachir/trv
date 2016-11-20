<?php get_header(); ?>

	<main role="main">	
		
		<!-- section -->
		<section>
			<div class="container w500">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php 
						$imageData = wp_get_attachment_image_src(get_post_thumbnail_id (), 'large');
						//echo $imageData[0]; // attribut src de l'image à la une
					?>
					<?php if ($wp_query->current_post % 2 == 0): ?>

				    <!--  EVEN Projects -->
				        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<article class="project-article" style="background: url('') no-repeat center center; background-size: cover;">
								
								<div class="row">
									<div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
										<img src="<?php echo $imageData[0]; ?>" width="100%">
									</div>
									<div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
										<h1 style="text-align:left;"><?php the_title(); ?></h1>
										<div class="project-details">
											
											

											<!-- Short description -->
											<?php 
												$short_description = the_excerpt();//get_post_meta(get_the_ID(), 'short_description', true);
												if (strlen($short_description) > 0){
													echo '<p>'. $short_description .'</p>';
												}
											?>


											<!-- Location -->
											<?php 
												$location = get_post_meta(get_the_ID(), 'localization',true); 
												if (strlen($location) > 0){
													$location_img = '<img src="' .get_template_directory_uri() . '/img/icons/location-01.png" class="details-icons" />';
													echo '<p>';
													echo $location_img . '&nbsp&nbsp' . $location;
													echo '</p>';
												}
											?>

											<!-- Progress Or End Date-->
											<?php $progress = get_post_meta(get_the_ID(), 'progres', true);
												if (strlen($progress) <= 3){ ?>
											 	<progress value="<?php echo $progress;?>" max="100"></progress><h2><?php echo $progress; ?>%</h2>
												<?php }else{ ?>
													<p><?php echo $progress;?></h3>
												<?php }; ?>

										</div>
										
									</div>
								</div>							

							</article>								
						</a>
				    <?php else: ?>


				    <!--  ODD Projects -->
					<a href="<?php the_permalink();?>" title="">
						<article class="project-article" style="background: url('') no-repeat center center; background-size: cover;">
								
							<div class="row">
								<div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">
									<h1 style="text-align:left;"><?php the_title(); ?></h1>
									<div class="project-details">
											
							
											<!-- Short description -->
											<?php 
												$short_description = the_excerpt();//get_post_meta(get_the_ID(), 'short_description', true);
												if (strlen($short_description) > 0){
													echo '<p>'. $short_description .'</p>';
												}
											?>


											<!-- Location -->
											<?php 
												$location = get_post_meta(get_the_ID(), 'localization',true); 
												if (strlen($location) > 0){
													$location_img = '<img src="' .get_template_directory_uri() . '/img/icons/location-01.png" class="details-icons" />';
													echo '<p>';
													echo $location_img . '&nbsp&nbsp' . $location;
													echo '</p>';
												}
											?>


											<!-- Progress Or End Date-->
											<?php $progress = get_post_meta(get_the_ID(), 'progres', true);
												if (strlen($progress) <= 3){ ?>
											 	<progress value="<?php echo $progress;?>" max="100"></progress><h2><?php echo $progress; ?>%</h2>
												<?php }else{ ?>
													<p><?php echo $progress;?></h3>
												<?php }; ?>

									</div>



								</div>

								
								<div class="col-md-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
									<img src="<?php echo $imageData[0]; ?>" width="100%">
								</div>

							</div>							

						</article>			

					</a>
				    

				    <?php endif ?>


					
					

				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			

			<?php //get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>