<?php get_header(); ?>

	<main role="main">
		<div class="row">
			<div class="offset-md-6">
				<h1 class="category-title">Projets et réalisation</h1>
			</div>
		</div>
		
		<!-- section -->
		<section>

			<h1><?php //_e( 'Categories for ', 'html5blank' ); single_cat_title(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>