<?php
function add_marmota_panel( $wp_customize ) {
    
    $wp_customize->add_panel( 'marmota', array(
        'priority' => 160,
        'capability' => 'edit_theme_options',
        'title' => __( 'Marmota', 'marmota' ),
        'description' => __( 'Ajustes de la plantilla', 'marmota' ),
    ) );
    
}
add_action( 'customize_register', 'add_marmota_panel' );

require_once 'customize-social.php';
