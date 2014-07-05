<?php
function register_weedpress_posttypes() {


	$labels = array(
	    'name' => 'Strains',
	    'singular_name' => 'Strain',
	    'add_new' => 'Add New',
	    'add_new_item' => 'Add New Strain',
	    'edit_item' => 'Edit Strain',
	    'new_item' => 'New Strain',
	    'all_items' => 'All Strains',
	    'view_item' => 'View Strain',
	    'search_items' => 'Search Strains',
	    'not_found' =>  'No strains found',
	    'not_found_in_trash' => 'No strains found in Trash',
	    'parent_item_colon' => '',
	    'menu_name' => 'Strains'
	  );

	 $args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'cannabis' ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => 5,
	    'supports' => array( 'title', 'editor', 'revisions', 'thumbnail' )
	  );

	register_post_type( 'strain', $args );
	pti_set_post_type_icon( 'strain', 'leaf' );


	$labels = array(
	    'name' => 'Concentrates',
	    'singular_name' => 'Concentrate',
	    'add_new' => 'Add New',
	    'add_new_item' => 'Add New Concentrate',
	    'edit_item' => 'Edit Concentrate',
	    'new_item' => 'New Concentrate',
	    'all_items' => 'All Concentrates',
	    'view_item' => 'View Concentrate',
	    'search_items' => 'Search Concentrates',
	    'not_found' =>  'No concentrates found',
	    'not_found_in_trash' => 'No concentrates found in Trash',
	    'parent_item_colon' => '',
	    'menu_name' => 'Concentrates'
	  );

	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'concentrates' ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => 6,
	    'supports' => array( 'title', 'thumbnail' )
	  );

	register_post_type( 'concentrate', $args );
	pti_set_post_type_icon( 'concentrate', 'beaker' );

	$labels = array(
	    'name' => 'Edibles',
	    'singular_name' => 'Edible',
	    'add_new' => 'Add New',
	    'add_new_item' => 'Add New Edible',
	    'edit_item' => 'Edit Edible',
	    'new_item' => 'New Edible',
	    'all_items' => 'All Edibles',
	    'view_item' => 'View Edible',
	    'search_items' => 'Search Edibles',
	    'not_found' =>  'No edibles found',
	    'not_found_in_trash' => 'No edibles found in Trash',
	    'parent_item_colon' => '',
	    'menu_name' => 'Edibles'
	);

	$args = array(
	    'labels' => $labels,
	    'public' => true,
	    'publicly_queryable' => true,
	    'show_ui' => true,
	    'show_in_menu' => true,
	    'query_var' => true,
	    'rewrite' => array( 'slug' => 'bud' ),
	    'capability_type' => 'post',
	    'has_archive' => true,
	    'hierarchical' => false,
	    'menu_position' => 7,
	    'supports' => array( 'title', 'editor', 'revisions', 'thumbnail' )
	);

	register_post_type( 'edible', $args );
	pti_set_post_type_icon( 'edible', 'food' );

	register_taxonomy( 'effects',
		'strain',
		array(
			'hierarchical' => false,
			'label' => 'Effects',
			'show_ui' => true,
			'query_var' => false,
			'singular_label' => 'Effect')
		);

	wp_insert_term( 'anxiety', 'effects' );
	wp_insert_term( 'creativity', 'effects' );
	wp_insert_term( 'energy', 'effects' );
	wp_insert_term( 'focus', 'effects' );
	wp_insert_term( 'hunger', 'effects' );
	wp_insert_term( 'insomnia', 'effects' );
	wp_insert_term( 'pain', 'effects' );

	register_taxonomy( 'phenotype',
		'strain',
		array(
			'hierarchical' => true,
			'label' => 'Phenotypes',
			'show_ui' => true,
			'query_var' => false,
			'singular_label' => 'Phenotype')
		);

	wp_insert_term( 'Indica', 'phenotype' );
	wp_insert_term( 'Sativa', 'phenotype' );
	wp_insert_term( 'Hybrid', 'phenotype' );

	register_taxonomy( 'hashtype',
		'concentrate',
		array( 'hierarchical' => true,
			'label' => 'Concentrate Types',
			'show_ui' => true,
			'query_var' => false,
			'singular_label' => 'Type')
		);
	wp_insert_term( 'Kief', 'hashtype' );
	wp_insert_term( 'Bubble Hash', 'hashtype' );
	wp_insert_term( 'Wax', 'hashtype' );
	wp_insert_term( 'Shatter', 'hashtype' );

	register_taxonomy( 'strength'
		,'strain',
		array(
			'hierarchical' => true,
			'label' => 'Strength',
			'show_ui' => true,
			'query_var' => false,
			'singular_label' => 'Strength')
		);
	wp_insert_term( 'High', 'strength' );
	wp_insert_term( 'Medium', 'strength' );
	wp_insert_term( 'Low', 'strength' );
}

add_action('init', 'register_weedpress_posttypes');

