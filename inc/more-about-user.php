<?php
/**
 * Example: Let a user fill out their profile with a bit more info.
 */
if( ! function_exists( 'cmb2_example_plugin_more_about_user' ) ) {
	function cmb2_example_plugin_more_about_user( array $meta_boxes = array() ) {
		$prefix = '_cmb2_example_more_about_user_';

		$meta_boxes['cmb2_example_more_about_user'] = array(
			'id'               => 'cmb2_example_more_about_user',
			'title'            => __( 'CMB2 fields added to the user object will not have visible metabox title.', 'cmb2-example-plugin' ),
			'object_types'     => array( 'user' ), // These fields should be placed on the USER object.
			'show_names'       => true,
			'fields'           => array(
				array(
					'name'     => __( 'More About You (CMB2 Example Plugin)', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'title',
					'type'     => 'title',
					'on_front' => false,
				),
				array(
					'name'     => __( 'Favorite Color', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'color',
					'type'     => 'colorpicker',
				),
				array(
					'name'     => __( 'Birthday', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'birthday',
					'type'     => 'text_date',
					// 'date_format' => __( 'd-m-Y', 'cmb2' ) // Pass a custom date format to use european date format
				),
				array(
					'name'     => __( 'Timezone', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'timezone',
					'type'     => 'select_timezone',
				),
				array(
					'name'     => __( 'Pets', 'cmb2-example-plugin' ),
					'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
					'id'       => $prefix . 'pets',
					'type'     => 'group',
					'options'     => array(
						'group_title'   => __( 'Pet #{#}', 'cmb2-example-plugin' ), // {#} will be replaced by row number
						'add_button'    => __( 'Add Another Pet', 'cmb2-example-plugin' ),
						'remove_button' => __( 'Remove Pet', 'cmb2-example-plugin' ),
						'sortable'      => true, // beta
					),
					'fields'   => array(
						array(
							'name'     => __( 'Type of Animal', 'cmb2-example-plugin' ),
							'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
							'id'       => 'type',
							'type'     => 'select',
							'options'  => array(
								''      => __( '- Select One ', 'cmb2-example-plugin' ),
								'dog'   => __( 'Dog', 'cmb2-example-plugin' ),
								'other' => __( 'Other', 'cmb2-example-plugin' ), // Dogs or bust!
							)
						),
						array(
							'name'     => __( 'Name', 'cmb2-example-plugin' ),
							'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
							'id'       => 'name',
							'type'     => 'text',
						),
						array(
							'name'     => __( 'About', 'cmb2-example-plugin' ),
							'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
							'id'       => 'about',
							'type'     => 'textarea_small',
						),
						array(
							'name'     => __( 'Picture', 'cmb2-example-plugin' ),
							'desc'     => __( 'field description (optional)', 'cmb2-example-plugin' ),
							'id'       => 'image',
							'type'     => 'file',
						)

					)
				)
			)
		);

		return (array) $meta_boxes;
	}
}
add_filter( 'cmb2_meta_boxes', 'cmb2_example_plugin_more_about_user' );