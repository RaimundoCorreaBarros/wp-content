<?php 
// Register Custom Post Type
function web_post_type() {

	$labels = array(
		'name'                  => _x( 'Webs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Web', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Webs', 'text_domain' ),
		'name_admin_bar'        => __( 'web', 'text_domain' ),
		'archives'              => __( 'Archivo de web', 'text_domain' ),
		'attributes'            => __( 'Atributos de web', 'text_domain' ),
		'parent_item_colon'     => __( 'Web principal', 'text_domain' ),
		'all_items'             => __( 'Todas las web', 'text_domain' ),
		'add_new_item'          => __( 'Agregar una nueva web', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nueva web', 'text_domain' ),
		'edit_item'             => __( 'Editar web', 'text_domain' ),
		'update_item'           => __( 'Actualizar web', 'text_domain' ),
		'view_item'             => __( 'Ver web', 'text_domain' ),
		'view_items'            => __( 'Ver webs', 'text_domain' ),
		'search_items'          => __( 'Buscar web', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Eliminar imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en web', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este web', 'text_domain' ),
		'items_list'            => __( 'Lista de webs', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de webs', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista web', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Web', 'text_domain' ),
		'description'           => __( 'Post para desarrollo web', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-widgets-menus',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'web', $args );

}
add_action( 'init', 'web_post_type', 0 );

?>