<?php

function marmota_custom_logo_setup() {
    $defaults = array(
        'height'      => 42,
        'width'       => 200,
        'flex-height' => false,
        'flex-width'  => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'marmota_custom_logo_setup' );

function marmota_customize_panel( $wp_customize ) {
    
    $wp_customize->add_panel( 'marmota', array(
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'title' => __( 'Marmota', 'marmota' ),
        'description' => __( 'Ajustes de la plantilla', 'marmota' ),
    ) );
    
}
add_action( 'customize_register', 'marmota_customize_panel' );

require_once 'customize-social.php';
require_once 'customize-interface.php';
