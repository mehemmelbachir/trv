<?php get_header(); ?>

	<!-- Menu bar -->
	<!--
	<div id="interne-menu">						
		<ul id="">
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
			<?php endwhile; ?>
			<?php endif; ?>			
		</ul>
	</div>
	-->


	<main role="main">

		<!-- section -->
		<section>
			<div class="container w500">
				<?php if(have_posts()): while(have_posts()): the_post(); ?>
				<article class="blog-article wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<?php if(has_post_thumbnail()){ ?>
						<div class="row">

							<div class="col-md-6">
								<?php the_post_thumbnail('large'); ?>
							</div>

							<div class="col-md-6">
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
									<h1><?php the_title(); ?></h1>
								</a>
								<p class="blog-date"><?php the_date(); ?></p>
								<p>
								<?php if(has_excerpt()) { 									
									the_excerpt();
								}else{									
									the_excerpt();
								};
									?>
								</p>
								<!--
								<a href="<?php the_permalink(); ?>" title="Voir l'article" class="view-article">Voir l'article</a>
								-->
							</div>
						</div>

					<?php }else{  ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
									<h1><?php the_title(); ?></h1>
								</a>
								<p class="blog-date"><?php the_date(); ?></p>
								<p>
								<?php if(has_excerpt()) { 									
									the_excerpt();
								}else{
									the_excerpt();
								
								};
									?>
								</p>

					<?php }; ?>
				</article>

				<?php
					endwhile;
					endif;
				?>
			</div>
			

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
