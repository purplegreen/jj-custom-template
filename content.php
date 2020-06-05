
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="wrapwrap">
<?php if( get_field('background_photo') ): ?>
    <img class="under" src="<?php the_field('background_photo'); ?>" />
<?php endif; ?>
<a href="<?php the_field('link_to_page'); ?>">



<?php if( get_field('foreground_photo') ): ?>
    <img class="above" src="<?php the_field('foreground_photo'); ?>" />
<?php endif; ?>

</a>
</div>
</article>