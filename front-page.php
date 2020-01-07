<?php

get_header(); ?>
<section class="home-container"
<?php
if (have_posts()) :
	while(have_posts()) : the_post(); ?>
<article class="wrapwrap"><?php the_content(); ?></article>

	<?php

endwhile; ?>
</section>
 <?php
else :
	echo '<p>:)</p>';

endif; ?>


<?php
 	get_footer();

?>




