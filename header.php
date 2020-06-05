<!doctype html>
<html <?php language_attributes(); ?>>
	<head>					
		<title>Jeroen Jacobs</title>
		<meta charset="UTF-8">
		<meta name="description" content="Jeroen Jacobs, Berlin based visual artist and furniture designer. Künstler und Möbeldesigner">	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="Jeroen Jacobs, Beton, concrete, sculpture, Bildhauerei, Berlin, Kitchen, Küche, Furniture design, Interior design, Möbeldesign, Bücherregal, Book shelves">
		<meta name="author" content="Jeroen Jacobs, Design and Development Dehlix">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
 <!--  <?php /* wp_body_open(); */ ?> -->





<!-- site-header -->


	
<header>

		<?php wp_nav_menu( array('theme_location' => 'primary mobile', 'menu_id' => 'mobile-nav','menu_class' => 'is-open' ) ); ?>
			

		<a class="undecorated" href="<?php echo home_url(); ?>">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		</a>

		<!-- NAV -->

		<nav role="navigation">
		<?php 
		
			$args = [
				'theme_location' => 'primary mobile',
				'menu_id' => 'mobile-nav',
				'menu_class' => 'is-open',
				'link_before' => 'wp_get_post_categories( int $post_id, array $args = array() )', 
				]; 
				wp_nav_menu( $args);
				?>

		</nav>	
		
		<div class="mobile-nav-toggle"><span class="toggle"></span></div>

</header>	
<!-- /site-header -->
