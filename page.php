
<?php

get_header(); ?>
 
 <div class="all">
 


		
		<?php if (have_posts() ) :
			while (have_posts() ) : the_post(); ?>


<?php the_title( '<h2 class="in-title">', '</h2>' ); ?>

<div class="thecontent-page"><?php the_content(); ?></div>






</div>

 	<?php endwhile;

 	else: 
 		echo '<p> [ - - - ]</p>';

 	endif;		



?>
<?php
 	get_footer();

?>


