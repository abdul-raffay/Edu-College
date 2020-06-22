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


        // Course
        register_post_type('course', array(
            'public' => true,
            'rewrite' => array(
                'slug' => 'course'
            ),
            'show_ui' => true,
            'labels' => array(
                'name' => 'Courses',
                'singular_name' => 'Course',
                'add_new_item' => 'Add New Course',
                'add_new' => 'Add Course',
                'edit_item' => 'Edit Course',
                'all_items' => 'All Courses', 
                'name_admin_bar' => 'courses',
                'view_item' => 'View Course',
                'all_items' => 'All Courses',
                'search_items' => 'Search Course',
                'not_found' => 'No course found.'
            ),
            'supports' => array(
                'title'
            ),
            'menu_icon' => 'dashicons-book'
        ));

    }
    add_action('init', 'custom_post_type');


    // Theme Feature Image Support
    add_theme_support('post-thumbnails');


    // Custom Navigation Menu
    function edu_custom_menu(){
        register_nav_menu("main_menu", "Main Menu");
    }
    add_action('init', 'edu_custom_menu');

?>