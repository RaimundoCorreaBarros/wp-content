<?php 

/**
 * Remove Recent Comment Styles
 * Removes the styles located on head related to recent comments
 *
 * @return  void
 * @since   1.0
 */
function dl_remove_recent_comment_style() {

	global $wp_widget_factory;
	
	remove_action(
		'wp_head',
		array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'],
		'recent_comments_style' )
	);

}

add_action( 'widgets_init', 'dl_remove_recent_comment_style' );
