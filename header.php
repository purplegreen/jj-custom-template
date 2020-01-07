<!doctype html>
<html <?php language_attributes(); ?>>
	<head>					
		<title>dehlix</title>
		<meta name="description" content="Jeroen Jacobs">
		<meta charset="<?php bloginfo('charset'); ?>" >
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
 <!--  <?php /* wp_body_open(); */ ?> -->





<!-- site-header -->


	
<header>

		<?php wp_nav_menu( array('theme_location' => 'primary mobile', 'menu_id' => 'mobile-nav','menu_class' => 'is-open' ) ); ?>
			

		<a class="undecorated" href="<?php echo home_url(); ?>">
		<h1><a class="undecorated" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
		</a>

				

</header>	
<!-- /site-header -->
