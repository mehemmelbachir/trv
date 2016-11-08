<?php get_header(); ?>


<?php 
$current_cat = get_the_category();
$cat_id = $current_cat[0]->term_id;
$args = array('category'=> $cat_id);
$myQuery = new WP_Query($args);

?>

	<!-- Menu bar -->
	<div id="interne-menu">						
		<ul id="">
			<?php if($myQuery->have_posts()): while($myQuery->have_posts()): $myQuery->the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			<?php endif;?>		

			 <?php wp_reset_postdata(); ?>
			
		</ul>
	</div>



	<main role="main">

		<!-- section -->
		<section>

			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<p><?php the_content(); ?></p>


			<?php endwhile; ?>
			<?php endif; ?>

			<?php //get_template_part('loop'); ?>

			<?php //get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
