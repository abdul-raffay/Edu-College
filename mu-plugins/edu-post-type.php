<?php 

    // Custom Post Type
    function custom_post_type() {
        
        // Teacher
        register_post_type('teacher', array(
            'public' => true,
            'rewrite' => array(
                'slug' => 'teacher'
            ),
            'show_ui' => true,
            'labels' => array(
                'name' => 'Teachers',
                'singular_name' => 'Teacher',
                'add_new_item' => 'Add New Teacher',
                'add_new' => 'Add Teacher',
                'edit_item' => 'Edit Teacher',
                'all_items' => 'All Teachers', 
                'name_admin_bar' => 'teachers',
                'view_item' => 'View Teacher',
                'all_items' => 'All Teachers',
                'search_items' => 'Search Teacher',
                'not_found' => 'No teacher found.'
            ),
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));

    }
    add_action('init', 'custom_post_type');


    // Theme Feature Image Support
    add_theme_support('post-thumbnails');

?>