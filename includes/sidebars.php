<?php
function marmota_sidebars() {

	$args = array(
		'id'            => 'above_footer',
		'class'         => 'row',
		'name'          => __( 'Sobre el pie de p&aacute;gina', 'marmota' ),
		'description'   => __( 'Widgets sobre el pie de p&aacute;gina', 'marmota' ),
		'before_widget' => '<div class="col">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'marmota_sidebars' );
