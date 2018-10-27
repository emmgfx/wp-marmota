<div class="row">
    <div class="col-12 col-lg-8 offset-0 offset-lg-2">
    
        <article class="detail my-4">

            <h1 class="text-center"><?php the_title(); ?></h1>

            <?php if(has_post_thumbnail()): ?>
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

            <div class="row next-and-prev-links">
                <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/left.svg" class="mr-2" />
                    <span class="text-truncate"><?php previous_post_link('%link'); ?></span>
                </div>
                <div class="col-12 col-sm-6 d-flex justify-content-end">
                    <span class="text-truncate"><?php next_post_link('%link'); ?></span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/right.svg" class="ml-2" />
                </div>
            </div>
            
        </article>
        
    </div>
</div>
