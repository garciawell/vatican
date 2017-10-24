<!DOCTYPE html> 
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php wp_title(); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">


	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
			<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?> 
		

	</head>
	
	<body <?php body_class(); ?>>
		<?php $titan = TitanFramework::getInstance( 'inundaweb' ); ?>
		<header id="header" >

			<div class="menu-topo">



				<nav class="navbar  navbar-static-top example6">
					<div class="container">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar6">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>


							<?php if ( is_home() || is_front_page() ) { ?>
							<h1>
								<a class="logo" href="<?php bloginfo('home')?>"> 
								<?php
								$imageID = $titan->getOption( 'logo_topo' );$imageSrc = $imageID;if ( is_numeric( $imageID ) ) {$imageAttachment = wp_get_attachment_image_src( $imageID );$imageSrc = $imageAttachment[0];} ?>
								<img src='<?php echo esc_url( $imageSrc ); ?>' alt="<?php echo get_bloginfo( 'description' ); ?>"> 
							</a>
						</h1>

						<?php } else { ?>
						<span>
							<a class="logo" href="<?php bloginfo('home')?>"> 
								<?php
								$imageID = $titan->getOption( 'logo_topo' );$imageSrc = $imageID;if ( is_numeric( $imageID ) ) {$imageAttachment = wp_get_attachment_image_src( $imageID );$imageSrc = $imageAttachment[0];} ?>
								<img src='<?php echo esc_url( $imageSrc ); ?>'> 
							</a>
						</span>
						<?php }
						?>



					</div>
					<div id="navbar6" class="navbar-collapse">
						<div class="navbar-right inf-topo">
							<a class="face" href="<?php echo $mySavedValue = $titan->getOption( 'facebook' ); ?>" target="_blank"></a>
							<a class="tel" href="tel:<?php echo $mySavedValue2 = $titan->getOption( 'telefone' ); ?>" target="_blank"><?php echo $mySavedValue2 = $titan->getOption( 'telefone' ); ?></a>
						</div>
						<?php wp_nav_menu( array( 'menu' => 'menu', 'container'=>'navbar-collapse collapse', 'menu_class'=> 'nav navbar-nav navbar-right' ) ); ?>


					</div>
					<!--/.nav-collapse -->
				</div>
				<!--/.container-fluid -->
			</nav>


		</div>


	</header><!-- .site-header -->


	<div id="content" class="site-content">
