<?php get_header(); ?>

        <?php

        $course = new WP_Query(array(
            'post_type' => 'course'
        ));

        while($course->have_posts()){
            $course->the_post();
            ?>

            <a href="<?php the_permalink(); ?>"><h2>Course Name: <?php the_title(); ?></h2></a>
            <?php  
            
            $teacherCourse = get_field('teacher_name');
            foreach($teacherCourse as $teacher){
                echo $teacher->post_title;
                ?>
                <br>
                <?php
            }

            ?>

            <hr>

            <?php 
        }
        wp_reset_postdata();
    ?>

<?php get_footer(); ?>