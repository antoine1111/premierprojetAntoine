<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dansez
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<!-- Bootstrap core CSS -->
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
	<!-- Custom CSS -->
	<link href="https://dl.dropbox.com/s/abew6ybuvbmftes/style.css" rel="stylesheet">
	
	<!-- Other -->
	<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
<!--
						<div class="navbar-brand">
							<p>Procurez-vous vos billets</p>
							<p><a href="tel:+14186416040">418 641-6040</a> ou <a href="tel:+18776416040">1 877 641-6040</a></p>
						</div>
-->
					</div>
					<?php 
						wp_nav_menu(array(
							'theme_location'	=> 'menu-1',
							'container' 		=> 'nav',
							'container_class' 	=> 'navbar-collapse collapse',
							'menu_class' 		=> 'nav navbar-nav navbar-right'
						));
					?>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
