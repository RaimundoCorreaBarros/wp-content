<?php

// Register Custom Post Type
function cancion_post_type() {

	$labels = array(
		'name'                  => _x( 'Canciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Cancion', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Canción', 'text_domain' ),
		'name_admin_bar'        => __( 'canción', 'text_domain' ),
		'archives'              => __( 'Archivo de canción', 'text_domain' ),
		'attributes'            => __( 'Atributos de canción', 'text_domain' ),
		'parent_item_colon'     => __( 'Canción principal', 'text_domain' ),
		'all_items'             => __( 'Todas las canciones', 'text_domain' ),
		'add_new_item'          => __( 'Agregar una nueva canción', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nueva canción', 'text_domain' ),
		'edit_item'             => __( 'Editar canción', 'text_domain' ),
		'update_item'           => __( 'Actualizar canción', 'text_domain' ),
		'view_item'             => __( 'Ver canción', 'text_domain' ),
		'view_items'            => __( 'Ver canción', 'text_domain' ),
		'search_items'          => __( 'Buscar canción', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en canción', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este canción', 'text_domain' ),
		'items_list'            => __( 'Lista de canción', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de canciones', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista canción', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Cancion', 'text_domain' ),
		'description'           => __( 'Post para musica', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-video-alt3',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'cancion', $args );

}
add_action( 'init', 'cancion_post_type', 0 );

?>