<?php get_header(); ?>

<div class="container">
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
    <?php get_template_part('article', 'detail'); ?>

    <?php
    if ( comments_open() ){
      comments_template();
    }
    ?>

    <?php endwhile; endif; ?>
    
</div>

<?php get_footer(); ?>
