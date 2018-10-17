<?php

require_once 'includes/menus.php';

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
            'theme_supports' => '', // Rarely needed.
            'default' => '', // Ej: #000000
            'transport' => 'refresh', // or postMessage
            'sanitize_callback' => '', // Ej: 'sanitize_hex_color'
            'sanitize_js_callback' => '', // Basically to_json.
        ) );
        
        $wp_customize->add_control( $slug, array(
            'type' => 'url',
            'priority' => 10, // Within the section.
            'section' => 'social', // Required, core or custom.
            'label' => $label,
            'description' => __( 'URL del perfil de ' . $label, 'marmota' ),
        ) );
    }

}
add_action( 'customize_register', 'customize_register' );
