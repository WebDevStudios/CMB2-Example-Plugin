<?php
/**
 * Example: Add avatar option to user profile.
 */
if( ! function_exists( 'cmb2_example_plugin_local_user_avatar' ) ) {
	function cmb2_example_plugin_local_user_avatar( array $meta_boxes = array() ) {
		$prefix = '_cmb2_example_local_user_avatar_';

		$meta_boxes['cmb2_example_local_user_avatar'] = array(
			'id'               => 'cmb2_example_local_user_avatar',
			'title'            => __( 'CMB2 fields added to the user object will not have visible metabox title.', 'cmb2-example-plugin' ),
			'object_types'     => array( 'user' ), // These fields should be placed on the USER object.
			'show_names'       => true,
			'fields'           => array(
				array(
					'name'     => __( 'Local User Avatar (CMB2 Example Plugin)', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'title',
					'type'     => 'title',
					'on_front' => false,
				),
				array(
					'name'     => __( 'Avatar', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'file',
					'type'     => 'file',
				)
			)
		);

		return (array) $meta_boxes;
	}
}
add_filter( 'cmb2_meta_boxes', 'cmb2_example_plugin_local_user_avatar' );