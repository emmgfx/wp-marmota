<?php get_header(); ?>

<div class="container">
    
    <?php
    if(marmota_is_first_page()){
        get_template_part('article_list', 'first_page');
    }else{
        get_template_part('article_list');
    }
    ?>
    
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
