<?php 


    // To include CSS and JS files
    function edu_files() {
        // CSS files
        wp_enqueue_style('edu_main_file', get_stylesheet_uri());
        wp_enqueue_style('main_style', get_template_directory_uri() . '/css/style.css');

        // JS files

    }
    add_action('wp_enqueue_scripts', 'edu_files');



    // Admin Bar Logic
    function Hide_Admin_Bar(){
        if(current_user_can('administrator')){
            show_admin_bar(true);
        }
        else{
            show_admin_bar(false);
        }
    }
    add_action('after_setup_theme', 'Hide_Admin_Bar');

    // Only Admin Can go to Dashboard
    function only_admin_dashboard() { 
        if (is_admin() && !current_user_can( 'administrator' )) { 
            wp_redirect(home_url()); 
            exit; 
        } 
    } 
    add_action('init', 'only_admin_dashboard'); 
    


?>