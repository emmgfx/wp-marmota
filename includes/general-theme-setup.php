<?php

add_theme_support( "post-thumbnails" );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats', array( 'image' ) );

if ( ! isset( $content_width ) ) $content_width = 960;

add_action('after_setup_theme', 'theme_slug_setup');
function theme_slug_setup() {
    add_theme_support('title-tag');
}

# Enqueue jquery and bootstrap for the navigation
wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);
wp_enqueue_script( 'marmota', get_template_directory_uri() . '/js/main.js', array('jquery'), true );

function enqueue_comment_reply() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'enqueue_comment_reply' );
