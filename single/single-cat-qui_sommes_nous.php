<?php get_header(); ?>


<?php 
$current_cat = get_the_category();
$cat_id = $current_cat[0]->term_id;
$args = array('cat'=> $cat_id);
$myQuery = new WP_Query($args);
?>

	<!-- Menu bar -->
	<div id="interne-menu" style="z-index:9;">						
		<ul id="">
			

			<?php if($myQuery->have_posts()): while($myQuery->have_posts()): $myQuery->the_post(); ?>
			
				<?php //echo $category_id = get_the_category(get_the_ID())[0]->term_id; ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php echo get_the_title(); ?>"><?php echo get_the_title(); ?></a></li>
			

			<?php endwhile; ?>
			<?php endif;?>		

			 <?php wp_reset_postdata(); ?>
			
		</ul>
	</div>





	<main role="main">



	<!-- section -->
	<section>


	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<div class="container w500">

				<!-- post thumbnail -->
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			<!-- /post thumbnail -->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

			<!-- post details -->
		<!--	<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span> -->
		<!--	<span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span> -->
			<!-- /post details -->

			<?php the_content(); // Dynamic Content ?>
				
			</div>

			

		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
