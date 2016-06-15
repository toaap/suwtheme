<?php
	
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    	'primary' => __( 'Primary Menu', 'suwTheme' ),
	) );
	
	add_theme_support( 'post-thumbnails' ); 

	//images
	add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
	add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

	function remove_thumbnail_dimensions( $html ) {
	    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
	    return $html;
	}

?>