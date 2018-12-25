<?php

function add_interface_section( $wp_customize ) {

    $wp_customize->add_section( 'interface', array(
        'title' => __( 'Interfaz', 'marmota' ),
        'panel' => 'marmota',
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ) );
    
    $wp_customize->add_setting( 'navbar-expand', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'transport' => 'refresh', // or postMessage
    ) );

    $wp_customize->add_control( 'navbar-expand', array(
        'type' => 'select',
        'priority' => 10, // Within the section.
        'section' => 'interface', // Required, core or custom.
        'label' => __( 'Expandir menú principal', 'marmota' ),
        'description' => sprintf(__( 'A partir del ancho...', 'marmota' ), $label ),
        'choices' => array(
            'sm' => __( 'Pequeño', 'marmota' ),
            'md' => __( 'Mediano', 'marmota' ),
            'lg' => __( 'Grande', 'marmota' ),
            'xl' => __( 'Muy grande', 'marmota' ),
        ),
    ) );

}
add_action( 'customize_register', 'add_interface_section' );
