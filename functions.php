<?php

require_once 'includes/menus.php';

add_theme_support( "post-thumbnails" );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-formats', array( 'image' ) );

if ( ! isset( $content_width ) ) $content_width = 960;

add_action('after_setup_theme', 'theme_slug_setup');
function theme_slug_setup() {
    add_theme_support('title-tag');
}

wp_enqueue_script('jquery');
wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery'), '4.1.3', true);

function marmota_get_social_networks(){
    return array(
        'social_dribbble' => __('Dribbble', 'marmota'),
        'social_facebook' => __('Facebook', 'marmota'),
        'social_instagram' => __('Instagram', 'marmota'),
        'social_linkedin' => __('Linked In', 'marmota'),
        'social_pinterest' => __('Pinterest', 'marmota'),
        'social_telegram' => __('Telegram', 'marmota'),
        'social_tumblr' => __('Telegram', 'marmota'),
        'social_tumblr' => __('Tumblr', 'marmota'),
        'social_twitch' => __('Twitch', 'marmota'),
        'social_twitter' => __('Twitter', 'marmota'),
        'social_youtube' => __('Youtube', 'marmota'),
    );
}
    
function customize_register( $wp_customize ) {

    $wp_customize->add_panel( 'marmota', array(
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'title' => __( 'Marmota', 'marmota' ),
        'description' => __( 'Ajustes de la plantilla', 'marmota' ),
    ) );
    
    $wp_customize->add_section( 'social', array(
        'title' => __( 'Redes sociales', 'marmota' ),
        'description' => __( 'Recuerda incluir la URL completa, incluyendo el <code>https://</code>', 'marmota' ),
        'panel' => 'marmota',
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );
    
    foreach( marmota_get_social_networks() as $slug => $label ) {
        $wp_customize->add_setting( $slug, array(
            'type' => 'theme_mod', // or 'option'
            'capability' => 'edit_theme_options',
            'transport' => 'refresh', // or postMessage
            'sanitize_callback' => 'esc_url_raw', // Ej: 'sanitize_hex_color'
        ) );
        
        $wp_customize->add_control( $slug, array(
            'type' => 'url',
            'priority' => 10, // Within the section.
            'section' => 'social', // Required, core or custom.
            'label' => $label,
            'description' => sprintf(__( 'URL del perfil de %s.', 'marmota' ), $label ),
        ) );
    }

}
add_action( 'customize_register', 'customize_register' );

function current_page(){
    return get_query_var('paged') ?: 1;
}
function is_first_page(){
    return current_page() == 1;
}

function modify_default_query( $query ) {
    
    if( $query->is_main_query() ):
        
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

function enqueue_comment_reply() {
    if ( get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'comment_form_before', 'enqueue_comment_reply' );
