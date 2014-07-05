<?php
add_action( 'admin_init', 'x_init_custom_fields' );
function x_init_custom_fields() {

	// check that the metadata manager plugin is active by checking if the two functions we need exist
	if( function_exists( 'x_add_metadata_group' ) && function_exists( 'x_add_metadata_field' ) ) {

		// adds a new group to the test post type
		x_add_metadata_group( 'x_metaBox1', 'strain', array(
			'label' => 'Lab Results'
		) );


		// adds a text field to the first group
		x_add_metadata_field('x_fieldName1', 'strain', array(
			'group' => 'x_metaBox1', // the group name
			'label' => 'THC %', // field label
			'display_column' => true // show this field in the column listings
		));

		// adds a text field to the 2nd group
		x_add_metadata_field('x_fieldName2', 'strain', array(
			'group' => 'x_metaBox1',
			'label' => 'CBD %',
			'display_column' => true // show this field in the column listings

		));


		// adds a cloneable textarea field to the 1st group
		x_add_metadata_field('x_fieldTextarea1', 'strain', array(
			'group' => 'x_metaBox1',
			'label' => 'CBN %',
		));



	}
}