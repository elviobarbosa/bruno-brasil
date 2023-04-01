<?php

function posttype_portfolio() 
{    
    $labels = array(
        'name'                => ( 'Portfolio'),
        'singular_name'       => ( 'Portfolio'),
        'menu_name'           => ( 'Portfolio'),
        'parent_item_colon'   => ( 'Portfolio'),
        'all_items'           => ( 'All'),
        'view_item'           => ( 'View'),
        'add_new_item'        => ( 'Add new'),
        'add_new'             => ( 'Add new'),
        'edit_item'           => ( 'Edit'),
        'update_item'         => ( 'Update'),
        'search_items'        => ( 'Search'),
        'not_found'           => ( 'Not found'),
        'not_found_in_trash'  => ( 'Not found')
            );
    
    register_post_type( 'post_portfolio',
        array(
            'show_ui' => true,
            'menu_icon'         => 'dashicons-admin-appearance',
            'labels'            => $labels,
            'public'            => true,
            'show_in_menu'      => true,
            'show_in_nav_menus' => true,
            'menu_position'     => 5,
            'taxonomies'        => ['portfolio_category'],
            'has_archive'       => true,
            'show_in_rest'      => true,
            'hierarchical'      => true,
            'rewrite'           => array('slug' => 'work', 'with_front' => false),
            'supports'          => array( 'title', 'editor', 'thumbnail', 'excerpet'),
        )
    );
}


add_action('init', 'posttype_portfolio');
