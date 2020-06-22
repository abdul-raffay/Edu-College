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
                'edit_item' => 'Edit Teacher',
                'all_items' => 'All Teachers'
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

?>