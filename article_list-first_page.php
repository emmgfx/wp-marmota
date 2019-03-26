<div class="row">
<?php if ( have_posts() ) : $marmota_counter = 0; while ( have_posts() ) : the_post(); ?>
    
    <?php if( $marmota_counter == 0 ): ?>
    <div class="col-12">
        <?php get_template_part('article', 'featured'); ?>
    </div>
    <?php else: ?>
    <div class="col-12 col-sm-6 col-md-4">
        <?php get_template_part('article', 'vertical'); ?>
    </div>
    <?php endif; ?>
    
    <?php $marmota_counter++; ?>
    
<?php endwhile; endif; ?>
</div>
