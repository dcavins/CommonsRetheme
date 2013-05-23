<?php 
function add_resource_types_taxonomy() {
	// Add new "Resource Category" taxonomy to Salud America Resources	

	$labels = array(

			'name' => _x( 'Resource Types', 'taxonomy general name' ),
			'singular_name' => _x( 'Resource Type', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search Resource Types' ),
			'all_items' => __( 'All Resource Types' ),
			'parent_item' => __( 'Parent Resource Types' ),
			'parent_item_colon' => __( 'Parent Resource Type:' ),
			'edit_item' => __( 'Edit Resource Type' ),
			'update_item' => __( 'Update Resource Type' ),
			'add_new_item' => __( 'Add New Resource Type' ),
			'new_item_name' => __( 'New Resource Type Name' ),
			'menu_name' => __( 'Resource Types' )
		);		

		
	$args = array(
		'labels' => $labels,
		'query_var' => true,
		'rewrite' => true,
		'hierarchical' => true,
        'show_ui' => true,		
		'capabilities' => array(
						'manage_terms' => 'edit_saresourcess',
						'delete_terms' => 'edit_saresourcess',
						'edit_terms' => 'edit_saresourcess',
						'assign_terms' => 'edit_saresourcess'
					)		
	);

    register_taxonomy('sa_resourcecat', 'saresources', $args);
	
		
}
add_action( 'init', 'add_resource_types_taxonomy', 0 );
