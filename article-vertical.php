<article id="post-<?php the_ID(); ?>" <?php post_class(array('list-item', 'vertical')); ?>>

    <div class="featured-image-wrapper embed-responsive embed-responsive-16by9">
        <a href="<?php the_permalink(); ?>" class="featured-image"><?php the_post_thumbnail( 'marmota_list-thumb' ); ?></a>
        <?php
        $marmota_categories = get_the_category(); 
        if( isset($marmota_categories[0]) ): $marmota_category = $marmota_categories[0];
        ?>
        <a href="<?php echo esc_url(get_category_link($marmota_category->term_id)); ?>" class="featured-image-badge <?php echo esc_attr(marmota_categories_colorizer_get_class( $marmota_category->term_id )); ?>"><?php echo esc_html($marmota_category->name); ?></a>
        <?php endif; ?>
    </div>

    <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    
    <?php get_template_part('context', 'list'); ?>
    
    <?php the_excerpt(); ?>
    
    <a href="<?php the_permalink(); ?>" class="read-more">
        <?php if( get_post_format() == 'image' ): ?>
        <?php echo __('Ver foto', 'marmota'); ?>
        <?php else: ?>
        <?php echo __('Leer m&aacute;s', 'marmota'); ?>
        <?php endif; ?>
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/arrow.svg" />
    </a>

</article>
