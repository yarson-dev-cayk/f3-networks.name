<?php
/**
 * EXTRAS (Helper-File with useful and custom Functions)
*/
function dd($data){ echo '<pre>', var_dump($data), '</pre>'; }

function current_obj_id(){ return get_queried_object_id(); }

function remove_editor_menu() {
	remove_action('admin_menu', '_add_themes_utility_last', 101);
} add_action('_admin_menu', 'remove_editor_menu', 1);

function get_all_menu($menu_slug, $order = 'ASC'){
	$menu_name = $menu_slug; //menu slug
	$locations = get_nav_menu_locations();
	if( !isset($locations[$menu_name]) ) { return []; }
	$menu = wp_get_nav_menu_object( $locations[$menu_name] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array('order' => $order) );

	if($order == 'DESC'){ return array_reverse($menuitems);	}else{ return $menuitems; }
} //Call: get_all_menu('primary'); / get_all_menu('primary','DESC');