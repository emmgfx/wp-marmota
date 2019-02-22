<?php

function marmota_add_interface_section( $wp_customize ) {

    $wp_customize->add_section( 'interface', array(
        'title' => __( 'Interfaz', 'marmota' ),
        'panel' => 'marmota',
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );
    
    $wp_customize->add_setting( 'navbar-expand', array(
        'type' => 'theme_mod', // or 'option'
        'default' => 'md',
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'marmota_validate_navbar_expand',
    ) );

    $wp_customize->add_control( 'navbar-expand', array(
        'type' => 'select',
        'priority' => 10, // Within the section.
        'section' => 'interface', // Required, core or custom.
        'label' => __( 'Expandir men&uacute; principal', 'marmota' ),
        'description' => __( 'A partir del ancho...', 'marmota' ),
        'choices' => array(
            'sm' => __( 'Peque&ntilde;o', 'marmota' ),
            'md' => __( 'Mediano', 'marmota' ),
            'lg' => __( 'Grande', 'marmota' ),
            'xl' => __( 'Muy grande', 'marmota' ),
        ),
    ) );

}

function marmota_validate_navbar_expand( $navbar_expand ) {
    if ( in_array( $navbar_expand, array( 'sm', 'md', 'lg', 'xl' ), true ) ) {
        return $navbar_expand;
    }
}

add_action( 'customize_register', 'marmota_add_interface_section' );
