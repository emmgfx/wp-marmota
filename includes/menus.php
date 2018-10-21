<?php

require_once 'class-wp-bootstrap-navwalker.php';

function custom_nav_menus() {
	$locations = array(
		'primary' => __( 'Primary menu', 'marmota' ),
		'footer' => __( 'Pié de página ', 'marmota' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'custom_nav_menus' );
