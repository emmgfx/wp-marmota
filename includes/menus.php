<?php

require_once 'class-wp-bootstrap-navwalker.php';

function marmota_menus() {
	$locations = array(
		'primary' => __( 'Principal', 'marmota' ),
		'footer' => __( 'Pi&eacute; de p&aacute;gina ', 'marmota' ),
	);
	register_nav_menus( $locations );
}
add_action( 'init', 'marmota_menus' );
