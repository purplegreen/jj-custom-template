<?php

get_header(); ?>
<section class="home-container"
<?php
if (have_posts()) :
	while(have_posts()) : the_post(); ?>
<article class="wrapwrap">
<?php if( get_field('background_photo') ): ?>
    <img class="under" src="<?php the_field('background_photo'); ?>" />
<?php endif; ?>
<a href="<?php the_field('link_to_page'); ?>">



<?php if( get_field('foreground_photo') ): ?>
    <img class="above" src="<?php the_field('foreground_photo'); ?>" />
<?php endif; ?>

</a>
</article>

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




