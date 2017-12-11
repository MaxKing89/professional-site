<?php
/*
Template Name: Custom Page
*/

get_header(); ?>
   
</div>
    <row>
        <div>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
   </row>

<?php get_footer(); ?>