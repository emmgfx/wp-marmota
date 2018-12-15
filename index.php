<?php get_header(); ?>

<div class="container">
    
    <?php
    if(marmota_is_first_page()){
        get_template_part('article_list', 'first_page');
    }else{
        get_template_part('article_list');
    }
    ?>
    
    <?php get_template_part('pagination', 'posts'); ?>
    
</div>

<?php get_footer(); ?>
