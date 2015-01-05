<?php
/**
 * Example: Add social media URL fields to user profile.
 */
if( ! function_exists( 'cmb2_example_plugin_user_social_media_urls' ) ) {
	function cmb2_example_plugin_user_social_media_urls( array $meta_boxes = array() ) {
		$prefix = '_cmb2_example_social_urls_';

		$meta_boxes['cmb2_example_social_urls'] = array(
			'id'               => 'cmb2_example_social_urls',
			'title'            => __( 'CMB2 fields added to the user object will not have visible metabox title.', 'cmb2-example-plugin' ),
			'object_types'     => array( 'user' ), // These fields should be placed on the USER object.
			'show_names'       => true,
			'fields'           => array(
				array(
					'name'     => __( 'Social Media URLs (CMB2 Example Plugin)', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'title',
					'type'     => 'title',
					'on_front' => false,
				),
				array(
					'name' => __( 'Facebook URL', 'cmb2-example-plugin' ),
					'desc' => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'   => $prefix . 'facebook',
					'type' => 'text_url',
				),
				array(
					'name' => __( 'Twitter URL', 'cmb2-example-plugin' ),
					'desc' => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'   => $prefix . 'twitter',
					'type' => 'text_url',
				),
				array(
					'name' => __( 'Google+ URL', 'cmb2-example-plugin' ),
					'desc' => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'   => $prefix . 'googleplus',
					'type' => 'text_url',
				),
				array(
					'name' => __( 'LinkedIn URL', 'cmb2-example-plugin' ),
					'desc' => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'   => $prefix . 'linkedin',
					'type' => 'text_url',
				)
			)
		);

		return (array) $meta_boxes;
	}
}
add_filter( 'cmb2_meta_boxes', 'cmb2_example_plugin_user_social_media_urls' );