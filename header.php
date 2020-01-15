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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script type="text/javascript">			

jQuery(function(){
	jQuery('.mobile-nav-toggle').click(function() {
		jQuery('#mobile-nav.is-open').toggleClass('open');
		jQuery('.toggle').toggleClass('active');
		jQuery('.case').toggleClass('slide');
		jQuery('.b1item').toggleClass('slide');
});
});

</script>	

</header>	
<!-- /site-header -->
