<?php

get_header(); ?>

<div class="">


<div id="posts-list">

<?php
if (have_posts()) :
	while(have_posts()) : the_post(); ?>
	
<article class="wrapwrap">
	<?php get_template_part('content'); ?>
</article>
 
	<?php

endwhile; ?>

<p class="pagination"><?php echo paginate_links(); ?></p>

 <?php
else :
	echo '<p>:)</p>';

endif; ?>



</div>
</div>





