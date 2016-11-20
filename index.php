<?php get_header(); ?>

<?php wp_reset_query(); ?>
		
		<script src="<?php echo get_template_directory_uri() . '/js/index.js'; ?>"></script>

		

		<div id="main-logo">
			<img src="<?php echo get_template_directory_uri();?>/img/logo_305x50_2.png">
		</div>

		

		<div id="pagination_container">
			<div class="pagination_nav" id="prev-section-btn">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-up-01.png" alt="">
			</div>
			<div class="wrap">
				<div class="cube">			
					<div class="front">
						<a href="#accueil">
							<span>Accueil</span>
						</a>
					</div>
					
					<div class="bottom">
						<a href="#services">
							<span>MISSION</span>
						</a>
					</div>
					
					<div class="back">
						<a href="#projets">
							<span>PROJETS</span>
						</a>
					</div>
					

					<div class="top">
						<a href="#carriere">
							<span>RECRUTEMENT</span>
						</a>
					</div>			
				</div>
			</div>
			

			<div class="pagination_nav" id="next-section-btn">
				<img src="<?php echo get_template_directory_uri(); ?>/img/icons/arrow-down-01.png" alt="">
			</div>

		</div> <!-- Pagination Container-->
		


		




	<main role="main">

		<div id="contactez-nous">
			<a href="<?php echo get_site_url();?>/contact/" title="Contactez-nous">
				<img src="<?php echo get_template_directory_uri() .'/img/icons/mail-01.png'; ?>" alt="">
				Contactez-nous
			</a>
		</div>


		<!-- section -->
		<div class="index-section section-01" data-section-name="accueil">
			<div class="container-center">
				<div>
					<h1>Un pionnier dans l'industrie de la construction</h1>
				<!--	<h3>
						Nous nous concentrons sur l'innovation,<br> que les technologies parfaites et l'expérience a fait de nous <br>
						
					</h3>
				-->
					
					<?php
						$category_id = get_cat_ID('qui sommes nous'); 
						$category_link = get_category_link($category_id);
					?>
					<a href="<?php echo $category_link; ?>" title="Découvez qui sommes nous.">a propos</a>
				
				</div>
			</div>			
		</div>

		
		<div class="index-section section-02" data-section-name="services">
			<div class="container-center">
				<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">
					<h1>Mission &amp; services</h1>
				<!--	<h3>Vers une construction moderne avec l'esprit traditionnel.
						<br>
						D&eacute;couvrez notre vision pour la construction de l'infrastructure de demain.
					</h3>
					-->
					<h3>Nous nous concentrons sur l'innovation, les technologies parfaites et l'experience<br>
						pour la construction de l'infrastructure de demain.
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


		<div class="index-section section-03" data-section-name="projets">
			<div class="container-center">
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


		<div class="index-section section-04" data-section-name="carriere">
			<div class="container-center">
			<!--	<div class="row">
					<div class="col-md-6 wow fadeInUp" id="recrutement" data-wow-duration="1s" data-wow-delay=".5s">
						<div class="container">
							<div>
								<h1>Recrutement</h1>
								<h3>Trouvez votre future travail au sein d'une entreprise qui suit vos ambitions</h3>
								<a href="<?php echo get_site_url();?>/recrutement/" title="Recrutement">Renjoignez-nous</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s" >
						<h1>Contactez-nous...</h1>
					</div>
				</div>	
			</div>			 -->

			<div>
				<h1>rejoignez-nous</h1>
			<!--	<h3>Trouvez votre future travail au sein d'une entreprise au niveau de vos ambitions</h3> -->
				<h3>Avec plus de <span style="color:#e6e6e6; font-size:1.2em;" id="carreerCounter"></span>, Travocovia met en œuvre une politique qui vise le développement <br>et le renforcement des compétences,
				 qui permettre à chacun d’être acteur <br>de son parcours et son développement professionnel.</h3>
				<a href="<?php echo get_site_url();?>/recrutement/" title="Recrutement">Renjoignez-nous</a>
			</div>

		</div>


		
	</main> 

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
