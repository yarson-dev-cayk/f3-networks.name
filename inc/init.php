<?php
/**
 * HOLDS CUSTOM POST TYPES, TAXONOMIES, etc.
*/

/** ADD CPT "Solutions" */
function solutions_cpt() {
	$labels = array(
		'name'                => _x('Solutions', 'Post Type General Name', 'maxcanvas_child'),
		'singular_name'       => _x('Solution', 'Post Type Singular Name', 'maxcanvas_child'),
		'menu_name'           => __('Solutions', 'maxcanvas_child'),
		'all_items'           => __('All Solutions', 'maxcanvas_child'),
		'view_item'           => __('View Solution', 'maxcanvas_child'),
		'add_new_item'        => __('Add New Solution', 'maxcanvas_child'),
		'add_new'             => __('Add New', 'maxcanvas_child'),
		'edit_item'           => __('Edit Solution', 'maxcanvas_child'),
		'new_item'            => __('New Solution', 'maxcanvas_child'),
		'update_item'         => __('Update Solution', 'maxcanvas_child'),
		'search_items'        => __('Search Solutions', 'maxcanvas_child'),
		'not_found'           => __('No Solutions found', 'maxcanvas_child'),
		'not_found_in_trash'  => __('No Solutions found in Trash', 'maxcanvas_child'),
	);
	$args = array(
		'label'               => __('Solutions', 'maxcanvas_child'),
		'description'         => __('Solution block/page', 'maxcanvas_child'),
		'labels'              => $labels,
		'supports'            => array('title','editor','excerpt','thumbnail','revisions','page-attributes'),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 3.1,
		'can_export'          => true,
		'has_archive'         => false, //Page (not CPT) owns /solutions/
		'rewrite'             => ['slug' => 'solutions'], //'rewrite' => ['slug' => '','with_front' => false] --> if we'd like to have slugs with CPTs not included 'solutions'
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-networking',
	);
	register_post_type( 'solution', $args );
} add_action( 'init', 'solutions_cpt', 0 );
