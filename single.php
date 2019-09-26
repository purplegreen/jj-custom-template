<?php

get_header(); ?>

<div class="all">
<article class="postwrapper">


<a href="<?php echo esc_url( home_url( '/announcements/' ) ); ?>" class=""><h5 class="somespacebottom60 toindex">All Announcements >></h5></a>


<?php	

while(have_posts()){
		the_post(); ?>



<?php the_title( '<h2 class="">', '</h2>' ); ?>

<div class="thecontent"><?php the_content(); ?></div>
			</div>				


</article>
</div>
 	<?php }


?>