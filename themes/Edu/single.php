<?php get_header(); ?>

    <?php

        $teacher = new WP_Query(array(
            'post_type' => 'teacher'
        ));

        while($teacher->have_posts()){
            $teacher->the_post();
            echo "<h1>NIce</h1>";
        }

    ?>

<?php get_footer(); ?>