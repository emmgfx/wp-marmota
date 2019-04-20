<div class="row">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <article id="post-<?php the_ID(); ?>" <?php post_class(array('detail')); ?>>

            <h1 class="article-title text-center"><?php the_title(); ?></h1>
            
            <?php if( has_post_thumbnail() && get_post_format() != 'image' ): ?>
            <div class="featured-image-wrapper embed-responsive embed-responsive-16by9">
                <a href="<?php the_permalink(); ?>" class="featured-image"><?php the_post_thumbnail( 'marmota_featured-thumb' ); ?></a>
                <?php
                $marmota_categories = get_the_category(); 
                if( isset($marmota_categories[0]) ): $marmota_category = $marmota_categories[0];
                ?>
                <a href="<?php echo esc_url(get_category_link($marmota_category->term_id)); ?>" class="featured-image-badge"><?php echo esc_html($marmota_category->name); ?></a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

            <?php get_template_part('context', 'detail'); ?>
            
            <main>
                <?php the_content(); ?>
            </main>
            
            <?php
            wp_link_pages(array(
                'before'           => '<nav class="post-navigation">',
                'after'            => '</nav>',
                'next_or_number'   => 'next',
                'separator'        => ' &middot; ',
            ));
            ?>
            
            <?php if( is_single() ): ?>
                
            <div class="share-links text-right d-flex justify-content-end align-items-center">
                <span><?php echo __('Compartir', 'marmota'); ?></span>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/social/facebook.svg" /></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/social/linkedin.svg" /></a>
                <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/social/twitter.svg" /></a>
            </div>

            <div class="row next-and-prev-links">
                <?php
                $marmota_previous_link = get_previous_post_link('%link');
                $marmota_next_link = get_next_post_link('%link');
                ?>
                
                <?php if( $marmota_previous_link ): ?>
                <div class="col-12 d-flex <?php if($marmota_next_link): ?>col-sm-6 mb-2 mb-sm-0<?php endif; ?>">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/left.svg" class="mr-2" />
                    <span class="text-truncate"><?php echo $marmota_previous_link; ?></span>
                </div>
                <?php endif; ?>
                
                <?php if( $marmota_next_link ): ?>
                <div class="col-12 d-flex justify-content-end <?php if( $marmota_previous_link ): ?>col-sm-6<?php endif; ?>">
                    <span class="text-truncate"><?php echo $marmota_next_link; ?></span>
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/right.svg" class="ml-2" />
                </div>
                <?php endif; ?>
            </div>
            
            <?php endif; ?>
            
        </article>
        
    </div>
</div>
