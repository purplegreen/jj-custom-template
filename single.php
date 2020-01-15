<?php

get_header(); ?>

<div class="all">
<section class="postwrapper">

<?php	

while(have_posts()){
		the_post(); ?>

<div class="in-title-background">

<?php the_title( '<h2 class="in-title">', '</h2>' ); ?>

<div class="cat"><?php the_category(' | '); ?></div>
</div>

<article class="wrapwrap">

<?php if( get_field('background_photo') ): ?>
    <img class="under" src="<?php the_field('background_photo'); ?>" />
<?php endif; ?>


<?php if( get_field('foreground_photo') ): ?>
    <img class="above-inside" src="<?php the_field('foreground_photo'); ?>" />
<?php endif; ?>




<div class="thecontent"><?php the_content(); ?></div>
			</div>	



</article>
<div class="slideshowContainer">

        <div class="mySlides a1 fade" style="background-image: url(<?php the_field('image_1')?>);"></div>
        <div class="mySlides b2 fade" style="background-image: url(<?php the_field('image_2')?>);"></div>
        <div class="mySlides c3 fade" style="background-image: url(<?php the_field('image_3')?>);"></div>
        <div class="mySlides d4 fade" style="background-image: url(<?php the_field('image_4')?>);"></div>
        <div class="mySlides e5 fade" style="background-image: url(<?php the_field('image_5')?>);"></div>
        <div class="mySlides f6 fade" style="background-image: url(<?php the_field('image_6')?>);"></div>
   




      <!-- <a onclick="plusSlides(-1)" class="prev"> <i class="fas fa-angle-left"></i> </a>
      <a onclick="plusSlides(1)" class="next"> <i class="fas fa-angle-right"></i> </a> -->

      <a onclick="plusSlides(-1)" class="prev"> <i class="left"></i> </a>
      <a onclick="plusSlides(1)" class="next"> <i class="right"></i> </a>

      <div class="wDotsContainer">
          <span onclick="currentSlide(1)" class="dot"></span>
          <span onclick="currentSlide(2)" class="dot"></span>
          <span onclick="currentSlide(3)" class="dot"></span>
          <span onclick="currentSlide(4)" class="dot"></span>
          <span onclick="currentSlide(5)" class="dot"></span>
          <span onclick="currentSlide(6)" class="dot"></span>
      </div>

 </div>


 </div>

</section>
</div>
 	<?php }


?>
<?php
 	get_footer();

?>
