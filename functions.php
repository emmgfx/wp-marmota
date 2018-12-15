<?php

require_once 'includes/menus.php';
require_once 'includes/customize.php';
require_once 'includes/general-theme-setup.php';


function marmota_current_page(){
    return get_query_var('paged') ?: 1;
}
function marmota_is_first_page(){
    return marmota_current_page() == 1;
}

function modify_default_query( $query ) {
    
    if( $query->is_home() ):
        
        $posts_per_page = get_option('posts_per_page');
        
        if( $query->get('paged') == 0 ):
            $query->set('posts_per_page', $posts_per_page + 1);
        else:
            $first_post_of_this_page = $posts_per_page * $query->get('paged') - $posts_per_page;
            $query->set('offset', $first_post_of_this_page + 1 );
        endif;
    
    endif;
}

add_action( 'pre_get_posts', 'modify_default_query' );
