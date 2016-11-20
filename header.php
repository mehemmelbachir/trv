<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?> <?php if(wp_title('', false)) { echo ' | '; } ?> <?php wp_title(''); ?> </title>

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

		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>
	</head>


	<!--
	<div id="loading">this is loading</div>
	-->

	<body <?php body_class(); ?> style="">

		<!-- Bootstrap Two -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js" integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU" crossorigin="anonymous"></script>




		<!-- header -->
			<header class="header clear" role="banner">

					<?php if(!is_home()){  ?>

								<?php 
					  		    $cat_title = single_cat_title('',false); 
					  		    $cat_description = category_description();
					  		 	
					  		    //$category_link
					  			if(strlen($cat_title) == 0){
					  				$cat_array = get_the_category();					  		
					  				$cat_title = $cat_array[0]->name;
					  				$cat_description = '';
					  			};

				  				if(strlen($cat_title) == 0 && get_post_type() == "jobpost"){
				  					$cat_title = 'Recrutement';
				  				}

				  				if(is_page()){
				  					$cat_title = get_the_title();
				  					$cat_description = "";
				  				}
					  			
					  			// If project add project thumbnail
					  			if($cat_title == 'Projets & réalisations'){
					  				echo '<h1>'.$cat_title.'</h1>';
					  			}

					  			$cat_id = get_cat_ID($cat_title);
					  			$cat_link = get_category_link($cat_id);
					  			$header_img = get_template_directory_uri() .'/img/'. $cat_title .'.jpg';
					  			$cat_array = get_the_category();
					  			if(($cat_array[0]->slug == 'projects') && is_single()){
					  				if ( has_post_thumbnail() ) { 
					  					$the_array = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
					  					$header_img = $the_array[0];
										//echo '<h1> this is it: ' . $header_img . '</h1>';
									} 
					  				
					  			}

					  			?>	


					<!-- logo -->
					<div class="bg" style="background: url('<?php echo $header_img; ?>') no-repeat center center; background-size: cover;"></div>
					<div class="jumbotron text-center pagination-centered" id="jumberton">		
						<div style="display: table; margin: 0 auto;">
							<img src="<?php echo get_template_directory_uri() . '/img/logo_305x50_2.png'; ?>" width="200px">
					  	</div>

					  	<div class="container">
					  		<div>
				  				<a href="<?php echo $cat_link; ?>" title="<?php echo $cat_title; ?>">
				  					<h1 class="title"><?php echo $cat_title; ?></h1>
				  				</a>
							  	
							  	<?php echo $cat_description; ?>			

					  		</div>
					  		
					  	</div>
					  	
					</div>
					<!-- /logo -->



					<?php }; ?>


					<div id="myNav" class="overlay" isOpen="false">
					    <!-- Overlay content -->
					    <div class="overlay-content">
					  	    <?php html5blank_nav(); ?>	
					    </div>


					</div>



					<div class="topbar hidden">
						<span>MENU</span>
						<?php if(!is_home()){ ?>
						<div id="first_line" class="row">
							
								<img 
  								 	src="<?php echo get_template_directory_uri();?>/img/logo_160px.png"
								 	alt="Travocovia logo"
								 	width="160px"
								 	style="float: right;">
							
							
								<p><?php get_breadcrumb(); //single_cat_title();?></p>
													
						</div>
						<?php  }; ?>
					</div>
					

					<!-- Use any element to open/show the overlay navigation menu -->
					<div class="menu" onclick="toggleNav()"> 						
						<button class="lines-button x" id="menu-btn"
								type="button" 
								role="button" 
								aria-label="Toggle Navigation">
							<span class="lines"></span>
						</button>
					</div>  

					



				


			</header>
			<!-- /header -->


		<!-- Container -->
		<div class="container-fluid">	