<?php get_header(); ?>

	<!-- Menu bar -->
	<div id="interne-menu">						
		<ul id="">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			<?php endif; ?>			
		</ul>
	</div>



	<main role="main">

		<!-- section -->
		<section>
			<div class="container w500">
				<h1>What we are saying on normal categories...</h1>	
				
			</div>
			

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
