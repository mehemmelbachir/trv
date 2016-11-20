<?php 
/**
* Template Name: Contact template.
*
*/

get_header(); ?>
	<div class="container w500" id="contact-form">
		<main role="main">
		<!-- section -->

		<section>

		<!--	<h1><?php the_title(); ?></h1> -->
		<h1>Envoyer un message rapide.</h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php //comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>		

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>
	

	</div>
	<!-- /Container -->
	

<?php //get_sidebar(); ?>

<?php get_footer(); ?>