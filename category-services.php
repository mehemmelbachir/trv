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
				<h1>Notre mission dans la construction d'une future infrastructure.</h1>
				<p>Lorem ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				 but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				  but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely 
				  ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but
				   surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely
				   Lorem ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				 but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				  but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely 
				  ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but
				  Lorem ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				 but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				  but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely 
				  ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but
				  Lorem ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				 but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				  but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely 
				  ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but
				  Lorem ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				 but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				  but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely 
				  ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but
				  Lorem ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				 but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly,
				  but surely ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but surely 
				  ipsum lorem valen halen warten ich gluten. purpose for chlukh kickly, but
				</p>
			</div>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
