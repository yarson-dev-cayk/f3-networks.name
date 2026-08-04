<?php
/**
 * ACF Functions
*/

//error_log('ACF FUNCTIONS FILE LOADED'); - to check is this page is loaded

/** ACF Pro Global page setup */
add_action('acf/init', function() {
    if (!function_exists('acf_add_options_page')) { return; }
    //Main options page:
    $parent = acf_add_options_page([
        'page_title' => 'Site Settings',
        'menu_title' => 'ACF Site Settings',
        'menu_slug'  => 'f3-site-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
    ]);
});