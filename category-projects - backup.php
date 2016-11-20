<?php get_header(); ?>

	<main role="main">	
		
		<!-- section -->
		<section>
			<div class="container w500">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					<?php 
						$imageData = wp_get_attachment_image_src(get_post_thumbnail_id ( $post_ID ), 'large');
						//echo $imageData[0]; // attribut src de l'image à la une
					?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
						<article class="project-article" style="background: url('<?php echo $imageData[0]; ?>') no-repeat center center; background-size: cover;">
							<div>
								<h1><?php the_title(); ?></h1>
							<p><?php echo get_post_meta(get_the_ID(), 'short_description', true); ?></p>

							<h2><?php echo get_post_meta(get_the_ID(), 'progres', true);?></h2>	

							</div>
							

						</article>								
					</a>
					

				<?php endwhile; ?>
				<?php endif; ?>
			</div>
			

			<?php //get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>