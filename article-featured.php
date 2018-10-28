<article id="post-<?php the_ID(); ?>" <?php post_class(array('list-item', 'featured', 'my-4')); ?>>
    <div class="row align-items-center">
        <div class="col-md-7 order-md-2 mb-3 mb-md-0">
            <a href="<?php the_permalink(); ?>" class="embed-responsive embed-responsive-16by9 featured-image" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>);">
                <?php
                $categories = get_the_category(); 
                if( isset($categories[0]) ): $category = $categories[0];
                ?>
                <object><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="featured-image-badge"><?php echo esc_html($category->name); ?></a></object>
                <?php endif; ?>
            </a>
        </div>
        <div class="col-md-5 order-md-1">
            
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            
            <?php get_template_part('context', 'list'); ?>
            
            <?php the_excerpt(); ?>
            
            <a href="<?php the_permalink(); ?>" class="read-more">
                <?php if( get_post_format() == 'image' ): ?>
                <?php echo __('Ver foto', 'marmota'); ?>
                <?php else: ?>
                <?php echo __('Leer más', 'marmota'); ?>
                <?php endif; ?>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" />
            </a>
        </div>
    </div>
</article>
