<?php

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

function add_social_section( $wp_customize ) {

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
add_action( 'customize_register', 'add_social_section' );
