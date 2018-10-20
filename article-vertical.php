<article class="list-item vertical my-4">

    <a href="<?php the_permalink(); ?>" class="embed-responsive embed-responsive-16by9 featured-image mb-4" style="background-image: url(https://placeimg.com/800/450/nature);">
        <?php
        $categories = get_the_category(); 
        if( isset($categories[0]) ): $category = $categories[0];
        ?>
        <object><a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="featured-image-badge"><?php echo esc_html($category->name); ?></a></object>
        <?php endif; ?>
    </a>

    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <ul class="context list-inline list-unstyled">
        <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/calendar.svg" /> <?php the_date(); ?></li>
        <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/comments.svg" /> <?php comments_number(); ?></li>
    </ul>
    <?php the_excerpt(); ?>
    <a href="<?php the_permalink(); ?>" class="read-more"><?php echo __('Leer más', 'marmota'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" /></a>

</article>
