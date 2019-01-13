<?php

require_once 'class-wp-bootstrap-navwalker.php';

function custom_nav_menus() {
	$locations = array(
		'primary' => __( 'Principal', 'marmota' ),
		'footer' => __( 'Pi&eacute; de p&aacute;gina ', 'marmota' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'custom_nav_menus' );
