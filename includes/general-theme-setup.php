<?php

add_theme_support( "post-thumbnails" );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats', array( 'image' ) );
add_image_size( 'marmota_featured-thumb', 730, 410, true );
add_image_size( 'marmota_list-thumb', 350, 197, true );

if ( ! isset( $content_width ) ) $content_width = 960;

add_action('after_setup_theme', 'marmota_slug_setup');
function marmota_slug_setup() {
    add_theme_support('title-tag');
}

# Enqueue styles and fonts
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'Rubik', 'https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500' );

# Enqueue jquery and bootstrap for the navigation
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '4.2.1', true);
wp_enqueue_script( 'marmota', get_template_directory_uri() . '/js/main.js', array('jquery', 'bootstrap'), true );

function marmota_enqueue_comment_reply() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'marmota_enqueue_comment_reply' );
