<?php
/**
 * Example: Add additional media to your blog posts
 */
if( ! function_exists( 'cmb2_example_plugin_post_media' ) ) {
	function cmb2_example_plugin_post_media( array $meta_boxes = array() ) {
		$prefix = '_cmb2_example_post_media_';

		$meta_boxes['cmb2_example_post_media'] = array(
			'id'               => 'cmb2_example_post_media',
			'title'            => __( 'Additional Media', 'cmb2-example-plugin' ),
			'object_types'     => array( 'post' ), // These fields should be placed on the USER object.
			'show_names'       => true,
			'fields'           => array(
				array(
					'name'     => __( 'Additional Files', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'files',
					'type'     => 'file_list',
				),
				array(
					'name'     => __( 'Video', 'cmb2-example-plugin' ),
					'desc'     => sprintf( __( 'Add a link to any video from a <a href="%1$s" target="_blank">supported provider</a> and a preview will automatically appear below.', 'cmb2-example-plugin' ), 'http://codex.wordpress.org/Embeds' ),
					'id'       => $prefix . 'youtube',
					'type'     => 'oembed',
				),
			)
		);

		return (array) $meta_boxes;
	}
}
add_filter( 'cmb2_meta_boxes', 'cmb2_example_plugin_post_media' );