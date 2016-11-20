<?php get_header(); ?>


	

	<main role="main">

		<!-- section -->
		<section>
			<div class="container w500">
				<article>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<h1><?php the_title(); ?></h1>
					
					<?php the_content(); ?>

					<?php 
						endwhile;
						endif;
					?>	
				</article>
				


				<p><?php //echo get_post_meta(get_the_ID(), 'short_description', true); ?></p>

							<h2><?php //echo get_post_meta(get_the_ID(), 'progres', true);?></h2>	



			</div>
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
