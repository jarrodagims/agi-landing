<?php
	
if ( ! function_exists( 'agi_navigation_menus' ) ) {

// Register Navigation Menus
function agi_navigation_menus() {

	$locations = array(
		'primary'	=> __( 'Primary Menu - top of page', 'sherpa' ),
		'footer_a'	=> __( 'Footer Menu 1 - bottom of page', 'sherpa' ),
		'footer_b'	=> __( 'Footer Menu 2 - bottom of page', 'sherpa' ),
	);
	register_nav_menus( $locations );

}

// Hook into the 'init' action
add_action( 'init', 'agi_navigation_menus' );

}	
	
?>