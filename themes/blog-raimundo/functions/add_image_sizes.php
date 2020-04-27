<?php

/**
 * Custom Images Names
 * Adds custom images sizes ready to use on administrator
 *
 * @return array
 * @since  1.0
 */
function dl_image_sizes( $sizes ) {

	$add_sizes = array(
		'trabajos'		=> __( 'Tamaño personalizado para trabajos web y sonido'),
		'musica'		=> __( 'Tamaño personalizado para post de musica')
	);

	return array_merge( $sizes, $add_sizes );

}


/**
 * Custom Images Sizes
 * Adds custom images sizes on posts
 *
 * @return void
 * @since  1.0
 * @see    https://developer.wordpress.org/reference/functions/add_image_size/
 * @see    https://codex.wordpress.org/Plugin_API/Filter_Reference/image_size_names_choose
 */
if ( function_exists( 'add_theme_support' ) ) {

	add_image_size( 'trabajos', 370, 190, true );			// Personalización de tamaño web y sonido
	add_image_size( 'musica', 320, 180, true ); 			// Personalización de tamaño musico

	add_filter( 'image_size_names_choose', 'dl_image_sizes' );

}
