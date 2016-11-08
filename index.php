<?php get_header(); ?>

<?php wp_reset_query(); ?>


		<div id="main-logo">
			<img src="<?php echo get_template_directory_uri();?>\img\logo_305x50_2.png">
		</div>

		

		<div id="pagination_container">
			<div class="pagination_nav" id="prev-section-btn">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-up-01.png" alt="">
			</div>
			<div class="wrap">
				<div class="cube">			
					<div class="front">
						<a href="#section-01">
							<span>Accueil</span>
						</a>
					</div>
					
					<div class="bottom">
						<a href="#section-02">
							<span>MISSION</span>
						</a>
					</div>
					
					<div class="back">
						<a href="#section-03">
							<span>PROJETS</span>
						</a>
					</div>
					

					<div class="top">
						<a href="#section-04">
							<span>CONTACT</span>
						</a>
					</div>			
				</div>
			</div>
			

			<div class="pagination_nav" id="next-section-btn">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-down-01.png" alt="">
			</div>

		</div> <!-- Pagination Container-->
		


		




	<main role="main">

		<!-- section -->
		<div class="index-section section-01" data-section-name="section-01">
			<div class="container">
				<div>
					<h1>construire le future</h1>
					<h3>une experience</h3>
					<?php
						$category_id = get_cat_ID('qui sommes nous'); 
						$category_link = get_category_link($category_id);
					?>
					<a href="<?php echo $category_link; ?>" title="A propos">a propos</a>
				
				</div>
			</div>			
		</div>

		
		<div class="index-section section-02" data-section-name="section-02">
			<div class="container">
				<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<h1>Mission &amp; services</h1>
					<h3>Vers une construction moderne avec l'esprit traditionnel.
						<br>
						D&eacute;couvrez notre vision pour la construction de l'infrastructure de demain.
					</h3>
					
					<?php
						$idObj = get_category_by_slug('services'); 
  						$id = $idObj->term_id;
						$category_link = get_category_link($id);
					?>
					<a href="<?php echo $category_link; ?>">nos services</a>
				</div>
			</div>			
		</div>


		<div class="index-section section-03" data-section-name="section-03">
			<div class="container">
				<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<h1>projets &amp; r&#233;alisations</h1>
					<h3>Plus de <span id="projectCounter"></span> réalisé depuis sa création.
						<br>
						travocovia laisse son empreinte artistique et durable sur tout ces projets.
					</h3>
					<?php
						$idObj = get_category_by_slug('projects'); 
  						$id = $idObj->term_id;
						$category_link = get_category_link($id);
					?>
					<a href="<?php echo $category_link; ?>">Projets</a>
				</div>
			</div>			
		</div>


		<div class="index-section section-04" data-section-name="section-04">
			<div class="container">
				<div class="row">
					<div class="col-md-6 wow fadeInUp" id="recrutement" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="container">
							<div>
								<h1>Recrutement</h1>
								<h3>notre strategie de recrutement</h3>
								<a href="#" title="Recrutement">Renjoignez-nous</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s" >
						<h1>Contactez-nous...</h1>
					</div>
				</div>	
			</div>			
		</div>


		
	</main> 

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
