<?php 


    // To include CSS and JS files
    function edu_files() {
        // CSS files
        wp_enqueue_style('edu_main_file', get_stylesheet_uri());

        // JS files

    }
    add_action('wp_enqueue_scripts', 'edu_files');



    


?>