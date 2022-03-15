<?php 
function university_post_types(){
    register_post_type('gallery',array(
        'supports' => array('title', 'editor'),
        'rewrite'=> array('slug' => 'gallerys' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => "Gallery",
            'add_new_item' => 'Add New Picture',
            'edit_item' => 'Edit Picture',
            'all_items' => 'All Pictures',
            'singular_name' => "Gallery"
            ),
        'menu_icon' => 'dashicons-awards'
    ));  


    register_post_type('testimonials',array(
        'public' => true,
        'labels' => array(
        'name' => "Events"
        ),
        'menu_icon' => 'dashicons-calendar'
        )); 

        register_post_type('products',array(
            'supports' => array('title', 'editor'),
            'rewrite'=> array('slug' => 'programs' ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => "Programs",
                'add_new_item' => 'Add New Program',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singular_name' => "Program"
                ),
            'menu_icon' => 'dashicons-awards'
        )); 

        register_post_type('specials',array(
            'supports' => array('title', 'editor'),
            'rewrite'=> array('slug' => 'programs' ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => "Programs",
                'add_new_item' => 'Add New Program',
                'edit_item' => 'Edit Program',
                'all_items' => 'All Programs',
                'singular_name' => "Program"
                ),
            'menu_icon' => 'dashicons-awards'
        ));
}

add_action('init', 'university_post_types');
?>