<article class="list-item featured my-4">
    <div class="row align-items-center">
        <div class="col-md-7 order-md-2 mb-3 mb-md-0">
            <a href="#2" class="embed-responsive embed-responsive-16by9 featured-image" style="background-image: url(https://placeimg.com/800/450/nature);">
                <object><a href="#1" class="featured-image-badge">Badge</a></object>
            </a>
        </div>
        <div class="col-md-5 order-md-1">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <ul class="context list-inline list-unstyled">
                <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/calendar.svg" /> <?php the_date(); ?></li>
                <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/comments.svg" /> <?php comments_number(); ?></li>
            </ul>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more"><?php echo __('Leer más', 'marmota'); ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/arrow.svg" /></a>
        </div>
    </div>
</article>
