<?php
/**
* Plugin Name: Domains API UI
* Plugin URI: https://github.com/TaylorJadin/domains-api-ui
* Description: This plugin adds custom post types and taxonomies for the Domains API.
* Version: 0.1
* Author: Reclaim Hosting
* Author URI: https://reclaimhosting.com
**/

add_action('init', function() {

    // Domains
    register_post_type('domains', [
        'label' => __('Domains', 'txtdomain'),
        'public' => true,
        'menu_position' => 0,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => ['title', 'author'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'domain'],
        'taxonomies' => ['registrar'],
        'labels' => [
            'singular_name' => __('Domain', 'txtdomain'),
            'add_new_item' => __('Add new domain', 'txtdomain'),
            'new_item' => __('New domain', 'txtdomain'),
            'view_item' => __('View domain', 'txtdomain'),
            'not_found' => __('No domains found', 'txtdomain'),
            'not_found_in_trash' => __('No domains found in trash', 'txtdomain'),
            'all_items' => __('All domains', 'txtdomain'),
            'insert_into_item' => __('Insert into domains', 'txtdomain')
        ],		
    ]);
    
    register_taxonomy('registrar', ['domains'], [
        'label' => __('Registrar', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'domains-registrar'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Registrar', 'txtdomain'),
            'all_items' => __('All Registrars', 'txtdomain'),
            'edit_item' => __('Edit Registrar', 'txtdomain'),
            'view_item' => __('View Registrar', 'txtdomain'),
            'update_item' => __('Update Registrar', 'txtdomain'),
            'add_new_item' => __('Add New Registrar', 'txtdomain'),
            'new_item_name' => __('New Registrar Name', 'txtdomain'),
            'search_items' => __('Search Registrars', 'txtdomain'),
            'not_found' => __('No Registrars found', 'txtdomain'),
        ]
    ]);
    register_taxonomy_for_object_type('registrar', 'domains');

    // Services
    register_post_type('services', [
        'label' => __('Services', 'txtdomain'),
        'public' => true,
        'menu_position' => 0,
        'menu_icon' => 'dashicons-products',
        'supports' => ['title', 'author'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'service'],
        'labels' => [
            'singular_name' => __('Service', 'txtdomain'),
            'add_new_item' => __('Add new service', 'txtdomain'),
            'new_item' => __('New service', 'txtdomain'),
            'view_item' => __('View service', 'txtdomain'),
            'not_found' => __('No services found', 'txtdomain'),
            'not_found_in_trash' => __('No services found in trash', 'txtdomain'),
            'all_items' => __('All services', 'txtdomain'),
            'insert_into_item' => __('Insert into services', 'txtdomain')
        ],		
    ]);

});
?>
