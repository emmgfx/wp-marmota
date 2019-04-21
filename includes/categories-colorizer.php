<?php

define( 'MARMOTA_CLORIZE_CATEGORIES', boolval( get_theme_mod("colorize-categories", true) ) );
define( 'MARMOTA_CATEGORY_COLORS', marmota_categories_colorizer_get_list() );

function marmota_categories_colorizer_get_list(){
    
    if( !MARMOTA_CLORIZE_CATEGORIES ){
        return array();
    }
    
    $categories_in_db = get_terms( 'category', array(
        'orderby' => 'id', 
        'order' => 'ASC',
        'hide_empty' => 1,
    ) );
    
    $categories_list = array();
    
    foreach( $categories_in_db as $category ){
        $categories_list[] = $category->term_id;
    }
    
    return $categories_list;
}

function marmota_categories_colorizer_get_list_position( $category_id ){
    return array_search( $category_id, MARMOTA_CATEGORY_COLORS ) ?: 0;
}

function marmota_categories_colorizer_get_class( $category_id ){
    if( get_theme_mod("colorize-categories", true) ){
        return 'colorize-position-' . marmota_categories_colorizer_get_list_position( $category_id );
    }else{
        return false;
    }
}
