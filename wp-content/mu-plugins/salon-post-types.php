<?php 
function salon_post_types(){
    register_post_type('gallerys',array(
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail', 'comments', 'author'),
        'rewrite'=> array('slug' => 'gallery' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => "Gallery",
            'add_new_item' => 'Add New Picture',
            'edit_item' => 'Edit Picture',
            'all_items' => 'All Pictures',
            'singular_name' => "Gallery"
            ),
        'menu_icon' => 'dashicons-cover-image'
    ));  


    register_post_type('testimonials',array(
        'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail', 'comments', 'author'),
        'rewrite'=> array('slug' => 'testimonial' ),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
        'name' => "Testimonials",
        'edit_item' => 'Edit Testimonial',
        'all_items' => 'All Testimonials',
        'singular_name' => "Testimonial"
        ),
        'menu_icon' => 'dashicons-testimonial'
        )); 

        register_post_type('services',array(
            'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail', 'comments', 'author'),
            'rewrite'=> array('slug' => 'service' ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => "Our Services",
                'add_new_item' => 'Add New Service',
                'all_items' => 'All Services',
                'singular_name' => "Service"
                ),
            'menu_icon' => 'dashicons-ellipsis'
        )); 

        register_post_type('specials',array(
            'supports' => array('title', 'editor','excerpt','custom-fields','thumbnail', 'comments', 'author'),
            'rewrite'=> array('slug' => 'special' ),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => "Specials",
                'all_items' => 'All Services'
                ),
            'menu_icon' => 'dashicons-awards'
        ));
}

add_action('init', 'salon_post_types');
?>