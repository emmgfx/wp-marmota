<?php
$marmota_tags_list = get_the_tag_list( '', ', ', '.' );
?>
<ul class="context list-inline list-unstyled">
    <li class="list-inline-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/calendar.svg" /> <?php the_date(); ?></li>
    <li class="list-inline-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/comments.svg" /> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></li>
    <?php if( $marmota_tags_list ): ?>
    <li class="list-inline-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/tags.svg" /> <?php echo $marmota_tags_list; ?></li>
    <?php else: ?>
    <li class="list-inline-item"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/icons/tags.svg" /> <?php echo __("Sin etiquetas", "marmota"); ?></li>
    <?php endif; ?>
</ul>
