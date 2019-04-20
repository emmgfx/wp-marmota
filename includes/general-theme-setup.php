<?php

add_image_size( 'marmota_featured-thumb', 730, 410, true );
add_image_size( 'marmota_list-thumb', 550, 310, true );

if ( ! isset( $content_width ) ) $content_width = 1140;

function marmota_supports_setup() {
    add_theme_support('title-tag');
    add_theme_support( "post-thumbnails" );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'post-formats', array( 'image' ) );
    add_theme_support( 'custom-logo' );
}
add_action('after_setup_theme', 'marmota_supports_setup');

function marmota_enqueue_style() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'Rubik', 'https://fonts.googleapis.com/css?family=Rubik:300,300i,400,500' );
}
add_action( 'wp_enqueue_scripts', 'marmota_enqueue_style' );

function marmota_enqueue_script() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap', esc_url(get_template_directory_uri()) . '/js/bootstrap-4.3.1-dist/js/bootstrap.min.js', array('jquery'), '4.3.1', true );
  wp_enqueue_script( 'marmota', esc_url(get_template_directory_uri()) . '/js/main.js', array('jquery', 'bootstrap'), true );
}
add_action( 'wp_enqueue_scripts', 'marmota_enqueue_script' );

function marmota_enqueue_comment_reply() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'marmota_enqueue_comment_reply' );
