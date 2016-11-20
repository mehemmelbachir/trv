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
