<ul class="context list-inline list-unstyled">
    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/calendar.svg" /> <?php the_date(); ?></li>
    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/comments.svg" /> <?php comments_number(); ?></li>
    <li class="list-inline-item"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/icons/tags.svg" /> <?php echo get_the_tag_list( '', ', ', '.' ); ?></li>
</ul>
