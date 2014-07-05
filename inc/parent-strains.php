<?php
function my_connection_types() {
	p2p_register_connection_type( array(
		'show'	=> 'from',
		'name' => 'strain_to_strain',
		'from' => 'strain',
		'to' => 'strain',
				'from_labels' => array(
		    'singular_name' => 'Strain',
		    'search_items' => 'Search strains',
		    'not_found' => 'No people found.',
		    'create' => 'Child Strains'
		  ),
		'to_labels' => array(
			'singular_name' =>  'Strain',
			'search_items' =>  'Search strains',
			'not_found' =>  'No strains found.',
			'create' =>  'Parent Strains',
		  ),
		'admin_box' => array(
			'show'	=> 'from',
			'context' => 'advanced'
			)
	) );

	p2p_register_connection_type( array(
		'show'	=> 'from',
		'name' => 'concentrate_to_strain',
		'from' => 'concentrate',
		'to' => 'strain',

		'to_labels' => array(
			'singular_name' =>  'Strain',
			'search_items' =>  'Search strains',
			'not_found' =>  'No strains found.',
			'create' =>  'Parent Strains',
		  ),
		'admin_box' => array(
			'show'	=> 'from',
			'context' => 'advanced'
			)
	) );
}
add_action( 'p2p_init', 'my_connection_types' );
