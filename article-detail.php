<div class="row">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
        <article id="post-<?php the_ID(); ?>" <?php post_class(array('detail', 'my-4')); ?>>

            <h1 class="text-center"><?php the_title(); ?></h1>
            
            <?php if( has_post_thumbnail() && get_post_format() != 'image' ): ?>
            <a href="<?php the_permalink(); ?>" class="embed-responsive embed-responsive-16by9 featured-image mb-4" style="background-image: url(<?php echo get_the_post_thumbnail_url(null, 'post-thumbnail'); ?>">
                <?php
                $categories = get_the_category(); 
                if( isset($categories[0]) ): $category = $categories[0];
                ?>
                <object><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="featured-image-badge"><?php echo esc_html($category->name); ?></a></object>
                <?php endif; ?>
            </a>
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
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/facebook.svg" /></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=&source=" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/linkedin.svg" /></a>
                <a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/social/twitter.svg" /></a>
            </div>

            <div class="row next-and-prev-links">
                <?php
                $previous_link = get_previous_post_link('%link');
                $next_link = get_next_post_link('%link');
                ?>
                
                <?php if( $previous_link ): ?>
                <div class="col-12 d-flex <?php if($next_link): ?>col-sm-6 mb-2 mb-sm-0<?php endif; ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/left.svg" class="mr-2" />
                    <span class="text-truncate"><?php echo $previous_link; ?></span>
                </div>
                <?php endif; ?>
                
                <?php if( $next_link ): ?>
                <div class="col-12 d-flex justify-content-end <?php if( $previous_link ): ?>col-sm-6<?php endif; ?>">
                    <span class="text-truncate"><?php echo $next_link; ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/right.svg" class="ml-2" />
                </div>
                <?php endif; ?>
            </div>
            
            <?php endif; ?>
            
        </article>
        
    </div>
</div>
