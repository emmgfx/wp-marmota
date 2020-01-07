<?php

require_once 'includes/menus.php';
require_once 'includes/customize.php';
require_once 'includes/general-theme-setup.php';
require_once 'includes/sidebars.php';
require_once 'includes/categories-colorizer.php';

function marmota_current_page(){
    return get_query_var('paged') ?: 1;
}

function marmota_is_first_page(){
    return marmota_current_page() == 1;
}

function marmota_has_sticky_post(){
    $sticky = get_option( 'sticky_posts' );
    return isset($sticky[0]);
}

function marmota_is_posts_page(){
  return
    is_category() ||
    is_tag() ||
    is_date() ||
    is_archive();
}

function modify_default_query( $query ) {
    
    # This function modifies the post_per_page setting, in order to
    # allow a correct pagination and the use of a featured last post or
    # sticky post.
    #
    # If the user is in the first page of the blog, checks if exists any sticky
    # post. The result is: If the user is in the first page and don't exists any
    # sticky post, add one post to the posts_per_page in the query. And to the
    # the same in other pages, but adding one to the offset instead of
    # posts_per_page.
    
    if( $query->is_home() ):
        
        $posts_per_page = get_option('posts_per_page');

        if( marmota_is_first_page() ):
            
            if( !marmota_has_sticky_post() ){
                $posts_per_page++;
            }
    
            $query->set('posts_per_page', $posts_per_page);
            
        else:
            
            $offset = $posts_per_page * $query->get('paged') - $posts_per_page;
            
            if( !marmota_has_sticky_post() ){
                $offset++;
            }
            
            $query->set('offset', $offset );
            
        endif;
    
    endif;
}

add_action( 'pre_get_posts', 'modify_default_query' );
