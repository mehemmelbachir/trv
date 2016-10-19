<?php get_header(); ?>



		<!--
		<div class="fixed-layer">
			<h1></h1>
		</div>
		-->

		<div id="main-logo">
			<img src="<?php echo get_template_directory_uri();?>\img\logo_305x50_2.png">
		</div>



		<ul class="pagination">
			<li onclick="goto_section(1)"><a href="#1">Home</a></li>
			<li onclick="goto_section(2)"><a href="#2">Qui somme nous</a></li>
			<li onclick="goto_section(3)"><a href="#3">Nos service</a></li>
			<li onclick="goto_section(4)"><a href="#4">Contact</a></li>
		</ul>




	<main role="main">

		<!-- section -->
		<div class="index-section" id="section-01">
			<div class="container">
			<!--	<div class="lines-50"></div>  -->
			</div>			
		</div>

		
		<div class="index-section" id="section-02">
			<div class="container" style="position: relative;">
				<h1>Second content </h1>
				<div class="lines-0"></div>
				<div class="lines-25"></div>
			</div>			
		</div>


		<div class="index-section" id="section-03">
			<div class="container">
				<h1>Third content </h1>
				<div class="lines-75"></div>
			</div>			
		</div>





		<!-- /section -->
	</main> 

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
