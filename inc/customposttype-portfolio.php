<?php

/* ==  Register Post Type  ==============================*/

function dt_register_post_type( $name, $slug , $supports = array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt', 'comments'), $labels = null, $exclude_from_search = false ) {
	
	if(!$labels) {
		$labels = array(
			'name' => __( ucfirst($name),'engine'),
			'singular_name' => __( ucfirst($name),'engine' ),
			'add_new' => __('Add New','engine'),
			'add_new_item' => __('Add New ' . ucfirst($name),'engine'),
			'edit_item' => __('Edit ' . ucfirst($name),'engine'),
			'new_item' => __('New ' . ucfirst($name),'engine'),
			'view_item' => __('View ' . ucfirst($name),'engine'),
			'search_items' => __('Search ' . ucfirst($name),'engine'),
			'not_found' =>  __('No ' . ucfirst($name) . ' Found','engine'),
			'not_found_in_trash' => __('No ' . ucfirst($name) . ' Found in Trash','engine'), 
			'parent_item_colon' => ''
		  );
	  }
	  
	  $args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => $exclude_from_search,
		'publicly_queryable' => true,
		'show_ui' => true, 
		'query_var' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'rewrite' => array('slug' => $slug),
		'supports' => $supports
	  ); 
	  
	  register_post_type( __( strtolower($name) ), $args );

}



/* ==  Register Custom Taxonomy  ==============================*/

function dt_register_taxonomy($name, $slug, $posttype, $hierarchical) {

	register_taxonomy(
		__( $slug, 'engine' ), 
		array( __( strtolower($posttype), 'engine' ) ), 
		array(
			"hierarchical" => $hierarchical,
		 	"label" => __($name, 'engine'), 
		 	"singular_label" => __( ucfirst($name) ), 
		 	"rewrite" => 
			 	array(
			 		'slug' => strtolower($slug), 
			 		'hierarchical' => true
			 	)
		)
	); 
}

/* ==  Custom Post Types  ==============================
*
*	   dt_register_post_type($name, $slug, $supports, $exclude_from_search)
*
*	   STRING 		required 	$name
*	   STRING 		required 	$slug
*	   ARRAY  		optional 	$supports
*	   BOOLEAN 		optional	$exclude_from_search
*
*	   If you decide to change the slug, remember to re-save your permalinks
*	   in Settings > Permalinks
*
* ============================================================================*/

$supports = array('title', 'editor', 'thumbnail', 'custom-fields', 'excerpt');

$labels = array(
	'name' => __('Portfolio','engine'),
	'singular_name' => __( 'Portfolio','engine' ),
	'add_new' => __('Add New','engine'),
	'add_new_item' => __('Add New Item','engine'),
	'edit_item' => __('Edit Item','engine'),
	'new_item' => __('New Item','engine'),
	'view_item' => __('View Item','engine'),
	'search_items' => __('Search Item','engine'),
	'not_found' =>  __('No Items Found','engine'),
	'not_found_in_trash' => __('No Items Found in Trash','engine'),
	'parent_item_colon' => ''
);

dt_register_post_type('portfolio', 'portfolio', $supports, $labels);


/* ==  Custom Taxonomies  ==============================
*
*	   dt_register_taxonomy($name, $slug, $posttype, $hierarchical)
*
*	   STRING 		required 	$name
*	   STRING 		required 	$slug
*	   STRING 		required 	$posttype
*	   ARRAY  		optional 	$hierarchical
*
*	   If you decide to change the slug, remember to re-save your permalinks
*	   in Settings > Permalinks
*
* ============================================================================*/

dt_register_taxonomy('Portfolio Groups', 'group', 'portfolio', true);

/* ==  Specific Theme Enqueues  ==============================*/

function dt_specific_theme_js() {

	if(!is_admin()) {

		if(is_page_template('template-portfolio.php') || is_tax()) {
			wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', 'jquery');
			wp_enqueue_script('isotope');
		}

		if(is_single() && get_post_type() == 'portfolio') {
			wp_register_script('roundabout', get_template_directory_uri() . '/js/jquery.roundabout.min.js', 'jquery');
			wp_enqueue_script('roundabout');
		}

	}

}


?>
