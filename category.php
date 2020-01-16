
<?php

get_header(); ?>

<div class="all">

 <?php the_archive_title( '<h2 class="in-title">', '</h2>' ); ?>

    <div class="space-around">

            <ul>
                        <?php	
                        while(have_posts()){
                                the_post(); ?>
                                
                                    <li class="cat-item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                
                        <?php }
                        ?>
            </ul>
 
    </div>
</div>
<?php
 	get_footer();

?>