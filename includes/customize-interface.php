<?php

function marmota_add_interface_section( $wp_customize ) {

    # The interface section:
    
    $wp_customize->add_section( 'interface', array(
        'title' => __( 'Interfaz', 'marmota' ),
        'panel' => 'marmota',
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );
    
    # The navbar-expand option:
    
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
        'label' => __( 'Punto de expansión del menú principal', 'marmota' ),
        'description' => __( 'A partir de qué tamaño el menú principal pasa de su versión móvil a su versión de escritorio', 'marmota' ),
        'choices' => array(
            'sm' => __( 'Peque&ntilde;o', 'marmota' ),
            'md' => __( 'Mediano', 'marmota' ),
            'lg' => __( 'Grande', 'marmota' ),
            'xl' => __( 'Muy grande', 'marmota' ),
        ),
    ) );
    
    # The colorize-categories option
    
    $wp_customize->add_setting( 'colorize-categories', array(
        'type' => 'theme_mod', // or 'option'
        'default' => true,
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'marmota_validate_colorize_categories',
    ) );
    
    $wp_customize->add_control( 'colorize-categories', array(
        'type' => 'checkbox',
        'priority' => 10, // Within the section.
        'section' => 'interface', // Required, core or custom.
        'label' => __( 'Colorear las etiquetas de las categorías', 'marmota' ),
        'description' => __( 'Puedes desactivar esta opción por cuestiones de diseño. Los colores se asignan automáticamente a cada categoría.', 'marmota' ),
    ) );

}

function marmota_validate_navbar_expand( $navbar_expand ) {
    if ( in_array( $navbar_expand, array( 'sm', 'md', 'lg', 'xl' ), true ) ) {
        return $navbar_expand;
    }
}

function marmota_validate_colorize_categories( $colorize_categories ) {
    # If the option is boolean, use it, else use true as default.
    return ( is_bool( $colorize_categories ) ? $colorize_categories : true );
}

add_action( 'customize_register', 'marmota_add_interface_section' );
