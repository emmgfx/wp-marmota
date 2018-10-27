<div class="row">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <div class="col-12 col-sm-6 col-md-4">
        <?php get_template_part('article', 'vertical'); ?>
    </div>
    
<?php endwhile; endif; ?>
</div>
