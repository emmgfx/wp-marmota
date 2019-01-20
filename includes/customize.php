<?php
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
