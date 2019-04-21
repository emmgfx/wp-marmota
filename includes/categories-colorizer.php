<?php

function marmota_categories_colorizer_get_list(){
    
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
    return 'colorize-position-' . marmota_categories_colorizer_get_list_position( $category_id );
}

define('MARMOTA_CATEGORY_COLORS', marmota_categories_colorizer_get_list());
