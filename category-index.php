<?php /* 
* Template Name: category index 
*/ ?>

<?php

get_header(); ?>

<div class="all">
 <ul class="category-index">
 <?php
 foreach ( get_categories() as $cat ) :
     echo '<li class="category-list-item">';
     echo '<a href="' . get_category_link($cat->term_id) . '">';
     echo $cat->cat_name;
     echo '</a>';
     echo '</li>';
 endforeach;

?>
 </ul>


</div>
 
<?php
 	get_footer();

?>
