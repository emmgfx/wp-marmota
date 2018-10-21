<?php get_header(); ?>

<div class="container">
    
    <div class="row">
    <?php if ( have_posts() ) : $counter = 0; while ( have_posts() ) : the_post(); ?>
        
        <?php if( $counter == 0 ): ?>
        <div class="col-12">
            <?php get_template_part('article', 'featured'); ?>
        </div>
        <?php else: ?>
        <div class="col-12 col-sm-6 col-md-4">
            <?php get_template_part('article', 'vertical'); ?>
        </div>
        <?php endif; ?>
        
        <?php $counter++; ?>
        
    <?php endwhile; endif; ?>
    </div>
    
    <?php
    the_posts_pagination(array(
        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#C1BFBF" d="M15.41,16.58L10.83,12L15.41,7.41L14,6L8,12L14,18L15.41,16.58Z" />
        </svg>',
        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24" height="24" viewBox="0 0 24 24">
            <path fill="#C1BFBF" d="M8.59,16.58L13.17,12L8.59,7.41L10,6L16,12L10,18L8.59,16.58Z" />
        </svg>',
        'mid_size' => 2
    ));
    ?>
    
</div>

<?php get_footer(); ?>
