<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
        

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" 
				integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
				crossorigin="anonymous"></script>

		<!-- Bootstrap 4 -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" 
				integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" 
				crossorigin="anonymous">



		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>



        <script>
        /*
			$(function() {
				$.scrollify({
					section : ".index-section",
				});
			});
*/
		</script>



	</head>
	<body <?php body_class(); ?>>

		<!-- Bootstrap Two -->
	<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script> -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>




		<!-- header -->
			<header class="header clear" role="banner">

					<?php if(!is_home()){  ?>
					<!-- logo -->
					<div class="bg"></div>
					<div class="jumbotron text-center pagination-centered">
						<!-- TODO: Insert company logo -->
						
						<div style="display: table; margin: 0 auto;">
							<img src="<?php echo get_template_directory_uri();?>/img/logo_305x50_2.png">
					  		<!-- <p class="lead">Une entreprise digne de votre confiance</p>  -->
					  	</div>			
					</div>
					<!-- /logo -->

					<?php }; ?>

					<div id="myNav" class="overlay">
					    <!-- Button to close the overlay navigation -->
					    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

					    <!-- Overlay content -->
					    <div class="overlay-content">
					  	    <?php html5blank_nav(); ?>
					    </div>
					</div>



					<!-- Use any element to open/show the overlay navigation menu -->
					<div class="menu" onclick="openNav()">
						<a href="#" data-toggle="tooltip"
       								 data-placement="right" title="Menu">
							<img src="<?php echo get_template_directory_uri(); ?>/img/menu.png" >
						</a>
					</div>
					




					<!-- nav -->
					<!--
					<nav class="nav" role="navigation">
						<?php if(!is_home()){
							html5blank_nav();
						}else{
							// Display only on home page
							echo '<h1>TRAVOCOVIA</h1>';
						}; ?>
					</nav>
					-->
					<!-- /nav -->

				


			</header>
			<!-- /header -->



		

		<!-- Container -->
		<div class="container-fluid">